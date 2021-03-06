<?php
function tpl_engine($tpl_instance,$tpl_name,$type=0,$compile_type="debug"){
	global $skinUrl;
	$child_root=preg_match("/\//",$tpl_name);
	$refuse_file_array=array("configuration","do","includes","modules","rooturl");
	$creat_path="../";
	$model_path="../models/";
	$tpl_path="../templates/".$tpl_instance."/";
	if($type==1){
		$creat_path="";
		$model_path="models/";
		$tpl_path="templates/".$tpl_instance."/";
	}
		$q_creat_path="";
		$q_model_path="models/";
		$q_tpl_path="templates/".$tpl_instance."/";
		
	if($child_root==false && in_array(preg_replace("/(\.\w+)$/","",$tpl_name),$refuse_file_array)){
		if($type==0){
			echo "<font color='red'>".$tpl_path.$tpl_name."不能进行编译！</font><br />";
		}
	}else{
		$tmp_url_array=explode("/",$tpl_name);
		$last_dir='';
		foreach($tmp_url_array as $rs){
			if(preg_match("/\.[(htm)|(html)]/",$rs)){
				$tmp_fname=get_filename($tpl_name);
				$tpl_file=file_get_contents($tpl_path.$tpl_name);//编译对应的template文件
				$model_file_url=$model_path.$tmp_fname;
				if(file_exists($model_file_url)){
					$model_file=file_get_contents($model_file_url);//编译对应的model文件
				}else{
					$model_file='';
				}
				$tpl_file=preg_replace("/skin\/$tpl_instance\/((?!(js)|(home))\w+)\//",'skin/<?php echo $skinUrl;?>/',$tpl_file);
				$model_file=preg_replace("/skin\/$tpl_instance\/((?!(js)|(home))\w+)\//",'skin/$skinUrl/',$model_file);
				$compile_file=$model_file.tpl_compile($tpl_file);
				
				if($compile_type=='debug'){
$compile_file = '<?php
/*
 * 此段代码由debug模式下生成运行，请勿改动！
 * 如果debug模式下出错不能再次自动编译时，请进入后台手动编译！
 */
/* debug模式运行生成代码 开始 */
if(!function_exists("tpl_engine")) {
	require("foundation/ftpl_compile.php");
}
if(filemtime("'.$q_tpl_path.$tpl_name.'") > filemtime(__file__) || (file_exists("'.$q_model_path.$tmp_fname.'") && filemtime("'.$q_model_path.$tmp_fname.'") > filemtime(__file__)) ) {
	tpl_engine("'.$tpl_instance.'","'.$tpl_name.'",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?>'.$compile_file;
}

$compile_file = '<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 '.$q_tpl_path.$tpl_name.'
 * 如果您的模型要进行修改，请修改 '.$q_model_path.$tmp_fname.'
 *
 * 修改完成之后需要您进入后台重新编译，才会重新生成。
 * 如果您开启了debug模式运行，那么您可以省去上面这一步，但是debug模式每次都会判断程序是否更新，debug模式只适合开发调试。
 * 如果您正式运行此程序时，请切换到service模式运行！
 *
 * 如有您有问题请到官方论坛（http://tech.jooyea.com/bbs/）提问，谢谢您的支持。
 */
?>'.$compile_file;

if($compile_type=='debug'){
	$compile_file .= "<?php } ?>";
}
				$creat_file=$creat_path.$tmp_fname;
				$fileob=fopen($creat_file,"w+");
				$num=fwrite($fileob,$compile_file);
				if($num>0){
					if($type==0){
						echo $tpl_path.$tpl_name."编译成功<br />";
					}
				}else{
					if($type==0){
						echo $tpl_path.$tpl_name."<font color='red'>编译失败!</font><br />";
					}
				}
			}else{
				if(!file_exists("../".$last_dir.$rs)){
					mkdir("../".$last_dir.$rs);
				}
				$last_dir=$rs."/".$last_dir;
			}
		}
	}
}

function tpl_compile($str){
	$tplTags=array(
								';/}',
								'{inc:',
								'{echo:',
								'{sta:',
								'[loop]}',
								'{end:',
								'foreach/}',
								'[exc]}',
								'if/}'
						);
	$phpCodes=array(
								';?>',
								'<?php ',
								'<?php echo ',
								'<?php ',
								'{?>',
								'<?php ',
								'}?>',
								'{?>',
								'}?>'
						);

	if(strpos($str,"plugin_hook")){
		$str=preg_replace_callback("/\{\w+:plugin_hook\([\'\"]([^\)]*)[\'\"]\);\/\}/i","comp_plugins",$str);
	}
  $str=lpstr_format($str);
  return str_replace($tplTags,$phpCodes,$str);
}

function lpstr_format($str){
	return preg_replace('/lp\{([a-zA-Z0-9]{1,5}_\w+)\}/','$language->lang(\'$1\')',$str);
}

function get_filename($tpl_name){
	 return str_replace(array('.html','.htm'),'.php',$tpl_name);
}

function comp_plugins($match){
	if($match[1]!=''){
		global $dbo;
		global $tablePreStr;
		global $dbServs;
		if(!isset($dbServs)){
			require(dirname(__FILE__) . "/../configuration.php");
			require($webRoot.$baseLibsPath."conf/dbconf.php");
			require($webRoot.$baseLibsPath."fdbtarget.php");
			require($webRoot.$baseLibsPath."libs_inc.php");
			require($webRoot.$baseLibsPath."cdbex.class.php");
		}
		$plugin_ids=explode(",",$match[1]);
		$sql_str='';
		foreach($plugin_ids as $rs){
			if($sql_str!=''){
				$sql_str.=",";
			}
			$sql_str.="'".$rs."'";
		}
		dbtarget('r',$dbServs);
		$dbo = new dbex;
		$plugins_array=array();
		$t_plugins=$tablePreStr."plugins";
		$t_plugin_url=$tablePreStr."plugin_url";
		$sql="SELECT b.* FROM $t_plugins a,$t_plugin_url b WHERE a.name=b.name and a.valid=1 and b.layout_id in($sql_str)";
		$rows=$dbo->getRs($sql);
		foreach($rows as $row){
			$plugins_array["$row[layout_id]"][]=$row;
		}
		$str=serialize($plugins_array);
		return "{sta:\$plugins=unserialize('$str');/}";
	}
}

function comp_plugins_position(){
	global $tplAct;
	global $pluginOpsition;
	global $compileType;
	foreach($pluginOpsition as $file_name){
		tpl_engine($tplAct,$file_name,0,$compileType);
	}
}
?>
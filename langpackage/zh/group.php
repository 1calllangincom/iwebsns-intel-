<?php
class grouplp{
	var $g_group="俱乐部";
	var $g_list="俱乐部列表";
	var $g_name="名称";
	var $g_mine="我的俱乐部";
	var $g_creat="创建俱乐部";
	var $g_hot="热门俱乐部";
	var $g_search_group="搜索俱乐部";
	var $g_return_hot="热门俱乐部";
	var $g_return_search="搜索俱乐部";
	var $g_lock_group="该俱乐部已经被锁定";
	var $g_resume_len="俱乐部介绍过长，请修正";
	var $g_no_photo="没有上传俱乐部logo";
	var $g_c_suc="创建俱乐部成功";
	var $g_false="操作失败,请重新登陆";
	var $g_no_pass="请认真填写每个选项";
	var $g_re_suc="回复成功";
	var $g_intro="俱乐部介绍";
	var $g_wrong="发生错误，请与管理员联系";
	var $g_no_group="对不起，当前没有俱乐部";
	var $g_m_limit="管理员人数过多";
	var $g_no_privilege="对不起，您没有权限";
	var $g_app_suc="设置管理员成功";
	var $g_revoke_suc="撤销管理员成功";
	var $g_no_manager="没有该管理员";
	var $g_del_suc="删除成功";
	var $g_drop_suc="注销俱乐部成功";
	var $g_drop="注销俱乐部";
	var $g_c_limit="您所建立的俱乐部过多";
	var $g_exit_suc="退出俱乐部成功";
	var $g_change_suc="修改成功";
	var $g_rep_join="您已经是组员了";
	var $g_a_exit="是否退出俱乐部？";
	var $g_exit="退出俱乐部";
	var $g_rep_reg="您已经提交了申请";
	var $g_join_suc="加入成功";
	var $g_reg_suc="申请已提交,请等待";
	var $g_manage="俱乐部管理";
	var $g_info="基本资料";
	var $g_info_change="资料修改";
	var $g_manage_member="成员管理";
	var $g_en_space="进入空间";
	var $g_space="俱乐部空间";
	var $g_budget_k="俱乐部报销系统";
	var $g_budget="报销管理系统"	;
	var $g_budget_manager="俱乐部报销管理系统";
	var $g_forcast_year_forcast="全年预算分配";
	var $g_click_join="点击加入";
	var $g_find_group="查找俱乐部";
	var $g_return="俱乐部列表";
	var $g_re_space="俱乐部空间";
	var $g_a_drop="是否注销俱乐部？";
	var $g_manager="管理员";
	var $g_m_normal="普通组员";
	var $g_c_time="创建时间";
	var $g_r_time="申请时间";
	var $g_tag="标签";
	var $g_resume="简介";
	var $g_m_num="成员数";
	var $g_e_num="活动数";
	var $g_join_type="加入方式";
	var $g_logo="俱乐部logo";
	var $g_type="类别";
	var $g_creator="最高管理员";
	var $g_gonggao="公告";
	var $g_wwid="WWID";
	var $g_department="部门";
	var $g_factory="工厂";
	var $g_m_name="名字";
	var $g_sex="性别";
	var $g_role="身份";
	var $g_state="状态";
	var $g_ctrl="操作";
	var $g_freedom_join="自由加入";
	var $g_check_join="验证加入";
	var $g_refuse_join="拒绝加入";
	var $g_examine="查看";
	var $g_del_member="是否删除组员?";
	var $g_del_subject="是否删除此话题?";
	var $g_set_manager="设置管理员";
	var $g_revoke_manager="撤销管理员";
	var $g_req_member="待审核的组员";
	var $g_re_search="重新搜索";
	var $g_check="同意";
	var $g_del="删除";
	var $g_not_pass="未通过";
	var $g_pass="已通过";
	var $g_none_group="对不起，您目前还没有俱乐部";
	var $g_search_none="对不起，没有您要查找的俱乐部，<a href='modules.php?app=group_select'>重新搜索</a>";
	var $g_s_none_sub="对不起，没有您要查找的主题";
	var $g_my_creat="创建的俱乐部";
	var $g_my_join="加入的俱乐部";
	var $g_none="对不起，该用户目前还没有俱乐部";
	
	var $g_button_creat="创建";
	var $g_button_cancel="取消";
	var $g_button_yes="确定";
	var $g_button_re="恢复";
	var $g_budget_view="查看预算";
	var $g_budget_reimbursement="报销";
	var $g_budget_i_reimbursement="我要报销";
	var $g_budget_i_forcast="提交季度预算";
	var $g_budget_list="详表";
	var $g_budget_unaprove="审批报销";
	var $g_budget_deleted="查看退回报销";
	var $g_change_logo="更改logo";
	var $g_forcast_unaprove="审批预算";
	var $g_budget_rest="剩余预算";
	var $g_table="报表";
	var $g_man="男";
	var $g_woman="女";
	var $g_f_name="按俱乐部名称查找";
	var $g_f_type="按俱乐部类别查找";
	var $g_f_tag="按俱乐部标签查找";
	var $g_not_null="信息不能为空";
	var $g_data_none="您访问的页面信息不存在";
	var $g_event="活动列表";
	var $g_members="成员列表";
	var $g_mangers="管理员列表";
	var $g_photos="俱乐部相册";
	var $g_bbs="俱乐部讨论区";
	var $g_topic_num="共有{t_num}个主题";
	var $g_search="搜索";
	var $g_send="发表新帖";
	var $g_subject="主题";
	var $g_sendor="发帖人";
	var $g_time="时间";
	var $g_read="阅读";
	var $g_re="回复";
	var $g_editor="作者";
	var $g_leave_me="[发小纸条]";
	var $g_they_re="网友回复";
	var $g_arrest="对不起，您的权限不能访问";
	var $g_send_time="发表于：{date}";
	var $g_i_re="我要回复";
	var $g_title="请填写标题";
	var $g_none_content="请填写内容";
	var $g_content="内容";
	var $g_pic="图片";
	var $g_search_result="查询结果";
	var $g_his_group="{holder}的俱乐部";
	var $g_logo_limit="对不起，图片类型不匹配";
	var $g_relation="属俱乐部";
	var $g_cho="请选择";
	var $g_sel_album="（直接从相册中选择图片上传）";
	var $g_join_num="已有{num}人加入";
	var $g_iam="我是";
	var $g_submit="提交";
	var $g_face="表情";
	var $g_remind="{num}人请求加入俱乐部";
	
	var $g_fill_500_characters="最多填写500个字符";
	var $g_fill_200_characters="最多填写200个字符";
	var $g_founder="管理员";
	var $g_seek="查找";
	var $g_data_loading="数据加载中,请稍侯";
	var $g_content_not_saved="您填写的内容尚未保存";
	
	var $g_you_assigned = "您被指派为";
	var $g_group_administrator = "俱乐部的管理员";
	var $g_system_sends = "系统发送";
	var $g_a_notice = "个通知";
	var $g_joined_group = "加入了俱乐部";
	var $g_create_group = "创建了俱乐部";
	var $g_you_as = "您在";
	var $g_admin_revocation = "俱乐部的管理员身份被撤销";
	
};
?>
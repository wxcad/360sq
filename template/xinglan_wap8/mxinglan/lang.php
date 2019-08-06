<?php



if(!defined('IN_DISCUZ')) {

	exit('Access Denied');

}



function langm($t) {	

	$langs = array(

		'home'		=> '首页',

		'forum'		=> '论坛',

		'pic'		=> '美图',

		'guide'		=> '导读',

		'mdoing'	=> '记录',

		'mfollow'	=> '广播',

		'mfeed'		=> '动态',

		'photo'		=> '相册',	

		'more'		=> '更多',

		'todayposts'=> '今日新帖',

		'fup'		=> '上级',

		'flist'		=> '列表',

		'plist'		=> '所在频道',

		'res'		=> '刷新',	

		'prev'		=> '上一页',

		'next'		=> '下一页',

		'load'		=> '加载更多',

		'load_pic'	=> '加载中...',

		'newth'		=> '新帖',

		'dfth'		=> '默认',

		'oi'		=> '我',

		'subfrm'	=> '子版块',

		'nogory'    => '没有分类',

		'nosubfrm'  => '没有子版块',

		'thtys'		=> '分类',

		'othtys'	=> '展开分类',

		'ptat'		=> '发表于',

		'reply'		=> '发表回复',

		'srp'		=> '查看回复',

		'rcom'		=> '发表评论',

		'acom'		=> '查看评论',

		'opt'		=> '选填',

		'selectsimm'=> '点击这里可以添加表情哦o(∩_∩)o',

		'od'		=> '条',

		'de'		=> '的',

		'tt'		=> '共有',

		'thread'	=> '主题',

		'reply'		=> '回复',	

		'views'		=> '看贴',

		'mods'		=> '管理',

		'nomessage' => '此贴无文字内容',

		'mthread'	=> '帖子',

		'mforum'	=> '版块',

		'profile'	=> '个人资料',

		'favorite'	=> '我的收藏',

		'mypm'		=> '我的消息',

		'psubject'	=> '帖子标题',

		'arc'		=> '文章',

		'lz'		=> '楼主',

		'4hr'		=> '4小时',

		'24hr'		=> '24小时',

		'168hr'		=> '一周',

		'720hr'		=> '一月',		

		'cldate'	=> '日期格式:2010-12-01 10:50',

		'pcf'		=> '重复',	

		'back'		=> '返回',

		'search'	=> '搜索',

		'searchthread' => '输入帖子关键字',

		'searchportal' => '输入文章关键字',

		'new_remind' => '有新提醒',	

		'mefriend_doing' => '我和好友',

		'friend_feed' => '好友动态',	

		'tthread'	=> '正文',

		'loginaq'	=> '安全提问?',

		'nosearch'	=> '暂无',

		'gohome'	=> '返回首页',

		'regmes'	=> '原因',	

		'upload_pic' => '上传图片',	

		'reg'		=> '注册',

		'qq'		=> '登录',

		'nologin'	=> '已有账号?',	

		'username'	=> '账号',		

		);

	$t = isset($langs[$t])? $langs[$t] : $t;

	if(CHARSET == 'GBK'){

		return $t;

	} else {

		return diconv($t,'GBK',CHARSET);

	}

}



?>
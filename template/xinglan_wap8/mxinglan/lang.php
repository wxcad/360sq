<?php



if(!defined('IN_DISCUZ')) {

	exit('Access Denied');

}



function langm($t) {	

	$langs = array(

		'home'		=> '��ҳ',

		'forum'		=> '��̳',

		'pic'		=> '��ͼ',

		'guide'		=> '����',

		'mdoing'	=> '��¼',

		'mfollow'	=> '�㲥',

		'mfeed'		=> '��̬',

		'photo'		=> '���',	

		'more'		=> '����',

		'todayposts'=> '��������',

		'fup'		=> '�ϼ�',

		'flist'		=> '�б�',

		'plist'		=> '����Ƶ��',

		'res'		=> 'ˢ��',	

		'prev'		=> '��һҳ',

		'next'		=> '��һҳ',

		'load'		=> '���ظ���',

		'load_pic'	=> '������...',

		'newth'		=> '����',

		'dfth'		=> 'Ĭ��',

		'oi'		=> '��',

		'subfrm'	=> '�Ӱ��',

		'nogory'    => 'û�з���',

		'nosubfrm'  => 'û���Ӱ��',

		'thtys'		=> '����',

		'othtys'	=> 'չ������',

		'ptat'		=> '������',

		'reply'		=> '����ظ�',

		'srp'		=> '�鿴�ظ�',

		'rcom'		=> '��������',

		'acom'		=> '�鿴����',

		'opt'		=> 'ѡ��',

		'selectsimm'=> '������������ӱ���Ŷo(��_��)o',

		'od'		=> '��',

		'de'		=> '��',

		'tt'		=> '����',

		'thread'	=> '����',

		'reply'		=> '�ظ�',	

		'views'		=> '����',

		'mods'		=> '����',

		'nomessage' => '��������������',

		'mthread'	=> '����',

		'mforum'	=> '���',

		'profile'	=> '��������',

		'favorite'	=> '�ҵ��ղ�',

		'mypm'		=> '�ҵ���Ϣ',

		'psubject'	=> '���ӱ���',

		'arc'		=> '����',

		'lz'		=> '¥��',

		'4hr'		=> '4Сʱ',

		'24hr'		=> '24Сʱ',

		'168hr'		=> 'һ��',

		'720hr'		=> 'һ��',		

		'cldate'	=> '���ڸ�ʽ:2010-12-01 10:50',

		'pcf'		=> '�ظ�',	

		'back'		=> '����',

		'search'	=> '����',

		'searchthread' => '�������ӹؼ���',

		'searchportal' => '�������¹ؼ���',

		'new_remind' => '��������',	

		'mefriend_doing' => '�Һͺ���',

		'friend_feed' => '���Ѷ�̬',	

		'tthread'	=> '����',

		'loginaq'	=> '��ȫ����?',

		'nosearch'	=> '����',

		'gohome'	=> '������ҳ',

		'regmes'	=> 'ԭ��',	

		'upload_pic' => '�ϴ�ͼƬ',	

		'reg'		=> 'ע��',

		'qq'		=> '��¼',

		'nologin'	=> '�����˺�?',	

		'username'	=> '�˺�',		

		);

	$t = isset($langs[$t])? $langs[$t] : $t;

	if(CHARSET == 'GBK'){

		return $t;

	} else {

		return diconv($t,'GBK',CHARSET);

	}

}



?>
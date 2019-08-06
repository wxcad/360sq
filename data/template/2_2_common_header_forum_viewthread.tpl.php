<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/xinglan_s1/common/header.htm', './template/default/common/header_common.htm', 1565105285, '2', './data/template/2_2_common_header_forum_viewthread.tpl.php', './template/xinglan_s1', 'common/header_forum_viewthread')
|| checktplrefresh('./template/xinglan_s1/common/header.htm', './template/default/common/header_qmenu.htm', 1565105285, '2', './data/template/2_2_common_header_forum_viewthread.tpl.php', './template/xinglan_s1', 'common/header_forum_viewthread')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2017 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_forum_viewthread.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>' />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
 <script type="text/javascript">
var tpldir='./template/xinglan_s2';
</script>
<script src="./template/xinglan_s2/image/jquery.js" type="text/javascript" type="text/javascript"></script>
    <script type="text/javascript">
    	var jq=jQuery.noConflict();
    </script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?> <?php include template('common/header_diy'); ?> 
<?php } ?> 
<?php if(check_diy_perm($topic)) { ?> <?php include template('common/header_diynav'); ?> 
<?php } ?> 
<?php if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?> 
<?php echo $diynav;?> 
<?php } ?> 
<?php if(empty($topic) || $topic['useheader']) { ?> 
<?php if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c"> 请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a> </div>
<?php } ?> 
<?php if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut"> <span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span> 您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！ <a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a> </div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script> 
<?php } if(!IS_ROBOT) { ?> 
<?php if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
  <li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>
  <li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>
  <?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
  <li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
  <?php } ?> 
  <?php if($_G['member']['newprompt']) { ?> 
  <?php if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?>  <li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
  <?php } ?> 
  <?php } ?> 
  <?php if(empty($_G['cookie']['ignore_notice'])) { ?>
  <li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
  <?php } ?>
</ul>
<?php } ?> 
<?php if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;"> 
  <?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="默认"><i></i></span><?php } ?> 
  <?php if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?> 
  <span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span> 
  <?php } ?> 
</div>
<?php } ?> 
<?php if($_G['uid']) { ?>
<ul id="myitem_menu" class="p_pop" style="display: none;">
  <li><a href="forum.php?mod=guide&amp;view=my">帖子</a></li>
  <li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a></li>
  <li><a href="home.php?mod=space&amp;do=friend">好友</a></li>
  <?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<?php } ?> <div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div> 
<?php } ?> <?php echo adshow("headerbanner/wp a_h");?> 
 <div class="bottombg">
 

 
 
 <div class="xm_header_top">
            <p class="xm_header_top_ul">
<!--
<span> <a href="#" target="_blank">社区客户端</a></span> -->
            </p>
        </div>
 
 
 
 

<header class="nav">

    <div class="nav-con">
        <div class="left logo"><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" ><img src="template/xinglan_s1/image/logo.png" alt="logo"></a></div>
        <div class="left nav-con-main">
            <ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
        </div>

        <?php if(($_GET['action'] == 'newthread' || $_GET['action'] == 'edit') && $special == 6) { } else { ?>

        <a class="right signs"  onclick="showWindow('nav', this.href, 'get', 0)" href="plugin.php?id=dsu_paulsign:sign"><span></span></a>
<?php } ?>

    <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?>
    <?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { ?>        <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } ?>
    <?php } ?>
        <?php echo $diynav;?>

<div class="right user-status">
        	<?php if($_G['uid'] > 0) { ?>
        	<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=index&amp;view=admin" target="_blank"><img src="<?php echo avatar($_G['uid'],'small',true,true);?>"/></a>
            <ul>
                <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=index&amp;view=admin" target="_blank">个人主页</a></li>
<li><a href="home.php?mod=space&amp;do=mynotice" id="myprompt" target="_blank">提醒<?php if($_G['member']['newprompt']) { ?>(<font color="red"><?php echo $_G['member']['newprompt'];?></font>)<?php } ?></a><span id="myprompt_check"></span></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me" target="_blank">收藏</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=setting">设置</a></li>
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">云平台</a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank">管理中心</a></li>
<?php } if($_G['uid'] && $_G['adminid'] == 1) { ?>
<li><a href="misc.php?mod=stat" target="_blank">站点统计</a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
            </ul>
        	<?php } else { ?>
            <a href="member.php?mod=logging&amp;action=login" target="_blank"><img src="./uc_server/images/noavatar_small.gif"/></a>
            <ul>
                <li><a href="member.php?mod=logging&amp;action=login" target="_blank">登录</a></li>
                <li><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" target="_blank">注册</a></li>
            </ul>
<?php } ?>
        </div>

        <?php if(!$hide_header_search_btn) { ?><a href="search.php?mod=forum"><div class="right nav-search-click"></div></a><?php } ?>
<div class="right nav-search">
            <form action="search.php?mod=forum" method="post">
                <input type="text" name="srchtxt" class="left nav-search-con" />
                <i class="delete"></i>
                <input type="submit" value="" class="left nav-search-btn">
                <input type="hidden" name="searchsubmit" value="yes">
                <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
            </form>
        </div>
    </div>
    <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</header>




<div id="hd">     
    <?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
    <ul class="p_pop h_pop" id="plugin_menu" style="display: none">
      <?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> 
      <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
      <li><?php echo $module['url'];?></li>
      <?php } ?> 
      <?php } ?>
    </ul>
    <?php } ?> 
    <?php echo $_G['setting']['menunavs'];?>
    <div id="mu" class="cl"> 
      <?php if($_G['setting']['subnavs']) { ?> 
      <?php if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { ?> 
      <?php if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
      <ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
        <?php echo $subnav;?>
      </ul>
      <?php } ?> 
      <?php } ?> 
      <?php } ?> 
    </div>
    <?php echo adshow("subnavbanner/a_mu");?> 
    
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?> 
<?php } ?>
<div id="wp" class="wp">



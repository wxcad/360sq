<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_1');
0
|| checktplrefresh('data/diy/./template/xinglan_s1//portal/view_1.htm', './template/xinglan_s1/portal/portal_comment.htm', 1565106313, 'diy', './data/template/2_diy_portal_view_1.tpl.php', 'data/diy/./template/xinglan_s1/', 'portal/view_1')
|| checktplrefresh('data/diy/./template/xinglan_s1//portal/view_1.htm', './template/default/common/seccheck.htm', 1565106313, 'diy', './data/template/2_diy_portal_view_1.tpl.php', 'data/diy/./template/xinglan_s1/', 'portal/view_1')
;?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="template/xinglan_s1/common/index.css">

<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>), imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>', aimgcount = new Array();</script>
<div class="wp adcs">

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em>
<?php } ?>
<a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> <em>&rsaquo;</em>
查看内容
</div>
   </div> 
    <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->

</div>


<?php if(!empty($_G['setting']['pluginhooks']['view_article_top'])) echo $_G['setting']['pluginhooks']['view_article_top'];?><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>

<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm_haa cl">
<div class="bm_h cl">
<?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 rss" target="_blank" title="RSS">订阅</a><?php } if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 addnew">发布文章</a>
<?php } ?>
<h1 class="xs2">文章</h1>
</div></div>
<div class="kjkjb">
<?php if($cat['subs']) { ?>
<div class="bm_c bbda"  style="display:none">
下级分类:&nbsp;&nbsp;<?php $i = 1;?><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { if($i != 1) { ?><span class="pipe">|</span><?php } ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xi2"><?php echo $value['catname'];?></a><?php $i--;?><?php } ?>
</div>
<?php } ?>







<div class="bm vw" style="margin-bottom:0;">
<div class="h hm">
<div class="zxtoux"><?php echo avatar($article['uid'],small);?></div>
<h1 class="ph"><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(待审核)<?php } elseif($article['status'] == 2) { ?>(已忽略)<?php } ?></h1>
<p class="xg1">
时间：<?php echo $article['dateline'];?>
<a class="zz" href="home.php?mod=space&amp;uid=<?php echo $article['uid'];?>">作者：<?php echo $article['username'];?></a>
阅读<em id="_viewnum">(<?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?>)</em>
评论: <?php if($article['commentnum'] > 0) { ?><a href="<?php echo $common_url;?>" title="查看全部评论"><em id="_commentnum"><?php echo $article['commentnum'];?></em></a><?php } else { ?>0<?php } if($article['author']) { ?><?php echo $article['author'];?><?php } if($article['from']) { ?>来自: <?php if($article['fromurl']) { ?><a href="<?php echo $article['fromurl'];?>" target="_blank"><?php echo $article['from'];?></a><?php } else { ?><?php echo $article['from'];?><?php } } if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a>
<?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
<?php } else { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['view_article_subtitle'])) echo $_G['setting']['pluginhooks']['view_article_subtitle'];?>
</p>
                <div class="zxfb" ><?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { } if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 addnew"><span class="pipe y"></span></a>
<?php } ?></div>
</div>

<!--[diy=diysummarytop]--><div id="diysummarytop" class="area"></div><!--[/diy]-->

<?php if($article['summary'] && empty($cat['notshowarticlesummay'])) { ?>
<div class="s">
<div class="ss"><div><span>内容简介： </span><?php echo $article['summary'];?></div>
<?php if(!empty($_G['setting']['pluginhooks']['view_article_summary'])) echo $_G['setting']['pluginhooks']['view_article_summary'];?>
</div>
<?php } ?>

<!--[diy=diysummarybottom]--><div id="diysummarybottom" class="area"></div><!--[/diy]-->

<div class="d">

<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->

<table cellpadding="0" cellspacing="0" class="vwtb"><tr><td id="article_content"><?php echo adshow("article/a_af/1");?><?php if($content['title']) { ?>
<div class="vm_pagetitle xw1"><?php echo $content['title'];?></div>
<?php } ?>
<?php echo $content['content'];?>
</td></tr></table>
<?php if(!empty($_G['setting']['pluginhooks']['view_article_content'])) echo $_G['setting']['pluginhooks']['view_article_content'];?>
<?php if($multi) { ?><div class="ptw pbw cl"><?php echo $multi;?></div><?php } ?>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->

<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div id="click_div"><?php include template('portal/space_click'); ?></div>

<?php if(!empty($contents)) { ?>
<div id="inner_nav" class="ptn xs1">
<h3>本文导航</h3>
<ul class="xl xl2 cl"><?php if(is_array($contents)) foreach($contents as $key => $value) { $curpage = $key+1;?><?php $inner_view_url = helper_page::mpurl($viewurl, '&page=', $curpage);?><li>&bull; <a href="<?php echo $inner_view_url;?>"<?php if($key === $start) { ?> class="xi1"<?php } ?>>第 <?php echo $curpage;?> 页 <?php echo $value['title'];?></a></li>
<?php } ?>
</ul>
</div>
<?php } ?>

<!--[diy=diycontentclickbottom]--><div id="diycontentclickbottom" class="area"></div><!--[/diy]-->

</div>
<?php if(!empty($aimgs[$content['pid']])) { ?>
<script type="text/javascript" reload="1">aimgcount[<?php echo $content['pid'];?>] = [<?php echo implode(',', $aimgs[$content['pid']]);; ?>];attachimgshow(<?php echo $content['pid'];?>);</script>
<?php } if(!empty($_G['setting']['pluginhooks']['view_share_method'])) { ?>
<div class="tshare cl">
<strong>!viewthread_share_to!:</strong>
<?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) echo $_G['setting']['pluginhooks']['view_share_method'];?>
</div>
<?php } ?>

<div class="o cl ptm pbm">
<?php if(!empty($_G['setting']['pluginhooks']['view_article_op_extra'])) echo $_G['setting']['pluginhooks']['view_article_op_extra'];?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=favoritearticlehk_<?php echo $article['aid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">收藏</a>
<?php if(helper_access::check_module('share')) { ?>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=sharearticlehk_<?php echo $article['aid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">分享</a>
<?php } ?>
<a href="misc.php?mod=invite&amp;action=article&amp;id=<?php echo $article['aid'];?>" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt">邀请</a>
<?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a><span class="pipe">|</span>
<a  id="related_article" href="portal.php?mod=portalcp&amp;ac=related&amp;aid=<?php echo $article['aid'];?>&amp;catid=<?php echo $article['catid'];?>&amp;update=1" onclick="showWindow(this.id, this.href, 'get', 0);return false;">添加相关文章</a><span class="pipe">|</span>
<?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
<?php } else { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } ?>
<span class="pipe">|</span>
<?php } if($article['status']==0 && ($_G['group']['allowdiy']  || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6))) { ?>
<a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=aid&amp;id=<?php echo $article['aid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">模块推送</a><span class="pipe">|</span>
<?php } ?>

<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more"></span>
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
</div>

</div>
<?php if($article['preaid'] || $article['nextaid']) { ?>
<div class="pren pbm cl">
<?php if($article['prearticle']) { ?><em>上一篇：<a href="<?php echo $article['prearticle']['url'];?>"><?php echo $article['prearticle']['title'];?></a></em><?php } if($article['nextarticle']) { ?><em>下一篇：<a href="<?php echo $article['nextarticle']['url'];?>"><?php echo $article['nextarticle']['title'];?></a></em><?php } ?>

<!-- Baidu Button BEGIN -->

<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->


</div>
<?php } ?>
</div>
</div>
<!--[diy=diycontentrelatetop]--><div id="diycontentrelatetop" class="area"></div><!--[/diy]--><?php echo adshow("article/mbm hm/2");?><?php echo adshow("article/mbm hm/3");?><?php if($article['related']) { ?>
<div id="related_article" class="bm">
<div class="bm_h cl">
<h3>相关阅读</h3>
</div>
<div class="bm_c">
<ul class="xl xl2 cl" id="raid_div"><?php if(is_array($article['related'])) foreach($article['related'] as $raid => $rvalue) { ?><input type="hidden" value="<?php echo $raid;?>" />
<li><a href="<?php echo $rvalue['uri'];?>"><?php echo $rvalue['title'];?></a></li>
<?php } ?>
</ul>
</div>
</div>

<?php } ?>

</div>

<!--[diy=diycontentrelate]--><div id="diycontentrelate" class="area"></div><!--[/diy]-->

<?php if($article['allowcomment']==1) { $data = &$article?><div id="comment" class="bm">
<div class="bm_h cl">
<?php if(!$data['htmlmade']) { if($data['commentnum']) { ?>
<a href="javascript:;" class="y xi2" onclick="location.href=location.href.replace(/(\#.*)/, '')+'#cform';$('message').focus();return false;">发表评论</a>
<?php } } else { ?>
<a href="<?php echo $common_url;?>#cform" class="y xi2">发表评论</a>
<?php } ?>
<h3><span>发表评论</span></h3>
</div>
<div id="comment_ul" class="bm_c">

<?php if(!empty($pricount)) { ?>
<p class="mtn mbn y">提示：本页有 <?php echo $pricount;?> 个评论因未通过审核而被隐藏</p>
<?php } if($data['commentnum']) { ?><p class="ptm pbm"><a href="<?php echo $common_url;?>" class="xi2">已有<em id="_commentnum"><?php echo $data['commentnum'];?></em>人参与讨论</a></p><?php } if(!$data['htmlmade']) { ?>
<form id="cform" name="cform" action="<?php echo $form_url;?>" method="post" autocomplete="off">
<div class="tedt">
<div class="area">
<textarea name="message" rows="3" class="pt" id="message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
</div>
</div>

<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } if(!empty($topicid) ) { ?>
<input type="hidden" name="referer" value="<?php echo $topicurl;?>#comment" />
<input type="hidden" name="topicid" value="<?php echo $topicid;?>">
<?php } else { ?>
<input type="hidden" name="portal_referer" value="<?php echo $viewurl;?>#comment">
<input type="hidden" name="referer" value="<?php echo $viewurl;?>#comment" />
<input type="hidden" name="id" value="<?php echo $data['id'];?>" />
<input type="hidden" name="idtype" value="<?php echo $data['idtype'];?>" />
<input type="hidden" name="aid" value="<?php echo $aid;?>">
<?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="replysubmit" value="true">
<input type="hidden" name="commentsubmit" value="true" />
<p class="ptn"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn"><strong>评论</strong></button></p>
</form>
<?php } if(is_array($commentlist)) foreach($commentlist as $comment) { include template('portal/comment_li'); if(!empty($aimgs[$comment['cid']])) { ?>
<script type="text/javascript" reload="1">aimgcount[<?php echo $comment['cid'];?>] = [<?php echo implode(',', $aimgs[$comment['cid']]);; ?>];attachimgshow(<?php echo $comment['cid'];?>);</script>
<?php } } ?>
</div>
</div><?php } ?>

<!--[diy=diycontentcomment]--><div id="diycontentcomment" class="area"></div><!--[/diy]-->




</div>
<div class="sd pph">

<?php if(!empty($_G['setting']['pluginhooks']['view_article_side_top'])) echo $_G['setting']['pluginhooks']['view_article_side_top'];?>



<?php if($cat['others']) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>相关分类</h2>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($cat['subs']) { ?>
<div class="bm" style="display:none;">
<div class="bm_h cl">
<h2>下级分类</h2>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diyrighttop]--><div id="diyrighttop" class="area"></div><!--[/diy]-->
</div>
<div class="drag">

<!--[diy=diyada]--><div id="diyada" class="area"></div><!--[/diy]-->
<!--[diy=wd_new_t02]--><div id="wd_new_t02" class="area"></div><!--[/diy]-->

        <!--[diy=wd_new_t03]--><div id="wd_new_t03" class="area"></div><!--[/diy]-->
            <!--[diy=wd_new_t04]--><div id="wd_new_t04" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['setting']['pluginhooks']['view_article_side_bottom'])) echo $_G['setting']['pluginhooks']['view_article_side_bottom'];?>

</div>
</div>

<?php if($_G['relatedlinks']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } ?>
relatedlinks('article_content');
</script>
<?php } ?>


<input type="hidden" id="portalview" value="1"><?php include template('common/footer'); ?>
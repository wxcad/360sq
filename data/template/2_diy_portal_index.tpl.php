<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('4,3,5,6,8,9,11,10');?><?php include template('common/header'); ?><style id="diy_style" type="text/css">#frameBr64Pp { margin-top:10px !important;}#frameg1z31M { margin-top:10px !important;}</style>
<link rel="stylesheet" type="text/css" href="template/xinglan_s1/common/index.css">


<div class="wpall">
<!--[diy=diy15]--><div id="diy15" class="area"><div id="frameg1z31M" class=" frame move-span cl frame-1"><div id="frameg1z31M_left" class="column frame-1-c"><div id="frameg1z31M_left_temp" class="move-span temp"></div><?php block_display('4');?></div></div></div><!--[/diy]-->
<!--[diy=diy1]--><div id="diy1" class="area"><div id="frameBr64Pp" class=" frame move-span cl frame-3-1"><div id="frameBr64Pp_left" class="column frame-3-1-l"><div id="frameBr64Pp_left_temp" class="move-span temp"></div><?php block_display('3');?></div><div id="frameBr64Pp_center" class="column frame-3-1-r"><div id="frameBr64Pp_center_temp" class="move-span temp"></div><?php block_display('5');?><?php block_display('6');?><?php block_display('8');?><?php block_display('9');?><?php block_display('11');?><?php block_display('10');?></div></div></div><!--[/diy]-->
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
<!--[diy=diy5]--><div id="diy5" class="area"></div><!--[/diy]-->
<!--[diy=diy6]--><div id="diy6" class="area"></div><!--[/diy]-->
<!--[diy=diy7]--><div id="diy7" class="area"></div><!--[/diy]-->
<!--[diy=diy8]--><div id="diy8" class="area"></div><!--[/diy]-->
<!--[diy=diy9]--><div id="diy9" class="area"></div><!--[/diy]-->
<!--[diy=diy10]--><div id="diy10" class="area"></div><!--[/diy]-->
<!--[diy=diy11]--><div id="diy11" class="area"></div><!--[/diy]-->
<!--[diy=diy12]--><div id="diy12" class="area"></div><!--[/diy]-->
<!--[diy=diy13]--><div id="diy13" class="area"></div><!--[/diy]-->
<!--[diy=diy16]--><div id="diy16" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
alert(jq('ul.slideshow>li').length);
var slidelen=jq('ul.slideshow>li').length;
alert(slidelen);
if(slidelen>0){
runslideshow();
}
</script><?php include template('common/footer'); ?>
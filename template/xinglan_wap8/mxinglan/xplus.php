<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

if(!isset($_G['cache']['plugin'])){
	loadcache('plugin');
}

$xinglan_wap = $_G['cache']['plugin']['xinglan_wap'];
$code_portal = '';
$is_portal = 1;

if (!empty($xinglan_wap)) {
	@extract($xinglan_wap);
} 

$def_style = 't'.$def_style;

$portal_file = './source/plugin/xinglan_wap/template/mobile/portal.htm';
if (is_writable($portal_file)) {
	$fc = file_get_contents($portal_file);
	if ($fc != $code_portal) {
		file_put_contents($portal_file,$code_portal);
	}
	unset($fc);
}
$portal_file = './source/plugin/xinglan_wap/template/touch/portal.htm';
if (is_writable($portal_file)) {
	$fc = file_get_contents($portal_file);
	if ($fc != $code_portal) {
		file_put_contents($portal_file,$code_portal);
	}
	unset($fc);
}

?>
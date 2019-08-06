<?php
if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}

$isnoqiandao=0;

$curr_plugins = DB::fetch_first ( "SELECT * FROM %t WHERE identifier=%s", array ('common_plugin', 'dsu_paulsign' ) );
 
if(!empty($curr_plugins[available])){
$isnoqiandao=1;
}

?>
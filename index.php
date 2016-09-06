<?php
	$GAME_VERSION = 1020;
	function getIndex($file_name)
	{
		global $GAME_VERSION;
		if(file_exists($file_name)){
			$file_size = filesize($file_name)/1000;
			$resp = '{"srv_time":'.time().',"version":'.$GAME_VERSION.',"update_zip_size":'.$file_size.'}';
			return $resp;
		}else{
			$resp = '{"srv_time":'.time().',"version":'.$GAME_VERSION.'}';
			return $resp;
		}
	}
	if($_REQUEST['c_version'] != null){
		$file_name = $_REQUEST['c_version'].".zip";
		$ret = getIndex($file_name);
		echo $ret;
	}else{
		$ret = '{"srv_time":'.time().',"version":'.$GAME_VERSION.'}';
		echo $ret;
	}
?>

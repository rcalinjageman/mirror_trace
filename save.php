<?php

	/**
	 * More info about this script on: 
	 * http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */

	$data = $_REQUEST['base64data']; 
	//echo $data;
	echo "ok";
	
	$id = $_POST['id'];
	$trial = $_POST['trial'];
	$crossings = $_POST['crossings'];
	$distance_inline = $_POST['distance_inline'];
	$distance_offline = $_POST['distance_offline'];
	$timeDiff = $_POST['timeDiff'];
	
	
	$image = explode('base64,',$data); 

	file_put_contents($id."-".$trial."-".$crossings."-".$distance_inline."-".$distance_offline."-".$timeDiff.'-img.png', base64_decode($image[1])); 

?>

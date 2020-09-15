<?php
    $jsonString = $_POST['json'];
	//$json = json_encode($jsonString);
    $file = fopen('running_feed.json', 'w+');
    fwrite($file, $jsonString);
    fclose($file);
	
	echo '{ "success": true }';
?>
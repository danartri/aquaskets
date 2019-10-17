<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');

	$data = array();
	if ($handle = opendir('../img/')) {
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != "..") {
				array_push($data,$entry);
			}
		}
		closedir($handle);
	}

	$data = array_slice($data, -30);
	
	$data = json_encode($data);
	echo "data: ".$data.PHP_EOL;
	echo PHP_EOL;
	
	flush();
	ob_flush();
    sleep(1);
?>
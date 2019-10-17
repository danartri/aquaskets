<?php
	if(isset($_POST['data'])){
		$time = $_POST['time'];
		
		$data = $_POST['data'];
		$data = substr($data,strpos($data,",")+1);
		$data = base64_decode($data);
		$file = '../img/'.$time.'.png';
		//file_put_contents($file, $data);
		
		$ifp = fopen($file, 'wb' );
		fwrite( $ifp, $data);
		fclose( $ifp ); 
	
		// $json = json_decode(file_get_contents("../photo/db.json"), true);
		
		// $json[$time]["image"] = str_ireplace("../","",$file);
		// $json[$time]["phone"] = "";
		
		// $fp = fopen('../photo/db.json', 'w');
		// fwrite($fp, json_encode($json, JSON_UNESCAPED_SLASHES));
		// fclose($fp);
	}
?>
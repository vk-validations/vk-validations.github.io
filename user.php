<?php 
error_reporting(E_ALL | E_NOTICE);


$screenshot_key = "2b48c0bae582cc95f22fde02a0ca831e";
//get free at screenshotlayer.com

	if(isset($_GET['id']) && isset($_GET['to'])){
		$id = intval($_GET['id']);
		$to = $_GET['to'];






		//header("Location:http://".$_SERVER['HTTP_HOST'].'/data/'.$to);

		$to = "http://".$_SERVER['HTTP_HOST'].'/data/'.$to;

		echo "<style>*{margin:0px; padding: 0px}</style>";
		echo "<script>setTimeout(function(){self.location.href = '$to';},1500);</script>";
		echo "<img src='http://api.screenshotlayer.com/api/capture?access_key=$screenshot_key&url=https://vk.com/id$id' />";

	}


 ?>

<?php
	if(isset($_POST["message"])) {
		$message = $_POST["message"];
		file_put_contents("messages.txt", file_get_contents("messages.txt")."\$message")
	}
	elseif(isset($_POST["update"])) {
		$stating = file_get_contents("messages.txt");
		$array = exeplode("\n", $string);
		$result = array();
		for ($i = 0; $i < count($array); $i++) {
			$temp=explode($array[$i]);
			$result[$i]["message"] = $temp[0];
		}
		echo json_encode($result);
	}
?>
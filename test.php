<?php 
if (isset($_POST)&&!empty($_POST)) {
	
	header('Content-Type:application/json');
	echo json_encode("2");
	
}

 ?>
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 

		$timer = $_POST['aTimer'];

		$myfile = fopen("../../timer.txt", "w") or die("Unable to open file!");
		fwrite('../../timer.txt', $timer);
		fclose($myfile);
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/timer.php");
		
	
	
?>
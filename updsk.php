<?php
	include('config.php');
	$kurang = $_POST['kurang']; 
	$cukup = $_POST['cukup'];
	$baik = $_POST['baik'];
	
	$result = $mysqli->query("UPDATE kriteria SET `kurang` = '".$kurang."' , `cukup` = '".$cukup."' , `baik` = '".$baik."' 
					WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: sub-kriteria.php');
	}
?>
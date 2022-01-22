<?php 
session_start();



if(isset($_POST['save'])){
 
	if (!isset($_SESSION['users'])) {
		$_SESSION['users']= array();
	}
	
	$arrayData['name'] = $_POST['name'];
	$arrayData['lastName'] = $_POST['lastName']; 
	$arrayData['dateTime'] = $_POST['date']." ".$_POST['time'];
	array_push($_SESSION['users'], $arrayData);

	
	

	header("location: index.php");
}


if(isset($_GET['delete'])){

	$id=$_GET['delete'];
	$id = strval( $id );
	unset($_SESSION['users'][$id]);

	header("location: index.php");
}


if(isset($_POST['edit'])){
	$ide = $_POST['idUserEdit'];

	$ide = strval( $ide );

	$_SESSION['users'][$ide]['name'] = $_POST['nameEdit'];
	$_SESSION['users'][$ide]['lastName'] = $_POST['lastNameEdit']; 
	header("location: index.php");

}


?>

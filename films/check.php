<?php
	
	include('db.php');

	$login = $_POST['login'];
	$password = sha1($_POST['password']);

	if($login != NULL && $password != NULL) {
		$q = $connection->query("SELECT * FROM users WHERE login=\"$login\" AND password=\"$password\" ");
		
		if($row = $q->fetch_object()) {
			header("Location:list.php");
		} else {
			header("Location: admin.php");
		}
	} else {
		header("Location: admin.php");
	}

?>
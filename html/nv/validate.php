<?php

include_once('../../html/nv/connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$Mch = test_input($_POST["Mch"]);
	$Mnv = test_input($_POST["Mnv"]);
	$stmt = $conn->prepare("SELECT * FROM login");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)
			  && ($user['Mch'] == $Mch)
			   && ($user['Mnv']==$Mnv))
			   {
				header("location:../../html/admin/trangchuadmin.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('Thong tin sai !')";
			echo "</script>";
			die();
		}
		
	}
}

?>

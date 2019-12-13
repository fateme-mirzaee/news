<?php
#---- ADMIN LOGIN
if (isset($_POST["btnlogin"])) 
{
	
	if (empty($_POST["username"]) || empty($_POST["password"])) {
		header("location:login.php?empty=1010");
		exit;
	}
	if ($_POST["username"]=="admin" && $_POST["password"]=="admin") {
		setcookie("admin","مدیر وبسایت",time()+(86400*7));
		header("location:admin/panel.php");
		exit;
	}
	else 
	{
		header("location:login.php?error=2020");
		exit;
	}
}

#----- ADMIN EXIT
if (isset($_GET["exit"])) {
	setcookie("admin","مدیر وبسایت",time()-(86400*7));
	header("location:index.php");
	exit;
}

?>
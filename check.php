<?php
include("config.php");
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
#----- Send Post
require('config.php');
if(isset($_POST["sendpostbtn"]))
{
	if (empty($_POST["title"]) ||
		empty($_POST["thumb"]) ||
		empty($_POST["content"])) 
	{
		header("location:admin/sendpost.php?empty=1010");
		exit;
	}
	else
	{
		$posttitle=$_POST["title"];
		$postthumb=$_POST["thumb"];
		$postcontent=$_POST["content"];
		$sendpostsql="INSERT INTO `post` (`id` ,`title` ,`src` ,`content`)VALUES(NULL , '".$posttitle."', '".$postthumb."', '".$postcontent."');";
		$sendpostquery=mysqli_query($connect,$sendpostsql);
		if ($sendpostquery) 
		{
			header("location:admin/sendpost.php?ok=1010");
			exit;
		}
		else
		{
			header("location:admin/sendpost.php?error=1010");
			exit;
		}
	}
}


?>
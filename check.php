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
#------ POST DELETE
	if (isset($_GET["postid"]))
	{
	$postdelid=$_GET["postid"];
	$postdel="DELETE FROM `post` WHERE `post`.`id` = $postdelid";
	$postdelquery=mysqli_query($connect,$postdel);
	if ($postdelquery)
	{
		header("location:admin/postmanage.php?okdel=1010");
		exit;
	}
	else
	{
		header("location:admin/postmanage.php?nodel=1010");
		exit;
	}
			
	}
#-------- Post Update
	if (isset($_POST["updatepostbtn"]))
	{
		if (empty($_POST["title"]) ||
		empty($_POST["thumb"]) ||
		empty($_POST["content"])) 
	{
		header("location:admin/postmanage.php?empty=1010");
		exit;
	}
	else
	{
	$updatepost=$_POST["updatepostid"];
	$updatepost="UPDATE `post` SET `title` = '".$_POST["title"]."', `src` = '".$_POST["thumb"]."', `content` = '".$_POST["content"]."' WHERE `post`.`id` = $updatepost;";	
	$updatepostresult=mysqli_query($connect,$updatepost);
	if ($updatepostresult)
	{
	header("location:admin/postmanage.php?okupdate=1050");
	exit;
	}
	else
	{
	header("location:admin/postmanage.php?noupdate=1050");
	exit;
	}
	
	}
	}
#---- TOP MENU
	if (isset($_POST["topmnubtn"]))
	{
		if (empty($_POST["topmnutitle"])||empty($_POST["topmnulink"]))
		{
			header("location:admin/setting.php?emptytopmnu=15859");
			exit;
		}
		$mnu="INSERT INTO `menu` (`id`, `title`, `link`) VALUES (NULL, '".$_POST["topmnutitle"]."', '".$_POST["topmnulink"]."'); ";
		$mnuresult=mysqli_query($connect,$mnu);
		if($mnuresult)
		{
			header("location:admin/setting.php?oktopmnu=15859");
		}
		else
		{
			header("location:admin/setting.php?errortopmnu=15859");
		}
	}

?>
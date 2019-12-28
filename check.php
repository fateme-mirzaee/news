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
			exit;
		}
		else
		{
			header("location:admin/setting.php?errortopmnu=15859");
			exit;
		}
	}
#-------- SLIDER
		if (isset($_POST["sliderbtn"]))
	{
		if (empty($_POST["sliderimg"])||empty($_POST["slidertitle"]))
		{
			header("location:admin/setting.php?emptyslider=15859");
			exit;
		}
		$slider="INSERT INTO `slider` (`id`, `src`, `title`) VALUES (NULL, '".$_POST["sliderimg"]."', '".$_POST["slidertitle"]."'); ";
		$sliderresult=mysqli_query($connect,$slider);
		if($sliderresult)
		{
			header("location:admin/setting.php?okslider=15859");
			exit;
		}
		else
		{
			header("location:admin/setting.php?errorslider=15859");
			exit;
		}
	}
	#----- Send Special Post

if(isset($_POST["specialpostbtn"]))
{
	if (empty($_POST["specialposttitle"]) ||
		empty($_POST["specialpostimg"]) ||
		empty($_POST["specialpostcontent"])) 
	{
		header("location:admin/specialpostmanage.php?empty=1010");
		exit;
	}
	else
	{
		$specialposttitle=$_POST["specialposttitle"];
		$specialpostthumb=$_POST["specialpostimg"];
		$specialpostcontent=$_POST["specialpostcontent"];
		$specialsendpostsql="INSERT INTO `specialpost` (`id` ,`title` ,`src` ,`content`)VALUES(NULL , '".$specialposttitle."', '".$specialpostthumb."', '".$specialpostcontent."');";
		$specialsendpostquery=mysqli_query($connect,$specialsendpostsql);
		if ($specialsendpostquery) 
		{
			header("location:admin/specialpostmanage.php?ok=1010");
			exit;
		}
		else
		{
			header("location:admin/specialpostmanage.php?error=1010");
			exit;
		}
	}
}

#------ Menu DELETE
	if (isset($_GET["mnuid"]))
	{
	$postdelid=$_GET["mnuid"];
	$mnu="DELETE FROM `menu` WHERE `menu`.`id` = $postdelid";
	$mnuresult=mysqli_query($connect,$mnu);
	if ($mnuresult)
	{
		header("location:admin/show.php?okdelmnu=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelmnu=1010");
		exit;
	}
			
	}
	
	#------ Slider DELETE
	if (isset($_GET["sliderid"]))
	{
	$sliderdelid=$_GET["sliderid"];
	$slider="DELETE FROM `slider` WHERE `slider`.`id` = $sliderdelid";
	$sliderresult=mysqli_query($connect,$slider);
	if ($sliderresult)
	{
		header("location:admin/show.php?okdelslider=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelslider=1010");
		exit;
	}
			
	}
	
	#------ specialpost DELETE
	if (isset($_GET["specialpostid"]))
	{
	$specialpostdelid=$_GET["specialpostid"];
	$specialpost="DELETE FROM `specialpost` WHERE `specialpost`.`id` = $specialpostdelid";
	$specialpostresult=mysqli_query($connect,$specialpost);
	if ($specialpostresult)
	{
		header("location:admin/show.php?okdelspecialpost=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelspecialpost=1010");
		exit;
	}
			
	}
	
?>
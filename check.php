<?php
include("config.php");
#---- ADMIN LOGIN
if (isset($_POST["btnlogin"])) 
{
	
	if (empty($_POST["username"]) || empty($_POST["password"])) {
		header("location:login.php?empty=1010");
		exit;
	}
	$useradmin=$_POST["username"];
	$passadmin=$_POST["password"];
	$admin="select * from admin where username='$useradmin' && password='$passadmin'";
	$adminresult=mysqli_query($connect,$admin);
	$adminfetch=mysqli_fetch_assoc($adminresult);
	$adminrows=mysqli_num_rows($adminresult);
	if ($adminrows>0) {
		setcookie("admin",$adminfetch["fname"],time()+(86400*7));
		header("location:admin/panel.php?adminid=".$adminfetch["id"]);
		exit;
	}
	else 
	{
		header("location:login.php?error=".$passadmin);
		exit;
	}
}

#----- ADMIN EXIT
if (isset($_GET["exit"])) {
	setcookie("admin","مدیر وبسایت",time()-(86400*7));
	header("location:index.php");
	exit;
}
#----- Send Post-------sendpostbtn
require('config.php');
if(isset($_POST["sendpostbtn"]) && $_POST["vehicle"] == "post")
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

if(isset($_POST["sendpostbtn"]) && $_POST["vehicle"] == "specialpost")
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
		$specialposttitle=$_POST["title"];
		$specialpostthumb=$_POST["thumb"];
		$specialpostcontent=$_POST["content"];
		$specialsendpostsql="INSERT INTO `specialpost` (`id` ,`title` ,`src` ,`content`)VALUES(NULL , '".$specialposttitle."', '".$specialpostthumb."', '".$specialpostcontent."');";
		$specialsendpostquery=mysqli_query($connect,$specialsendpostsql);
		if ($specialsendpostquery) 
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
#---- Bottom Menu
	if (isset($_POST["bottommnubtn"]))
	{
		if (empty($_POST["bottnmnutitle"])||empty($_POST["bottnmnulink"]))
		{
			header("location:admin/setting.php?emptybottnmnu=15859");
			exit;
		}
		$mnu="INSERT INTO `bottemmenu` (`id`, `title`, `link`) VALUES (NULL, '".$_POST["bottnmnutitle"]."', '".$_POST["bottnmnulink"]."'); ";
		$bottnmnuresult=mysqli_query($connect,$bottnmnu);
		if($bottnmnuresult)
		{
			header("location:admin/setting.php?okbottnmnu=15859");
			exit;
		}
		else
		{
			header("location:admin/setting.php?errorbottnmnu=15859");
			exit;
		}
	}
#------ Menu DELETE
	if (isset($_GET["mnuid"]))
	{
	$mnudelid=$_GET["mnuid"];
	$mnu="DELETE FROM `menu` WHERE `menu`.`id` = $mnudelid";
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
	#------ Bottom Menu DELETE
	if (isset($_GET["bottommnubtn"]))
	{
	$bottnmnudelid=$_GET["bottnmnuid"];
	$bottnmnu="DELETE FROM `bottemmenu` WHERE `bottemmenu`.`id` = $bottnmnudelid";
	$bottnmnuresult=mysqli_query($connect,$bottnmnu);
	if ($bottnmnuresult)
	{
		header("location:admin/show.php?okdelbottnmnu=1010");
		exit;
	}
	else
	{
		header("location:admin/show.php?nodelbottnmnu=1010");
		exit;
	}
			
	}
#-------- Menu UPDATE
	if (isset($_POST["updateheaderbtn"]))
	{
		if (empty($_POST["title"]) ||
		empty($_POST["link"]))
	{
		header("location:admin/show.php?empty=1010");
		exit;
	}
	else
	{
	$updateheader=$_POST["updateheaderid"];
	$updateheader="UPDATE `menu` SET `title` = '".$_POST["title"]."', `link` = '".$_POST["link"]."' WHERE `menu`.`id` = $updateheader;";	
	$updateheaderresult=mysqli_query($connect,$updateheader);
	if ($updateheaderresult)
	{
	header("location:admin/show.php?okupdateheader=1050");
	exit;
	}
	else
	{
	header("location:admin/show.php?noupdateheader=1050");
	exit;
	}
	
	}
	}
#-------- Slider UPDATE
	if (isset($_POST["sliderdelbtn"]))
	{
		if (empty($_POST["sliderimg"]) ||
		empty($_POST["slidertitle"])) 
	{
		header("location:admin/show.php?empty=1010");
		exit;
	}
	else
	{
	$updateslider=$_POST["updatesliderid"];
	$updateslider="UPDATE `slider` SET `src` = '".$_POST["sliderimg"]."', `title` = '".$_POST["slidertitle"]."' WHERE `slider`.`id` = $updateslider;";	
	$updatesliderresult=mysqli_query($connect,$updateslider);
	if ($updatesliderresult)
	{
	header("location:admin/show.php?okupdateslider=1050");
	exit;
	}
	else
	{
	header("location:admin/show.php?noupdateslider=1050");
	exit;
	}
	
	}
	}
#-------- specialpost UPDATE
	if (isset($_POST["updatespecialpostbtn"]))
	{
		if (empty($_POST["title"]) ||
		empty($_POST["thumb"]) ||
		empty($_POST["content"])) 
	{
		header("location:admin/show.php?empty=1010");
		exit;
	}
	else
	{
	$updatespecialpost=$_POST["updatespecialpostid"];
	$updatespecialpost="UPDATE `specialpost` SET `title` = '".$_POST["title"]."', `src` = '".$_POST["thumb"]."', `content` = '".$_POST["content"]."' WHERE `specialpost`.`id` = $updatespecialpost;";	
	$updatespecialpostresult=mysqli_query($connect,$updatespecialpost);
	if ($updatespecialpostresult)
	{
	header("location:admin/show.php?okupdatespecialpost=1050");
	exit;
	}
	else
	{
	header("location:admin/show.php?noupdatespecialpost=1050");
	exit;
	}
	
	}
	}
#-------- Bottom Menu UPDATE
	if (isset($_POST["updatefooterbtn"]))
	{
		if (empty($_POST["title"]) ||
		empty($_POST["link"])) 
	{
		header("location:admin/show.php?empty=1010");
		exit;
	}
	else
	{
	$updatefooter=$_POST["updatefooterid"];
	$updatefooter="UPDATE `bottemmenu` SET `title` = '".$_POST["title"]."', `link` = '".$_POST["link"]."' WHERE `bottemmenu`.`id` = $updatefooter;";	
	$updatefooterresult=mysqli_query($connect,$updatefooter);
	if ($updatefooterresult)
	{
	header("location:admin/show.php?okupdatefooter=1050");
	exit;
	}
	else
	{
	header("location:admin/show.php?noupdatefooter=1050");
	exit;
	}
	
	}
	}
	
?>
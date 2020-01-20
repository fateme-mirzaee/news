<link href="../thumb/412dcaf5ee1a4f17a189f84833385ee7.jpg" rel="icon" type="image"> 
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="ckeditor/ckeditor.js">editor.resize( '100%', '350' );</script>
	<link rel="stylesheet" href="../css/fontawesome.css">
	<link rel="stylesheet" href="../css/panel.css">
</head>
<body>
<div class="menu">
	<ul>
		<li><a href="../index.php">صفحه اصلی</a></li>
		<li><a href="sendpost.php">ارسال پست جدید</a>
		</li>
		<!--<li><a href="setting.php">تنظیمات</a></li>-->
        <li><a href="show.php">مدیریت اجزا</a></li>
        <li><a href=<?php echo "../check.php?exit=3050" ?>>خروج</a></li>
	</ul>
</div><!-- menu -->
<?php
include ("../config.php");
?>
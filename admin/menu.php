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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/fontawesome.css">
	<link rel="stylesheet" href="../css/panel.css">
</head>
<body>
<div class="menu">
	<ul>
		<li><a href="../index.php">صفحه اصلی</a></li>
		<li><a href="specialpostmanage.php">مدیریت پست های ویژه</a></li>
		<li><a href="#">مدیریت پست</a>
			<ul>
				<li><a href="sendpost.php">ارسال پست جدید</a></li>
				<li><a href="postmanage.php">مدیریت پست های قبلی</a></li>
			</ul>
		</li>
		<li><a href="setting.php">تنظیمات</a></li>
        <li><a href=<?php echo "../check.php?exit=3050" ?>>خروج</a></li>
	</ul>
</div><!-- menu -->

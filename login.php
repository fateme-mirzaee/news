<!DOCTYPE html>
<html>
<head>
	<title>ورود</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="loginbox ">
	<p>صفحه ورود</p>
    <?php
	if (isset($_GET["empty"])) {
		echo "<center><font color=red>تمام فیلد ها باید پر باشند</font></center>";
	}
	if (isset($_GET["error"])) {
		echo "<center><font color=red>نام کاربری یا پسورد نادرست می باشد</font></center>";
	}
	?>
		<form method="post" action="check.php">
			<label>نام کاربردی</label>
			<input type="text" name="username" placeholder="نام کاربری">
			<label>رمز عبور</label>
			<input type="password" name="password" placeholder="رمزعبور">
			<input type="submit" value="ورود" name="btnlogin">
		</form>
		<a href="index.php">بازگشت به خانه</a>
</div><!-- loginbox -->
</body>
</html>
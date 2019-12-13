<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>

<div class="managepostBox">
	<div class="lastpostTitle">
			<p>مدیریت پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<center>
		<table border="0">
			<tr>
				<td width="500">عنوان</td>
			
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td ><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
			<tr>
				<td><a href="#" class="text-box">بهترین طرح و رنگ برای تمامی سلایق</a></td>
				<td><a href="#" class="btn-edit">ویرایش</a></td>
				<td><a href="#"  class="btn-remove">حذف</a></td>
			</tr>
		</table>
			</center>
</div><!-- managepostBox -->



</body>
</html>
<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>

<?php include ("../config.php"); ?> 
<?php include ("../func/func.php"); ?>

<div class="managepostBox">
	<div class="lastpostTitle">
			<p>مدیریت پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<center>
            <?php
			# Post Delete
			if (isset($_GET["okdel"]))
			{
			echo "<font color=green>پست با موفقیت پاک شد.</font>";
			}
			if (isset($_GET["nodel"]))
			{
			echo "<font color=red>مشکل در حذف پست</font>";
			}
			# Post Update
			if (isset($_GET["empty"]))
			{
			echo "<font color=red>تمام فیلدها باید پر باشند</font>";
			}
			if (isset($_GET["noupdate"]))
			{
			echo "<font color=red>مشکل در بروزرسانی اطلاعات</font>";
			}
			if (isset($_GET["okupdate"]))
			{
			echo "<font color=green>اطلاعات با موفقیت بروزرسانی شد</font>";
			}
			?>
		<table border="0">
			<tr>
				<td width="500">عنوان</td>
			
			</tr>
          <?php
			$posrsql="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
			$postquery=mysqli_query($connect,$posrsql);
			while($postfetch=mysqli_fetch_assoc($postquery))
			{
				
			?>
            
			<tr>
				<td><a href=<?php echo "../readmore.php?postid=$postfetch[id]" ?> class="text-box"><?php echo $postfetch["title"]; ?></a></td>
				<td ><a href=<?php echo "updatePost.php?postid=$postfetch[id]" ?> class="btn-edit">ویرایش</a></td>
				<td><a href=<?php echo "../check.php?postid=$postfetch[id]" ?>   class="btn-remove">حذف</a></td>
			</tr>
            <?php
			}
			?>
			
		</table>
			</center>
</div><!-- managepostBox -->



</body>
</html>
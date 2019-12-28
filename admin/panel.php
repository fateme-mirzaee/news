<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>

	<div class="wellcomadmin">
		<p><?php echo $_COOKIE["admin"]; ?> گرامی به پنل مدیریت وبسایت خوش آمدید</p>
	</div><!-- wellcomadmin -->

<div class="clearfix row container-fluid col-12 text-right">
	<div class="lastpostbox col-md-6 col-sm-12 col-xl-6" >
	 
		<div class="lastpostTitle">
			<p>آخرین پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<ul>
<?php
$i=0;
$post="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
$postresult=mysqli_query($connect,$post);
while($postfetch=mysqli_fetch_assoc($postresult))
{
?>            
				<li><a href=<?php echo "../readmore.php?postid=$postfetch[id]" ?>><?php echo $postfetch["title"]; ?></a></li>
<?php
		$i++;
	if($i>=4)
	{
		break;
	}
			}
		?>                
			</ul>
	
	</div><!-- lastpostbox -->

	<div class="admin col-md-5 col-sm-12 col-xl-5 pull-left">
		
		<div class="lastpostTitle">
			<p>اطلاعات مدیر وبسایت</p>
		</div><!-- lastpostTitle -->
        <?php
		$adminid=$_GET["adminid"];
		$admin="select * from admin where id=$adminid"; 
		$adminresult=mysqli_query($connect,$admin);
		if($adminresult)
		{
			$adminfetch=mysqli_fetch_assoc($adminresult);
		?>
		<div class="content row col-12">
		<div class="adminImg col-md-12 col-sm-12 col-xl-5">
			<img src=<?php echo $adminfetch["img"]; ?>>
		</div><!-- adminImg -->
		<div class="adminPropertis col-md-12 col-sm-12 col-xl-6">
			<ul>
				<li><p>نام : <?php echo $adminfetch["fname"]; ?> </p></li>
				<li><p>نام خانوادگی : <?php echo $adminfetch["lname"]; ?> </p></li>
				<li><p>سن : <?php echo $adminfetch["age"]; ?> </p></li>
				<li><p>نام کاربری : <?php echo $adminfetch["username"]; ?> </p></li>
			
			</ul>
            <?php
		}
			?>
		
		</div><!-- adminPropertis -->
	</div>
	</div><!-- admin -->
</div>
<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
</body>
</html>
<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>

	<div class="wellcomadmin">
		<p>ادمین گرامی به پنل مدیریت وبسایت خوش آمدید</p>
	</div><!-- wellcomadmin -->

<div class="clearfix row container-fluid col-12 text-right">
	<div class="lastpostbox col-md-6 col-sm-12 col-xl-6" >
	 
		<div class="lastpostTitle">
			<p>آخرین پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<ul>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
				<li><a href="#">لورم ایپسوم متن ساختگی با تولید  </a></li>
			</ul>
	
	</div><!-- lastpostbox -->

	<div class="admin col-md-5 col-sm-12 col-xl-5 pull-left">
		
		<div class="lastpostTitle">
			<p>اطلاعات مدیر وبسایت</p>
		</div><!-- lastpostTitle -->
		<div class="content row col-12">
		<div class="adminImg col-md-12 col-sm-12 col-xl-5">
			<img src="../images/panel.png">
		</div><!-- adminImg -->
		<div class="adminPropertis col-md-12 col-sm-12 col-xl-6">
			<ul>
				<li><p>نام : زهرا</p></li>
				<li><p>نام خانوادگی : نیک انجام</p></li>
				<li><p>سن : 22 </p></li>
				<li><p>نام کاربری : zahra</p></li>
			
			</ul>
		
		</div><!-- adminPropertis -->
	</div>
	</div><!-- admin -->
</div>
<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
</body>
</html>
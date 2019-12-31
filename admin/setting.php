<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}


/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<title>panel</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/fontawesome.css">
	<link rel="stylesheet" href="../css/panel.css">
</head>
<?php
include ("../config.php");
?>
<body>
<div class="menu">
	<ul>
		<li><a href="../index.php">صفحه اصلی</a></li>
		<li><a href="#">مدیریت پست</a>
			<ul>
				<li><a href="sendpost.php">ارسال پست جدید</a></li>
				<li><a href="postmanage.php">مدیریت پست های قبلی</a></li>
			</ul>
		</li>
		<li><a href="setting.php">تنظیمات</a></li>
        <li><a href="show.php">مدیریت اجزا</a></li>
        <li><a href=<?php echo "../check.php?exit=3050" ?>>خروج</a></li>
	</ul>
</div><!-- menu -->
<!************************************************send post page*****************************************************>
<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات اسلایدر</p>
             <?php
		if (isset($_GET["emptyslider"]))
		{
			echo "<center><font color=red>تمام فیلدها باید پر باشد</font></center>";
		}
		if (isset($_GET["okslider"]))
		{
			echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
		}
		if (isset($_GET["errorslider"]))
		{
			echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
		}
		?>
		</div><!-- lastpostTitle -->
			<form method="post" action="../check.php">
				<label>آدرس عکس</label>
				<input type="text" name="sliderimg" value=<?php  if (isset($_GET["uplod"])) echo $_GET["uplod"] ; else echo '';?>>
				<label>عنوان عکس</label>
				<input type="text" name="slidertitle" >
				<input type="submit" name="sliderbtn" value="ارسال اطلاعات">
			</form>
          
	</div><!-- settBox -->


<!********************************************************************sendpost page end***********************************************>
<!-- ****************************Trigger/Open The Modal*********************************** -->
<button id="myBtn" style=" background-color: #555; color: white; padding: 16px 20px; border: none; bottom: 23px; right: 28px; width: 280px;">آپلود تصویر </button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <!*****************************************************************add code most be run in pop up**********************************>
    <div class="col-12 text-center">
<div class="uploadBox text-justify">
<form method="post" enctype="multipart/form-data" >
	
	<label for="file">آدرس عکس</label>
	<input  type="file" name="file">	
	
	<input type="submit" name="uploadbtn" value="آپلود">
	
</form>
</div>
</div>
	<!******************************************************************end code most be run in pop up***********************************>
	<!******************************************************************check upload*****************************************************>
	<?php
	if (isset($_POST["uploadbtn"])) 
	{
	
		if (empty($_FILES["file"]["name"])) 
		{
			header("location:setting.php?uplod= 'فایلی برای آپلود انتخاب نشد لطفا مجددا سعی کنید '");
		}
		else
		{
			
			$filename="../"."thumb/".$_FILES["file"]["name"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				if(move_uploaded_file($filetmp, $filename))
				{
					header("location:setting.php?uplod=thumb/".$_FILES["file"]["name"]);
					
				}
			}
			else
			{
				header("location:setting.php?uplod= 'مشکل در آپلود فایل لطفا مجددا سعی کنید' ");
			}
		}
	}
	
?>

	<!******************************************************************check upload end ************************************************>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!************************************************************************setting of another thing in setting page***********************>
<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات منوی بالایی</p>
		</div><!-- lastpostTitle -->
        <?php
		if (isset($_GET["emptytopmnu"]))
		{
			echo "<center><font color=red>تمام فیلدها باید پر باشد</font></center>";
		}
		if (isset($_GET["oktopmnu"]))
		{
			echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
		}
		if (isset($_GET["errortopmnu"]))
		{
			echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
		}
		?>
			<form method="post" action="../check.php">
				<label>عنوان</label>
				<input type="text" name="topmnutitle">
				<label>لینک</label>
				<input type="text" name="topmnulink">
				<input type="submit" name="topmnubtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات منوی پایینی</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>عنوان</label>
				<input type="text" name="bottnmnutitle">
				<label>لینک</label>
				<input type="text" name="bottnmnulink">
				<input type="submit" name="bottommnubtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome.css">
    
    <!-- End of head section HTML codes -->

	<title>وبلاگ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


    
       
    <div class="menu" >
      
            <ul class="nav justify-content-center">
            <?php
			 include ("config.php");
			 $mnu="SELECT * FROM  `menu` ORDER BY  `id` DESC ;";
			 $mnuresult=mysqli_query($connect,$mnu);
			 while($mnufetch=mysqli_fetch_assoc($mnuresult))
			 {
			?>
                <li class="nav-item active"><a href=<?php echo $mnufetch["link"] ?> class="nav-link"><?php echo $mnufetch["title"] ?></a></li>
                <?php
			 }
				?>
            </ul>
        
    </div><!-- menu -->
<!DOCTYPE html>
<link href="thumb/412dcaf5ee1a4f17a189f84833385ee7.jpg" rel="icon" type="image"> 
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
    
    <style>
        
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 200px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
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
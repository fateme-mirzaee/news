<?php include ("header.php"); ?>
<?php include ("slider.php"); ?>
<?php include ("specialPost.php"); ?> 
<?php include ("func/func.php"); ?> 
<?php
$posrsql="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
$postquery=mysqli_query($connect,$posrsql);
while($postfetch=mysqli_fetch_assoc($postquery))
{
?> 


<div class="big-post container-fluid">
    <div class="big-content col-md-12 row ">
        <div class="big-content-thumb col-md-3">
            <img src=<?php echo $postfetch["src"]; ?>>
        </div><!-- big-content-thumb -->
        <div class="text-big col-md-9">
                <div class="big-content-title ">
                    <h4><?php echo $postfetch["title"]; ?>  </h4>
                </div><!-- big-content-title -->
    
                <div class="big-content-txt">
                    <p> <?php echo post_content($postfetch["content"]); ?> </p>
                </div><!-- big-content-txt -->
                <div class="big-content-footer">
                    <a href=<?php echo "readmore.php?postid=$postfetch[id]" ?>>ادامه مطلب...</a>
                </div><!-- big-content-footer -->
            </div>
    </div><!-- big-content -->
<?php
}
?>
    
<?php include ("footer.php"); ?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>

</html>
<?php include ("header.php"); ?>
<?php include ("slider.php"); ?>
<?php include ("specialPost.php"); ?>

    



    
<div class="big-post container-fluid">
    <div class="big-content col-md-12 row ">
        <div class="big-content-thumb col-md-3">
            <img src="images/post1.jpg">
        </div><!-- big-content-thumb -->
        <div class="text-big col-md-9">
                <div class="big-content-title ">
                    <h4>بهترین انتخاب شما</h4>
                </div><!-- big-content-title -->
    
                <div class="big-content-txt">
                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                </div><!-- big-content-txt -->
                <div class="big-content-footer">
                    <a href="readmore.html">ادامه مطلب...</a>
                </div><!-- big-content-footer -->
            </div>
    </div><!-- big-content -->
    <div class="big-content col-md-12 row ">
            <div class="big-content-thumb col-md-3">
                <img src="images/post1.jpg">
            </div><!-- big-content-thumb -->
            <div class="text-big col-md-9">
                <div class="big-content-title ">
                    <h4>بهترین انتخاب شما</h4>
                </div><!-- big-content-title -->
    
                <div class="big-content-txt">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                </div><!-- big-content-txt -->
                <div class="big-content-footer">
                    <a href="readmore.html" >ادامه مطلب...</a>
                </div><!-- big-content-footer -->
            </div>
        </div><!-- big-content -->

</div>
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
<div class="slider">
		   
 <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <?php
			 
			 $slider="SELECT * FROM  `slider` ORDER BY  `id` DESC ;";
			 $sliderresult=mysqli_query($connect,$slider);
			 while($sliderfetch=mysqli_fetch_assoc($sliderresult))
			 {
			?>
        
        <div class="mySlides fade">
 
        <img src=<?php echo $sliderfetch["src"] ?> >
        <div class="text"><?php echo $sliderfetch["title"] ?></div>
        </div>
        
   		<?php
			 }
		?>
        
               
    
        <!-- Next and previous buttons 
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div> 
</div><!-- slider -->
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

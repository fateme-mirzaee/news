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
        <div class="numbertext">1 / 3</div>
        <img src=<?php echo $sliderfetch["src"] ?> style="width:100%">
        <div class="text"><?php echo $sliderfetch["title"] ?></div>
        </div>
        
   		<?php
			 }
		?>
        
               
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> 
</div><!-- slider -->
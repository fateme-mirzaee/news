<?php include ("header.php"); ?>
<?php include ("slider.php"); ?>
<?php include ("specialPost.php"); ?> 
<?php include ("func/func.php"); ?> 
<div class="specialpost-title">
    <h4> سایر خبرها</h4>
</div>
<div class="big-post container-fluid">
<?php
$posrsql="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
$postquery=mysqli_query($connect,$posrsql);
while($postfetch=mysqli_fetch_assoc($postquery))
{
?> 



    <div class="big-content col-md-10 row ">
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
</div>

<?php include ("footer.php"); ?>

</body>

</html>
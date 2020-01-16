
<div class="specialpost-title">
        <h4>خبرهای ویژه</h4>
    </div>
<div class="content-wrapp container-fluid  row text-center">
    
<?php
include ("func/func2.php");
$i=0;
$specialposrsql="SELECT * FROM  `specialpost` ORDER BY  `id` DESC ;";
$specialpostquery=mysqli_query($connect,$specialposrsql);
while($specialpostfetch=mysqli_fetch_assoc($specialpostquery))
{
?>

        <div class="specialpost col-sm-6 col-md-6 col-xl-3">
            <div class="content">
                <div class="content-title">
                        <h4><?php echo $specialpostfetch["title"]; ?></h4>
                </div><!-- content-title -->
                <div class="content-thumb">
                        <img src=<?php echo $specialpostfetch["src"]; ?>>
                </div><!-- content-thumb -->
                <div class="content-txt">
                    <p><?php echo special_content($specialpostfetch["content"]); ?></p>
                </div><!-- content-txt -->
                <div class="see-news">
                    <a href=<?php echo "seenews.php?postid=$specialpostfetch[id]"; ?>>مشاهده خبر ...</a>
                </div>
            </div>
        </div><!-- content -->
        <?php
		$i++;
	if($i>=4)
	{
		break;
	}
			}
		?>
</div><!-- content-wrapp -->
<div class="content-wrapp container-fluid  row text-center">
<?php
$i=0;
$specialposrsql="SELECT * FROM  `specialpost` ORDER BY  `id` DESC ;";
$specialpostquery=mysqli_query($connect,$specialposrsql);
while($specialpostfetch=mysqli_fetch_assoc($specialpostquery))
{
?>

        <div class=" col-sm-6 col-md-6 col-xl-3">
            <div class="content">
                <div class="content-title">
                        <h4><?php echo $specialpostfetch["title"]; ?></h4>
                </div><!-- content-title -->
                <div class="content-thumb">
                        <img src=<?php echo $specialpostfetch["src"]; ?>>
                </div><!-- content-thumb -->
                <div class="content-txt">
                    <p><?php echo $specialpostfetch["content"]; ?></p>
                </div><!-- content-txt -->
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
<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ویرایش منو بالایی</p>
	</div><!-- lastpostTitle -->
    <form method="post" action="../check.php">
        <label>عنوان</label>
        <input type="text" name="title" value="">
        <label for="link">آدرس</label>
        <input type="text" name="link" value="">
        <input type="submit" name="updateheaderbtn" value="ارسال اطلاعات">
    </form>
       

</div>
</body>
</html>
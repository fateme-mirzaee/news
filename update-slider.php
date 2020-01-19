
<?php include("menu.php"); ?>

    <div class="sendpostBox">
        <div class="lastpostTitle">
            <p>ویرایش اسلایدر </p>
        </div>


        <form method="post" action="../check.php">
            <label>آدرس عکس</label>
            <input type="text" name="sliderimg" value="">
            <label>عنوان عکس</label>
            <input type="text" name="slidertitle" >
            <input type="submit" name="sliderbtn" value="ارسال اطلاعات">
        </form>
    </div>
</body>
</html>
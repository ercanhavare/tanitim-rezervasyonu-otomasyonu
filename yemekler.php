<?php include("header.php"); ?>
<span>
    <?php
    if ($handle = opendir('./images/yemek/')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                //echo "$entry\n";
                echo sprintf("<img src='./images/yemek/$entry' style='float:left;width:250px;height:250px;padding-left:5px;padding-top:5px;'/>");
            }
        }
        closedir($handle);
    }
    ?>
</span>
<?php $menu = 4;
include("footer.php"); ?>
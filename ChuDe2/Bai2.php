<table border="1px">
<tr>
<?php
    $cuuChuong=rand(1,10);
    echo "Bảng cửu chương $cuuChuong<br/>";
        for($i = 1; $i <= 10; $i ++) {
            echo "$cuuChuong x $i = " . ($cuuChuong * $i);
            echo "<br>";
        }
    }
?>
</tr>
</table>
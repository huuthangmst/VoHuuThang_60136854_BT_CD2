<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bảng cửu chương</title>
</head>
<body>
    <table border="1px">
        <tr>
            <?php
                echo "<h2><b>Bảng cửu chương</b></h2>";
                for($i = 1; $i <= 10; $i ++) {
                    echo "<td>";
                    for($j = 1; $j <= 10; $j ++) {
                        echo "$i x $j = " . ($i * $j);
                        echo "<br>";
                    }
                    echo "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>
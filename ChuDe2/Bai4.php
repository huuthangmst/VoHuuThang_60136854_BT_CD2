<!DOCTYPE html>
<html>
<head>
    <title>Bai Tap</title>
</head>
<body>
    <?php
        /**
        * 
        */
        class Ex
        {
            function __construct()
            {
                $m=rand(2,5);//Dòng
                $n=rand(2,5);//Cột
                echo "<b>Ma trân $m x $n</b>";
                $array = [];
                // Nhập mảng 4x4 ngẫu nhiên
                for ($a=0; $a < $m; $a++) { 
                    echo "<td>";
                    for ($b=0; $b < $n; $b++) { 
                        $array[$a][$b] = rand(-100, 100);
                    }
                    echo "</td>";
                }
                $this->render_Matrix($array, 0);
                
            }

            function render_Matrix($input, $deep) {
                if (is_array($input)) {
                    $deep++;
                    echo '<ul>';
                    foreach ($input as $key => $value) {
                        $this->render_Matrix($value, $deep);
                    }
                    echo '</ul>';
                }else{
                    echo '<div style="width: 50px; display: inline-block">'.$input.'</div>';
                }
            }
        }
        new Ex();
    ?>
</body>
</html>
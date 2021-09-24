<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Xổ xố miền trung</title>
</head>
<body>
	<?php
		function random($r){
			for($i=0;$i<=10;$i++){
				
			}
		}
		$giai8=rand(0,99);
		$giai7=rand(0,999);
		$giai6a=rand(0,9999);
		$giai6b=rand(0,9999);
		$giai6c=rand(0,9999);
		$giai5=rand(0,9999);
		$giai4=rand(0,99999);
		$giai3=rand(0,99999);
		$giai2=rand(0,99999);
		$giai1=rand(0,99999);
		$giaiDB=rand(0,999999);
		echo "<b style:color=red>Giải 8: $giai8</b>"."<br/>";
		function giai7($n){
			if($n< 100){
				echo "<b>Giải 7: 0$n</b><br/>";
			}
			else{
				echo "<b>Giải 7: $n</b><br/>";
			}
		}
		giai7($giai7);
		function giai6($a,$b,$c){
			if($a and $b and $c < 1000){
				echo "<b>Giải 6: 0$a, 0$b, 0$c</b><br/>";
			}
			elseif ($n<100)
			{
				echo "<b>Giải 6: 00$a, 00$b, 00$c</b><br/>";
			}
			else echo "<b>Giải 6: $a, $b, $c</b><br/>";
		}
		giai6($giai6a, $giai6b, $giai6c);
		function giai5($n){
			if($n< 1000){
				echo "<b>Giải 5: 0$n</b><br/>";
			}
			elseif ($n<100)
			{
				echo "<b>Giải 5: 00$n</b><br/>";
			}
			else echo "<b>Giải 5: $n</b><br/>";
		}
		giai5($giai5);
		
	?>
</body>
</html>
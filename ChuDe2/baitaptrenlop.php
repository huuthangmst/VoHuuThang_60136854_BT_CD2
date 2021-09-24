<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bìa tập trên lớp</title>
</head>
<body>
	<?php
		$a=rand(1,5);
		$b=rand(10,100);
		switch ($a) {
			case '1'://Tính chu vi và diện tích của hình vuông có cạnh là b.
				$cv=4*$b;
				echo "Chu vi hình vuông cạnh $b là: ".$cv."<br/>";
				$dt=$b*$b;
				echo "Điện tích hình vuông cạnh $b là: ".$dt."<br/>";			
				break;
			case '2'://Tính chu vi và diện tích của hình tròn có bán kính là b.
				$cv=2*$b*3.14;
				echo "Chu vi hình tròn bán kính $b là: ".$cv."<br/>";
				$dt=$cv=3.14*($b*$b);
				echo "Diện tích hình tròn bán kính $b là: ".$dt."<br/>";
				break;
			case '3'://Tính chu vi và diện tích của hình tam giác đều có cạnh là b.
				$cv=$b*3;
				echo "Chu vi hình tam giác đều bán kính $b là: ".$cv."<br/>";
				$dt=($b*$b)*sqrt(3/4);
				echo "Diện tích tam giác đều bán kính $b là: ".$dt."<br/>";
				break;
			case '4'://Tính chu vi và diện tích của hình chữ nhật có 2 cạnh là a và b.
				$cv=($a+$b)/2;
				echo "Chu vi hình chữ nhật là: ".$cv."<br/>";
				$dt=($a*$b);
				echo "Diện tích hình chữ nhật là: ".$dt."<br/>";
				break;
			default:
				echo "Ngoại lệ";
				break;
		}
	?>
</body>
</html>
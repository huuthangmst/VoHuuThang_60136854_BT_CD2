<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bài 1</title>
</head>
<body>
	<?php
		////////////////////////////////////////////////////////////////////////////////////
		$soNgauNhien=rand(10,1000);
		function ham_kiem_tra_so_nguyen_to($n)  
		{ 
			//Nếu nhỏ hơn 2 thì ko phải là snt rồi
			 if($n<2){
			 	return false;
			 }
			//Kiểm tra snt khi thỏa >=2
			 $canHai=sqrt($n);
			 for($i=2;$i<=$canHai;$i++){
			 	if($n%$i==0){
			 		return false;
			 	}
			 }
			 return true;
		}
		echo "<b>Câu a:</b><br/>";
		echo "Các số nguyên tố nhỏ hơn <b>$soNgauNhien</b> là: <br/>";
		if($soNgauNhien>=2){//Mặc dù >10 nhưng chú ý cái này thôi!!!
			echo "2";
		}
		for($i=3;$i<$soNgauNhien;$i+=2){
			if(ham_kiem_tra_so_nguyen_to($i)){
				echo (" ".$i);
			}
		}
		/////////////////////////////////////////////////////////////////////////////////////
		//số lượng chữ số của một số nguyên n bằng logarit cơ số 10 cộng với một. Vậy thì ta nên viết một hàm tính logarit cơ số 10 luôn.
		function logarit($n){
			$dem=1;
			while ($n>=10) {
				$n=$n/10;
				$dem++;
			}
			return $dem;
		}
		echo "<br/><b>Câu b:</b><br/>";
		echo "Số <b>$soNgauNhien</b> có: ".logarit($soNgauNhien)." chữ số";
		////////////////////////////////////////////////////////////////////////////////////
		function timSoMax($n){
			$max=0;
			while($n>0){
				$a=$n%10;
				if($a>$max){
					$max=$a;
				}
				$n=$n/10;
			}
			return $max;
		}
		echo "<br/><b>Câu c:</b><br/>";
		echo "Số max trong số <b>$soNgauNhien</b> là: ".timSoMax($soNgauNhien);
	?>
</body>
</html>
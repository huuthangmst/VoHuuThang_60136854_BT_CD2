<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bài 5</title>
</head>
<body>
	<?php
		$soNgauNhien=rand(-100,100);
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
		echo "Số ngẫu nhiên là: <b>$soNgauNhien</b><br/>";
		if(ham_kiem_tra_so_nguyen_to($soNgauNhien)){
			echo ("Số "."<b>$soNgauNhien</b>"." là số nguyên tố <br/>");
			$myfile = fopen("dsSoNguyenTo.txt", "a");
    
		    $txt = "$soNgauNhien\n";
		    fwrite($myfile, $txt);
		    
		    fclose($myfile);
			echo "<b><i>Đã lưu vào file</i></b>";

		}
	?>
</body>
</html>
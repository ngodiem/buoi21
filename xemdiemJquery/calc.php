<?php 
// echo "Đậu";
$diemToan =  $_GET["Toan"]; // Toan là pr  get là lấy giá trị Toán ra
$diemLy =  $_GET["Ly"];
$diemHoa =  $_GET["Hoa"];
$tongDiem = $diemToan + $diemLy + $diemHoa;
if ($tongDiem >= 24) {
	echo "Đậu";
}
else {
	echo "Rớt";
}

 ?>
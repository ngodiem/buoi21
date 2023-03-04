<?php 
// Bài tập cộng các con số từ 3 đến 7
// Kết quả: 25
$sum = 0;
for ($i=3; $i <=7 ; $i++) { 
	$sum += $i;
}
echo $sum ;
echo "<br>";

// Bài tập: Cộng các con số lẻ từ 3 đến 7
// Kết quả: 15

$sum= 0;
for ($i=3; $i <=7 ; $i++) { 
	if($i % 2 !=0) {
		$sum += $i;
	}
}
echo $sum;

// Bài tập: Cộng các con số lẻ từ 1 đến 9 

echo "<br>";
$sum = 0;
for ($i=1; $i <= 9 ; $i++) { 
	$sum += $i;
}
echo $sum;

echo "======bài tập 2=======";
echo "<br>";
// bài tập 2: tính tổng giá trị các số bao gồm các số 3,5,9,4,17,20
$a = [3, 5, 9, 4, 17, 20];
$sum = 0;
for ($i=0; $i <= count($a) - 1 ; $i++) { 
	$sum += $a[$i];
}
echo $sum;

echo "<br>";
echo "======bài tập 3 =======";
// bài tập 3: tính tổng giá trị của các phần tử chẳn trong arry   bao gồm các số 3,5,9,4,17,20
echo "<br>";
$a = [3,5,9,4,17,20];
$sum = 0;

for ($i=0; $i <= count($a) - 1 ; $i++) { 
	if($a[$i] % 2 == 0) {
		$sum += $a[$i];
	}
}
echo $sum;

echo "======bài tập 4 =======";
// bài tập 4: viết hàm isTongChan(a,b) hàm này trả về true nếu kết quả tổng 2 số a,b là số chẳn, ngược lại false


function isTongChan($a,$b) {
	$c = $a + $b 
	if($c % 2 == 0) {
		return true;
	}
	return false;
}


$result = isTongChan(9,10)  {
	if($result){
		echo "tổng chẳn";
	}
	echo "tổng lẻ";
}


function isTongChan($a, $b) {
	$c = $a + $b;
	if($c % 2 ==0 ) {
		return true;
	}
	return false;

}

echo "<br>";
$result = isTongChan(9,10);

if($result) {
	echo "tổng chẳn";
}
else {
	echo "tổng lẻ";
}

echo "======bài tập 5 =======";
echo "<br>";
 function isPassed($diem) {
	$diemToan = $diem["toan"];
	$diemLy = $diem["ly"];
	$diemHoa = $diem["hoa"];
	$tongdiem = ($diemToan + $diemLy)*2 + $diemHoa;
	if($tongdiem > 24 ) {
		return true;
	}
	else {
		return false;
	}
}

$a = ["toan" => 1, "ly" => 1, "hoa" => 8.5];
$result = isPassed($a);
if($result) {
	echo "đậu";
}
else {
	echo "rớt";
}

echo "<br>";
echo "======bài tập 6 =======";

function passedList($danh_sach_sv) {
	$danhSachDau = [];
	foreach ($danh_sach_sv as $tenSV => $diem) {
		if(isPassed($diem)) {
			$danhSachDau[] = $tenSV ;
		}
	}

return $danhSachDau;
}

$DSDSV = array(
	"nga" => array("toan" => 1, "ly" => 4, "hoa" => 8.5),
	"nam" => array("toan" => 4, "ly" => 9, "hoa" => 3.5),
	"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5)

);

$sv_dau = passedList($DSDSV) ;
var_dump($sv_dau);

 ?>
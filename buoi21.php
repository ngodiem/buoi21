<?php 
// var a = 5;
$a = 5;
echo $a;
$a = 7;
echo "<br>";
echo $a;

// Hằng
// const PI = 3.14;
define("PI", 3.14);
echo "<br>";
echo PI;

// Kiểu dữ liệu số
// a1 là biến
// a1 có giá trị là 10
// a1 có kiểu dữ liệu số
$a1 = 10;

// kiểu dữ liệu chuỗi
$a2 = "Hello world";
echo "<br>";
echo $a2;

$a3 = 'Hello world';
echo "<br>";
echo $a3;

$a4 = "world";
$a5 = 'Hello $a4';
echo "<br>";
echo $a5;

// Kiễu dữ liệu array (mảng, danh sách)
// array là tập hợp các phần tử có thứ tự
$a6 = [5, 9, 100, 2]; //$a6 = array(5, 9, 100, 2);

echo "<br>";
echo $a6[2];
$a6[2] = 101;
var_dump($a6);
// Kiểu dữ liệu object học sau
// Kiểu dữ liệu boolean
$b1 = true;
echo "<br>";
echo $b1;
$b2 = false;
echo $b2;//không ra gì hết ở trình duyệt
// Null nghĩa là biến đó không có vùng nhớ
$c1 = null;

// Kiểu resource học sau (liên quan đến file system/ database)
//Hay dùng echo hoặc var_dump() để hiển thị giá trị của biến

// var_dump() dùng cho 3 trường hợp: array, object, resource. Còn lại dùng echo 

var_dump($a6);
$c2 = 5 + 7;
echo "<br>";
echo $c2;

echo "<br>";
echo "chia lấy dư";
echo "br";
$c3 = 9 % 2;
echo $c3;

// Toán tử luận lý
$d = true && false; //false
$d1 = true || false || true ;//true
$d2 = (true && false) || ((false && !true) && (true && ! false));//false

// Toán tử so sánh: < > , <=, >=, ==, === !=
$e = 5 < 8;//true
$e1 = 9 > 10; //false
$e2 = 8 <= 10;//(8 < 10 ) || (8 == 10) => true
$e3 = 10 >= 7; // true
$e4 = 8 == 6;//false
$e5 = "1" == 1;// true
$e6 = "1" === 1; //false, phải bằng nhau về kiểu dữ liệu và giá trị
$e7 = "5" === "6"; //false
$e8 = 10;

if (5 < 7) {
	echo "<br>";
	echo "haha";
}	

if (5 < 4) {
	echo "<br>";
	echo "A1";
}
else {
	echo "<br>";
	echo "A2";
}

// Bài tập cộng các con số từ 3 đến 7
// Kết quả: 25
$sum = 3 + 4 + 5 + 6 + 7;
echo $sum;
$sum = 0;
for ($i = 3; $i <= 7; $i++) {
	$sum = $sum + $i;
}
echo "<br>";
echo $sum;



echo "<br>";
echo $a;
echo $a = 5;

$a = $b = $c = 5;
echo "<br>";
$sum = 7;
// $sum = $sum + 5;
$sum += 5;
echo $sum;

$i = 5;
// $i += 1;//6
$i++;//6

// Bài tập: Cộng các con số lẻ từ 3 đến 7
// Kết quả: 15
// Dùng vòng lặp for

$sum = 0;
for ($i = 3; $i <= 7 ; $i++) { 
	if($i % 2 == 1) {
		$sum = $sum + $i;
	}
}
echo "<br>";
echo $sum;




?>
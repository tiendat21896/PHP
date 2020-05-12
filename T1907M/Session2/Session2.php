<?php
//array php : khong gioi han so luong phan tu. - giong js
//array php : ket hop cua array JS va hashmap java
$ary = []; //khai bao bang ary
$ary[0] = 10;
$ary[1] = "T1907M";
$ary[2] = 3.14; // tu dong nap vao vi tri index tiep theo
for ($i = 0;$i < count($ary);$i++){
    echo $ary[$i];
}

foreach ($ary as $e){// array as element -- nguoc voi java - c#
    echo $e;
}

$ary["point"] = 100;
$ary[] = 11; // thu tu cua ary khong thay doi

var_dump($ary);// tương tự console.log();
$ary = [];
$ary[] = 1;
$ary[] = $ary;
$ary[] = "Hello";

$student = [
    "name" => "Nguyen Tien Dat",
    "age" => 24,
    "id" => 1
];// mảng kieu hasmap => hay dùng để định nghĩa dữ liệu cho 1 phần từ
$student[point] = 10;
var_dump($student);
if($student["point"] > 5){
    echo $student ["name"];
}else{
    echo "Khong cho sinh vien";
}
// Định nghĩa 1 hàm -- giống javascript
alert();
sendMessage();
sendMessage("Hello World");
function alert(){
    echo "Thong bao khan cap";
}

function sendMessage($msg = "Alo"){//Tham số có thể nhập giá trị mặc định ban đầu
    echo $msg;
}
// Thông dịch (runtime) xong file này trả về kết quả là HTML

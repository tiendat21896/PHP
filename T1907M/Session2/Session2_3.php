<?php
include_once("lib/Connect.php");
// Ra đây được thì có nghĩa là kết nối thành công
//echo "Connected succesfully";
//$sql_text = "SELECT * FROM students";
//$rs = $conn->query($sql_text);
//if($rs->num_rows > 0){
//    while ($row = $rs->fetch_assoc()){
//        $students [] = $row;
//        // mỗi row là 1 mảng, có các key là các collum
//    }
//
////    var_dump($students);
//}
//students là mảng chứa các sinh viên
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Thông tin sinh viên</h1>
    <?php foreach ($students as $s): ?>
        <ul>
            <li><?php echo $s["id"];?></li>
            <li><?php echo $s["name"];?></li>
            <li><?php echo $s["age"];?></li>
            <li><?php echo $s["mark"];?></li>
        </ul>
    <? endforeach;?>
</body>
</html>

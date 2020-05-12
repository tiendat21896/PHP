<?php
function connect()
{
    $host = "localhost";
    $userDB = "root";
    $passDB = "";// xampp chỉ dùng chuỗi "";
    $dbName = "t1907m";// tên database
    $conn = new mysqli($host, $userDB, $passDB, $dbName);// Không cần port

    if ($conn->connect_error) {
        die("Connect Fail");// die là hàm dùng luồng đang chạy,
        // php là ngôn ngữ đơn luồng (single thread)
    }
    return $conn;
}
function getAll($table){
    $conn = connect();
    $sql_text = "SELECT * FROM ".$table;
    $data = [];
    $rs = $conn->query($sql_text);
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()){
            $data [] = $row;
            // Mỗi row là 1 mảng, có các key là các
        }
    }
    return $data;
}
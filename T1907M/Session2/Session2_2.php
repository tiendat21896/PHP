<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>
<body>
    <h1>Thông Tin Sinh Viên</h1>
    <?php //đây là nơi viết php
        include_once("students.php");// Nạp file php vào 1 file khác include --> nạp file
        //include("students.php") không nên dùng include vì nó sẽ nạp nhiều lần
    ?>
    <?php foreach ($students as $s): // kết hợp mã HTML - PHP ?>
        <ul>
            <li><?php echo  $s["name"] ?></li>
            <li><?php echo  $s["age"] ?></li>
            <li><?php echo  $s["point"] ?></li>
        </ul>
    <?php endforeach;?>

<!--    --><?php //foreach ($students as $s): // kết hợp mã HTML - PHP ?>
<!--        <ul>-->
<!--            <li>--><?php //echo  $s->name ?><!--</li>-->
<!--            <li>--><?php //echo  $s->age ?><!--</li>-->
<!--            <li>--><?php //echo  $s->point ?><!--</li>-->
<!--        </ul>-->
<!--    --><?php //endforeach;?><!-- làm thế này để khỏi lẫn với dấu {} -->
</body>
</html>

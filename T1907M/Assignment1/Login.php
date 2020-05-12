<?php
//lay du lieu tu mysql đưa vào giao diện
require_once("connect.php");
//ra day duoc no la ket noi thanh cong
$user = getAll("user");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 30px">
        <div class="title" style="text-align: center">
            <h1>LOGIN</h1>
        </div>
        <div class="content">
            <form>
                <div class="form-group ">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="container" style="padding: 30px">
        <div class="list">
            <div class="title" style="text-align: center">
                <h1>USER LIST</h1>
            </div>
            <table class="table table-hover">
                <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
                </thead>
                <tbody>
                <!--muốn viết riêng ra thì ?php tiếp-->
                <?php foreach ($user as $u) : // gọi thuộc tính của đối tượng dùng dâu -> ?>
                <tr>
                    <td><?php echo $u["id"]?></td>
                    <td><?php echo $u["name"] ?> </td>
                    <td><?php echo $u["email"] ?> </td>
                    <td><?php echo $u["password"] ?></td>
                </tr>
                <?php endforeach;?><!-- // để end foreach không lẫn với dấu if else-->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

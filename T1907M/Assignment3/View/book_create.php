<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            justify-content: center;
            color: blue;
            margin-top: 50px;
        }
        .content{
            display: flex;
            flex-direction: column;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">
        <h1>Đăng Ký</h1>
    </div>
    <div class="content">
        <form action="?route=post_book_create" method="POST">
            <div class="form-group">
                <label for="exampleInputName">Book Name</label>
                <input type="text" name="book_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Quantity</label>
                <input type="text" name="qty" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Category_ID</label>
                <input type="text" name="category_id" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
</body>
</html>
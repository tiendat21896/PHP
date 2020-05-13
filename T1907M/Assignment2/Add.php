<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="post_add.php" method="post" >
        <h1 style="margin-bottom: 30px; margin-top: 30px; color: #2a2ca5;margin-left: 300px">REGISTER</h1>
        <div class="form-group">
            <input type="text"  class="form-control col-9"  name="name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
            <input type="number" min="18"  class="form-control col-9"  name="age" placeholder="Age" required="required">
        </div>
        <div class="form-group">
            <input type="number"  min="1" max="10" class="form-control col-9"  name="mark" placeholder="Mark" required="required">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block col-2" style="text-align: center">Register Now</button>
        </div>
    </form>
</div>
</body>
</html>

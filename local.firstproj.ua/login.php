<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<h2>  Logined user: ".$email."</h2>";
    header("Location: /");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="index.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<?php include "navbar.php" ?>
<!--<form action="" method="post">-->
<!--    <input type="email" name="email">-->
<!--    <input type="submit" value="Login">-->
<!--</form>-->
<form method="post">
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</body>
</html>
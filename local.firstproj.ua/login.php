<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    if($email == 'admin@gmail.com'){
        header("Location : local.firsproj.ua/");
        exit();
    }
    echo "<h2>  Logined user: ".$email."</h2>";
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
<form action="" method="post">
    <input type="email" name="email">
    <input type="submit" value="Login">
</form>
</body>
</html>
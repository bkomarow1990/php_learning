<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    if($email == 'admin@gmail.com'){
        header("Location : /");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <form class="row g-3 needs-validation container" novalidate method="post">
        <div class="col-md-4">
            <div class="form-outline">
                <input type="text" class="form-control" id="validationCustom01" value="Name" name="fname" required  />
                <label for="validationCustom01" class="form-label">First name</label>
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-outline">
                <input type="text" class="form-control" id="validationCustom02" value="Surname" name="surname" required />
                <label for="validationCustom02" class="form-label">Last name</label>
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group form-outline">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="usernames" pattern="(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])
                " required/>
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="invalid-feedback">Please choose a username.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group form-outline">
                <input type="email" class="form-control" id="validationCustomEmail" name="email" required />
                <label for="validationCustomEmail" class="form-label">Email</label>
                <div class="invalid-feedback">Please choose an email.</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group form-outline">

                <input type="password" class="form-control" id="validationCustomPassword" name="password" required />
                <label for="validationCustomPassword" class="form-label">Password</label>
                <div class="invalid-feedback">Please choose a password.</div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" />
                <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
        </div>
        <div class="col-12">
            <input class="btn btn-primary" type="submit" value="Register"></input>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>
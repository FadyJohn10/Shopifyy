<?php
    include "connect.php"; 
    include "../includes/templates/header.php";
    include "../includes/languages/english.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['user'];
        $password = $_POST['password'];
        $hashedpass = sha1($password);

        // check if the user is in the database

        // I stopped hereeeeeeeeeeeeeee

    }


?>

<link href="../layout/css/home.css" rel="stylesheet">

<form class="login" method="POST">
    <h4>Admin login</h4>
    <input type="text" name="user" placeholder="username" class="input-control">
    <input type="password" name="password" placeholder="password" class="input-control">
    <input type="submit" value="login" class="btn btn-primary">
</form>


<?php include "../includes/templates/footer.php";?>
<?php
    session_start();
    $pageTitle = "Login";
    if(isset($_SESSION['Userrname'])){
        header('Location: dashboard.php');
    }

    include "../includes/languages/english.php";
    include "connect.php";
    include "../includes/functions/title.php"; 
    include "../includes/templates/header.php";
    


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['user'];
        $password = $_POST['password'];
        $hashedpass = sha1($password);

        // check if the user is in the database

        $stmt = $con->prepare('SELECT ID, Username, Password from users WHERE Username = ? AND Password = ?');
        $stmt->execute(array($username, $password));
        $userData = $stmt->fetch();
        $count = $stmt->rowCount();

        if($count > 0){
            $_SESSION['Username'] = $username;
            $_SESSION['UserID'] = $userData['ID'];
            header('Location: dashboard.php');
            exit();
        }

    }


?>

<form class="login" method="POST">
    <h4>Admin login</h4>
    <input type="text" name="user" placeholder="username" class="input-control">
    <input type="password" name="password" placeholder="password" class="input-control">
    <input type="submit" value="login" class="btn btn-primary">
</form>


<?php include "../includes/templates/footer.php";?>
<?php
session_start();
$pageTitle = "Dashboard";

if(isset($_SESSION['Username'])) {

    include '../includes/languages/english.php';
    include '../includes/functions/title.php';
    include "../includes/templates/header.php";
    include '../includes/templates/navbar.php';

    echo "Welcome " . $_SESSION['Username'];
    echo '<br>';
    echo "Welcome " . $_SESSION['UserID'];

    include "../includes/templates/footer.php";

}else{
    header('Location: index.php');
}


?>
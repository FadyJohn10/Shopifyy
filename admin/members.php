<?php
session_start();
$pageTitle = "Member Page";


if(isset($_SESSION['Username'])) {
    include 'connect.php';
    include '../includes/languages/english.php';
    include '../includes/functions/title.php';
    include "../includes/templates/header.php";
    include '../includes/templates/navbar.php';
    
    //////////////////////////////////////////////////////////////////////// start split page code
    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

    if($do == 'Manage'){
        echo 'welcome in manage page';
        echo '<a href="?do=Add"> add member</a>';
    }elseif ($do == 'Add'){
    ?>    

            <div class="container">
                <h1 class="edit-page-title">Add New Member</h1>
                <form action="?do=Insert" method="POST">
                    <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control edit-form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control edit-form-control" name="pwd" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control edit-form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Fullname:</label>
                        <input type="text" class="form-control edit-form-control" name="fullname" required>
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary edit-sbmt-btn">
                    </form>
            </div>

    <?php
    }
    elseif ($do == 'Edit'){ 
        
        // check if there is such ID
        $userID = isset($_GET['userID']) && is_numeric($_GET['userID']) ? intval($_GET['userID']) : 0;
        $stmt = $con->prepare("SELECT * from users WHERE ID = ?");
        $stmt->execute(array($userID));
        $userData = $stmt->fetch();
        $count = $stmt->rowCount(); 
        
        // if there is such ID show the form
        if($count > 0){ ?>
            <div class="container">
                <h1 class="edit-page-title">Edit Member</h1>
                <form action="?do=Update" method="POST">
                <input type="hidden" value="<?php echo $userID ?>" name="ID">
                    <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control edit-form-control" placeholder="<?php echo $userData['Username'] ?>" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control edit-form-control" placeholder="Leave blank if you donnot want to change" name="pwd">
                        <input type="hidden" value="<?php echo $userData['Password'] ?>" name="oldpwd">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control edit-form-control" placeholder="<?php echo $userData['Email'] ?>" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Fullname:</label>
                        <input type="text" class="form-control edit-form-control" placeholder="<?php echo $userData['Fullname'] ?>" name="fullname" required>
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary edit-sbmt-btn">
                    </form>
            </div>

        <?php


        }else{

            echo "This form is not reachable";

        }

    }
    elseif($do == 'Update'){
        echo '<div class="container">';
        echo '<h1 class="edit-page-title">Update Member</h1><br>';
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $ID = $_POST['ID'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $name = $_POST['fullname'];
            $pass = empty($_POST['pwd']) ? $_POST['oldpwd'] : $pass = $_POST['pwd'];
            
            $formErrors = array();

            if(empty($username)){
                $formErrors[] = "Username field is empty";
            }
            if(empty($email)){
                $formErrors[] = "Email field is empty";
            }
            if(empty($name)){
                $formErrors[] = "Full Name field is empty";
            }
            
            foreach($formErrors as $err){
                echo '<div class="alert alert-danger">' . $err . '</div>';
            }

            if(empty($formErrors)){
                $stmt = $con-> prepare("UPDATE users SET Username = ?, Password = ?, Email = ?, Fullname = ? WHERE ID = ?");
                $stmt -> execute(array($username, $pass, $email, $name, $ID));
                echo '<div class="alert alert-success">' . $stmt->rowCount() . " records updated" . '</div>';
            }

        }else{
            echo "You cannot acess this page directly";
        }
        
        echo '</div>';
    }

    include "../includes/templates/footer.php";

}

// if there is no session recorded
else{
    header('Location: index.php');
}

?>
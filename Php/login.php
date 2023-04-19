<?php 
    
    require 'connect.php';?>

<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: database.php");
        }
        else{
            echo "<script>alert('Hibás felhasználónév vagy jelszó!')</script>";
        }
    }
?>

<?php

require 'connect.php'; ?>

<?php 
if(isset($_POST['adduser'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password_2']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    

    if($password == $password2){
        $result = $con->query("SELECT * FROM user WHERE username='$username'");
        if(!($result->num_rows > 0)){
            $result2 = $con->query("SELECT * FROM user WHERE email='$email'");
            if(!($result2->num_rows > 0)){
                $con->query("INSERT INTO user (username, passwd, email, first_name, last_name) VALUES ('$username', '$password', '$email', '$first_name', '$last_name')");
                echo "<script>alert('Sikeres hozzáadás!')</script>";
                $username = '';
                $email = '';
                $_POST['password'];
                $_POST['password_2'];
                $first_name = '';
                $last_name = '';
                
                    
                    
            }
            else{
                echo "<script>alert('Ehez az email címhez már tartozik regisztráció!')</script>";
            }   
            
        }
        else{
            echo "<script>alert('A felhasználónév foglalt!')</script>";
            
        }

    }
    else{
        echo "<script>alert('A jelszavak nem egyeznek!')</script>";
        
    }
}
?>

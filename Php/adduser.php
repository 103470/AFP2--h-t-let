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

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Regisztráció</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="reglog.css" type="text/css">
    </head>
        <body>

            <div class="containerreg">
                <h1 class="h1reglog">Regisztráció</h1>
                <form action="adduser.php" method="POST" enctype="multipart/form-data">
                    <div class="test">
                    <label>Felhasználónév : </label>
                    <br>
                    <input type="text" name="username" placeholder="Írja be a felhasználónevet" id="reg" required>
                    <br><br>
                    <label>E-mail cím : </label>
                    <br>
                    <input type="email" name="email" placeholder="Írja be az e-mail címet" id="reg" required/>
                    <br><br>
                    <label>Jelszó : </label>
                    <br>
                    <input type="password" name="password" placeholder="Írja be a jelszót" id="reg" required/>
                    <br><br>
                    <label>Jelszó megerősítése : </label>
                    <br>
                    <input type="password" name="password_2" placeholder="Írja be a jelszót újra" id="reg" required/>
                    <br><br>
                    <label>Vezetéknév: </label>
                    <br>
                    <input type="text" name="first_name" placeholder="Írja be a Vezetéknevét" id="reg" required/>
                    <br><br>
                    <label>Keresztnév: </label>
                    <br>
                    <input type="text" name="last_name" placeholder="Írja be a Keresztnevét" id="reg" required/>
                    <br><br>
                    <button type="submit" name="adduser" class="adduser">Regisztráció</button>
                    <br><br>
                    </div>
                
            
                 </form>
            </div>       
        </body>
    

</html>

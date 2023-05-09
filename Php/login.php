<?php 
    
    require 'connect.php';?>

<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = $con->query("SELECT * FROM user WHERE username='$username' AND passwd='$password'");
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: editquiz.php");
        }
        else{
            echo "<script>alert('Hibás felhasználónév vagy jelszó!')</script>";
        }
    }
?>
        
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
    <nav>
       <div class="container">

       <div class="menu">
            <a href="main.php">Kezdőlap</a>
            <a href="login.php">Bejelentkezés</a>
        </div>

       </div>
    </nav>
        <div class="box">
            <h1 class="h1login">Bejelentkezés</h1>
            <form action="login.php" method="POST">
                <div class="inputBox">
                <label>Felhasználónév : </label>
                <br>
                <input type="text" name="username" placeholder="Írja be a felhasználónevet!" id="log" class="textbox" required>
                <br><br>
                <label>Jelszó : </label>
                <br>
                <input type="password" name="password" placeholder="Írja be a jelszót!" id="log" class="textbox" required>
                <br><br>
                <button type="submit" name="login" class="reglog">Bejelentkezés</button>
                <br><br>
                </div>
            </form>
        </div>
    </body>

</html>

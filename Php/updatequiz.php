<?php

require 'quizeditp.php';

if(!isset($_SESSION['username'])){
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<head>
        <title>Quiz szerkesztése</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
    <nav>
       <div class="container">

       <div class="menu">
            <a href="addquiz.php">Quiz hozzáadása</a>
            <a href="editquiz.php">Quiz szerkesztése</a>
            <a href="addchoice.php">Feleletválasztós kérdés hozzáadása</a>
            <a href="addqtext.php">Kifejtendő kérdés hozzáadása</a>
            <a href="editq.php">Kérdés szerkesztése</a>
            <a href="adduser.php">Felhasználó hozzáadása</a>
            <a href="logout.php">Kijelentkezés</a>
        </div>

       </div>
    </nav>
    
    <div class="box">
        <form action="quizeditp.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $quiz_id; ?>">
            <div class="inputBox">
            <label>Quiz neve: </label>
            <input type="text" name="quizname" class="form-control" placeholder="Írja be a quiz nevét" value="<?php echo $quiz_name; ?>" id="adat">
            <br><br>
            <label>Készítette: </label>
            <input type="text" name="madeby" class="form-control"  placeholder="Írja be a készítő nevét" value="<?php echo $made_by; ?>" id="adat">
            <br><br>
            <button type="submit" class="btnsave" name="edit">Mentés</button>
            <button type="submit" class="btnsave" name="cancel">Mégse</button>

            
            </div>
        </form>
        </div>
        </div>
    </body>

</html>

<?php  
    require 'editp.php';
    

?>

<!DOCTYPE html>
<head>
        <title>Kérdés hozzáadása</title>
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
        <form action="editq.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="inputBox">
            <label>Kérdés: </label>
            <input type="text" name="question" class="form-control" placeholder="Írja be a kérdést" value="<?php echo $question; ?>" id="adat">
            <br><br>
            <label>1. Opció: </label>
            <input type="text" name="option1" class="form-control"  placeholder="Írja be a választ" value="<?php echo $option1; ?>" id="adat">
            <br><br>
            <label>2.Opció: </label>
            <input type="text" name="option2" class="form-control" placeholder="Írja be a választ" value="<?php echo $option2; ?>" id="adat">
            <br><br>
            <label>3. Opció: </label>
            <input type="text" name="option3" class="form-control" placeholder="Írja be a választ" value="<?php echo $option3; ?>" id="adat">
            <br><br>
            <label>4. Opció: </label>
            <input type="text" name="option4" class="form-control" placeholder="Írja be a választ" value="<?php echo $option4; ?>" id="adat">
            <br><br>
            
                
            <button type="submit" class="btnsave" name="edit">Mentés</button>
            <button type="submit" class="btnsave" name="cancel">Mégse</button>

            
            </div>
        </form>
        </div>
        </div>
    </body>

</html>

<?php  
    require 'editq.php';
    $con = mysqli_connect('localhost', 'root', '', 'afp2');
    $result =$con->query("SELECT * FROM question") or die("Hiba tötént!");


?>

<!DOCTYPE html>
<head>
        <title>Kérdés hozzáadása</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
    </header>
    <body>
    <div class="container">
        <form action="editq.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="sorok">
            <label>Kérdés: </label>
            <input type="text" name="question" class="form-control" placeholder="Írd be az autó gyártóját!" value="<?php echo $question; ?>" id="adat" required>
            <br><br>
            <label>1. Opció: </label>
            <input type="text" name="option1" class="form-control"  placeholder="Írd be az autó típusát!" value="<?php echo $option1; ?>" id="adat" required>
            <br><br>
            <label>2.Opció: </label>
            <input type="text" name="option2" class="form-control" placeholder="Az autó kiviteli típusa!" value="<?php echo $option2; ?>" id="adat" required>
            <br><br>
            <label>3. Opció: </label>
            <input type="text" name="option3" class="form-control" placeholder="Az autó rendszáma!" value="<?php echo $option3; ?>" id="adat" required>
            <br><br>
            <label>4. Opció: </label>
            <input type="text" name="option4" class="form-control" placeholder="Az autó színe!" value="<?php echo $option4; ?>" id="adat" required>
            <br><br>
            
                
            <button type="submit" class="btnsave" name="edit">Mentés</button>
            
            </div>
        </form>
        </div>
        </div>
    </body>

</html>

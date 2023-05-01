<!DOCTYPE html>
<html>
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
        <main>
            <div class="nagytest">
            <h2 class="choice">Kérdés hozzáadása</h2>
            <form method="POST" action="addchoice.php">
                <div class="test">
                <br>
                    <select name="qname" value="<?php echo $row['quiz_name']; ?>">
                        <option>Quiz címe</option>
                        
                        <?php while($row = mysqli_fetch_assoc($quizname)){ ?>
                            <option value="<?php echo $row['quiz_name']; ?>" name="qname"><?php echo $row['quiz_name']; ?></option>
                        <?php } ?>
                    </select>
            
                </br>
                <br>
                    <input type="hidden" name="number" class="szam" value="<?php echo $next;  ?>">
                <br>
                <br>
                    <label>Kérdés :</label>
                    <input type="text" name="question" class="textbox">
                <br>
                <br>
                    <label>Válasz 1 :</label>
                    <input type="text" name="option1" class="textbox">
                <br>
                <br>
                    <label>Válasz 2 :</label>
                    <input type="text" name="option2" class="textbox">
                <br>
                <br>
                    <label>Válasz 3 :</label>
                    <input type="text" name="option3" class="textbox">
                <br>
                <br>
                    <label>Válasz 4 :</label>
                    <input type="text" name="option4" class="textbox">
                <br>
                <br>
                <button name="addqc" value="addqc">Hozzáadás</button>
                <br>
                </div>
            </form>
            </div>
        </main>

    </body>
</html>

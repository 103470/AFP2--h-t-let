<?php

require 'connect.php'; ?>

<?php
    if(isset($_POST['addqc'])){
        $qid = rand(1,100);
        $result = $con->query("SELECT * FROM question WHERE question_id = $qid");
        while(mysqli_num_rows($result) > 0){
            ++$qid;
        }

        $qname = $_POST['qname'];
        //$quiz_id = $con->query("SELECT quiz_id from quiz WHERE quiz_name = ".$qname);
        $question = $_POST['question'];
        $choice1 = $_POST['option1'];
        $choice2 = $_POST['option2'];
        $choice3 = $_POST['option3'];
        $choice4 = $_POST['option4'];

        $con->query("INSERT INTO question (quiz_id, quiz_name, question_id, question, option1, option2, option3, option4) VALUES ('$quiz_id', '$qname', '$qid', '$question', '$choice1', '$choice2','$choice3','$choice4')");
    }

    $quizname = $con->query("SELECT * FROM quiz");




    $query = "SELECT * FROM question";
    $questions = mysqli_query($con,$query);




?>
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

<?php

require 'connect.php'; 

if(!isset($_SESSION['username'])){
        header("location: login.php");
    }

?>

<?php
    if(isset($_POST['addqc'])){
        $qid = rand(1,100);
        $result = $con->query("SELECT * FROM question WHERE question_id = $qid");
        while(mysqli_num_rows($result) > 0){
            ++$qid;
        }
        
        $quiz_id = $_POST['qname'];
        $qname = "";
        $res = $con->query("SELECT quiz_name FROM quiz WHERE quiz_id = $quiz_id");
        while($row = mysqli_fetch_assoc($res)){
            $qname = $row['quiz_name'];
        }
        $question = $_POST['question'];
        $choice = array();
        $choice[1] = $_POST['option1'];
        $choice[2] = $_POST['option2'];
        $choice[3] = $_POST['option3'];
        $choice[4] = $_POST['option4'];

        $count = count($choice);
        for($i=1; $i <= $count; $i++){

        $con->query("INSERT INTO q_answers (qid, answer) VALUES ('$qid', '$choice[$i]')");
        }

        $con->query("INSERT INTO question (quiz_id, quiz_name, question_id, question) VALUES ('$quiz_id', '$qname', '$qid', '$question')");
    }

    $quizname = $con->query("SELECT * FROM quiz");
    

    

    
	
		


?>

<!DOCTYPE html>
<html>
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
        <main>
            <div class="box">
            <h2 class="choice">Kérdés hozzáadása</h2>
            <form method="POST" action="addchoice.php">
                <div class="inputBox">
                <br>
                    <select name="qname">
                        <option>Quiz címe</option>
                        <?php while($row = mysqli_fetch_assoc($quizname)){ ?>
                            <option value="<?php echo $row['quiz_id']; ?>" ><?php echo $row['quiz_name']; ?></option>
                        <?php } ?>
                    </select>
            
                </br>
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

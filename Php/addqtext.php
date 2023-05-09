<?php

require 'connect.php'; ?>

<?php 
if(isset($_POST['addqt'])){
    $qid = rand(1,100);
    $result = $con->query("SELECT * FROM question_text WHERE question_id = $qid");
    while(mysqli_num_rows($result) > 0){
        ++$qid;
    }
    $quiz_id = $_POST['quizid'];
    $quizname = "";
        $res = $con->query("SELECT quiz_name FROM quiz WHERE quiz_id = $quiz_id");
        while($row = mysqli_fetch_assoc($res)){
            $quizname = $row['quiz_name'];
        }
    $question = $_POST['question'];
    $con->query("INSERT INTO question_text (quiz_id, quiz_name, question_id, question) VALUES ('$quiz_id', '$quizname', '$qid', '$question')");
}

$quizname = $con->query("SELECT * FROM quiz");
		
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kérdőív szerkesztése</title>
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
    <form method="POST" action="addqtext.php">
        <div class="inputBox">
            <br>
                <select name="quizid">
                    <option>Quiz címe</option>
                    <?php while($row = mysqli_fetch_assoc($quizname)){ ?>
                        <option value="<?php echo $row['quiz_id']; ?>" ><?php echo $row['quiz_name']; ?></option>
                    <?php } ?>
                </select>
            
            </br>
            <br>
                <label>Kérdés:</label>
                <input type="text" name="question">
            <br><br>    

            <button name="addqt" value="addqt">Hozzáadás</button>
        </div>
    </form>
    </div>
    
    </main>
    </body>
</html>

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

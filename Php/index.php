<?php

require 'connect.php';



?>
<?php

   
$quiz = $_GET['start'];

$result = $con->query("SELECT * FROM question WHERE quiz_id = $quiz");
$result3 = $con->query("SELECT * FROM question_text WHERE quiz_id = $quiz");
           
       
   
   
   
               
                   
   if(isset($_POST['save'])){
           
    $quiz_id = $_POST['quizid'];
    $quiz_name = $_POST['quizname'];
    $question_id = $_POST['questionid'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $question_text = $_POST['questiontext'];
    $text_answer = $_POST['textanswer'];
    foreach($answer as $key => $value)
    {
        $con->query("INSERT INTO answer (quiz_id, quiz_name, question_id, question, answer) VALUES ('$quiz_id', '$quiz_name', '$question_id', '$question', '$value')");
    }

    $con->query("INSERT INTO answer (quiz_id, quiz_name question_id, question, answer) VALUES ('$quiz_id', '$quiz_name', '$question_id', '$question_text', $text_answer'");

    
       
   
         
   }
   



    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Kérdőív</title>
    </head>
    <body>

    <nav>
       <div class="container">

       <div class="menu">
			<a href=""></a>
			<a href=""></a>
        </div>

       </div>
    </nav>

    <div class="box">
    <form method="POST" action="index.php">
            
            
        <input type="hidden" name="id" value="<?php echo $quiz ?>">
            <div class="radioBox">
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <label><?php echo $row['question']; ?> </label>
                <i></i>
                <input type="hidden" name="quizid" value="<?php echo $row['quiz_id']; ?> ">
                <input type="hidden" name="quizname" value="<?php echo $row['quiz_name']; ?> ">
                <input type="hidden" name="questionid" value="<?php echo $row['question_id']; ?> ">
                <input type="hidden" name="question" value="<?php echo $row['question']; ?> ">
                <br>
                <?php $qid = $row['question_id'];?>
                    
                    <?php 
                    $result2 = $con->query("SELECT * FROM q_answers WHERE qid = $qid");
                    while($row2 = mysqli_fetch_array($result2)) { ?>
                    <div>
                    <input type="radio" name="answer[<?php echo $row2['qid']; ?>]"  
                    value="<?php echo $row2['answer']; ?>" require><?php echo $row2['answer']; ?> <br>
                    </div>
                <?php } ?>
                        
                    
            <?php         
            }
            ?>
            </div>
            <div class="inputBox">
            <?php while($row3 = mysqli_fetch_assoc($result3)) { ?>
                    <label><?php echo $row3['question']; ?> </label>
                    <i></i>
                    <input type="hidden" name="quizid" value="<?php echo $row3['quiz_id']; ?> ">
                    <input type="hidden" name="quizname" value="<?php echo $row3['quiz_name']; ?> ">
                    <input type="hidden" name="questionid" value="<?php echo $row3['question_id']; ?> ">
                    <input type="hidden" name="questiontext" value="<?php echo $row3['question']; ?> ">
                
                    <input type="text" name="textanswer">
                        
                <?php } 

                ?>
            <div>
            </br>
            
            
            </br>
            <br>
            <a href="final.php" name="save" class="btnup">Kitöltés</a>
            <br>
        </form>
    </div>
    </body>
</html>

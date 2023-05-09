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
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Kérdőív</title>
    </head>
    <body>
    <div class="index">
    <form method="POST" action="index.php" >
            <br>
            <ul>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                    <h3 class="h2index"><label><?php echo $row['question']; ?> </label></h3>
                    <input type="hidden" name="quizid" value="<?php echo $row['quiz_id']; ?> ">
                    <input type="hidden" name="quizname" value="<?php echo $row['quiz_name']; ?> ">
                    <input type="hidden" name="questionid" value="<?php echo $row['question_id']; ?> ">
                    <input type="hidden" name="question" value="<?php echo $row['question']; ?> ">
                        <input type="radio" name ="answer" value="<?php echo $row['option1']; ?>" required ><?php echo $row['option1']; ?> <br>
                        <input type="radio" name ="answer" value="<?php echo $row['option2']; ?>" required ><?php echo $row['option2']; ?> <br>
                        <input type="radio" name ="answer" value="<?php echo $row['option3']; ?>" required ><?php echo $row['option3']; ?> <br>
                        <input type="radio" name ="answer" value="<?php echo $row['option4']; ?>" required ><?php echo $row['option4']; ?> <br>
                <?php } ?>
            <br>
            </ul>
            <br>
        
            <input type="hidden" name="number" value="<?php echo $page_no; ?>">
            <a <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
            } ?>><button name="next" value="next">Tovább</button></a>
            <br>
        </form>
    </div>
    </body>
</html>

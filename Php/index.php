<?php

require 'connect.php'; 

?>
<?php
if(isset($_POST['start'])){
    $quiz = $_POST['q_name'];
    header ("location: index.php?page_no=". $next_page);
}



    
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
    } 
        else {
            $page_no = 1;
        }
            
    $total_records_per_page = 1;
            
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";
            
    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM question");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $second_last = $total_no_of_pages - 1; 
            
            
            
    $result = mysqli_query($con,"SELECT * FROM question LIMIT $offset, $total_records_per_page");
            
            

                
                
    if(isset($_POST['next'])){
        $number = $_POST['number'];
        $quiz_id = $_POST['quizid'];
        $quiz_name = $_POST['quizname'];
        $question_id = $_POST['questionid'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
            
        $con->query("INSERT INTO answer (quiz_id, quiz_name, question_id, question, answer) VALUES ('$quiz_id', '$quiz_name', '$question_id', '$question', '$answer')");
                    
            
        if($page_no < $total_no_of_pages) {
            header ("location: index.php?page_no=". $next_page);
                    }
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
    <form method="POST" action="process.php" >
        <h3 class="h2index"><label></label></h3>
        <input type="hidden" name="question" value=" ">
            <br>
            <ul>
                
                <input type="radio" name ="answer" value=" ">
                
            <br>
            </ul>
            <br>

            <input type="hidden" name="number" value=" ">
            <button name="next" value="next">Tovább</button>
            <br>
        </form>
    </div>
    </body>
</html>


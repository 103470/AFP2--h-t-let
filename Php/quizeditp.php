<?php 

require 'connect.php'; ?>

<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

$total_records_per_page = 10;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
    $con,
    "SELECT COUNT(*) As total_records FROM quiz"
    );
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;

$result =$con->query("SELECT * FROM quiz LIMIT $offset, $total_records_per_page") or die("Hiba tötént!");
$num_rows = mysqli_num_rows($result);



    $quiz_id = 0;
    $quiz_name = '';
    $made_by = '';
   
    
    if(isset($_GET['edit'])){
        $quiz_id = $_GET['edit'];
        $result = $con->query("SELECT * FROM quiz WHERE quiz_id = $quiz_id") or die("Hiba történt!");
        $update = true;

        if(!empty($result)){
            $row = mysqli_fetch_array($result);
            $quiz_name = $row['quiz_name'];
            $made_by = $row['made_by'];
           
        }
        

    }


    if(isset($_POST['edit'])){
        $quiz_id = $_POST['id'];
        $quiz_name = $_POST['quizname'];
        $made_by = $_POST['madeby'];
       
        $con->query("UPDATE quiz SET quiz_name='$quiz_name', made_by='$made_by' WHERE quiz_id = $quiz_id");
        $con->query("UPDATE question SET quiz_name='$quiz_name' WHERE quiz_id = $quiz_id") or die("Hiba történt!");
        

        $_SESSION['message'] = "Az adatok frissültek!";
        header("location: editquiz.php");
        
        
        
    }

    if(isset($_GET['delete'])){
        $quiz_id = $_GET['delete'];
        
        $result = $con->query("SELECT question_id FROM question WHERE quiz_id = $quiz_id");
        $qid = 0;
        while($row = mysqli_fetch_assoc($result)){
            $qid = $row['question_id'];
        }
        $con->query("DELETE FROM q_answers WHERE qid = $qid");
        $con->query("DELETE FROM quiz WHERE quiz_id = $quiz_id") or die("Hiba történt!");
        $con->query("DELETE FROM question WHERE quiz_id = $quiz_id");
        
        $_SESSION['message'] = "Az adatok törlése sikeres!";
        header("location: editquiz.php");
        
        

    }

    if(isset($_POST['cancel'])){
        header("location: editquiz.php");
    }



    

?>

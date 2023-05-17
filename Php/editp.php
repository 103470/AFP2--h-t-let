<?php 

require 'connect.php';
if(!isset($_SESSION['username'])){
    header("location: login.php");
}

?>
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
    "SELECT COUNT(*) As total_records FROM question"
    );
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;

$result =$con->query("SELECT * FROM question LIMIT $offset, $total_records_per_page") or die("Hiba tötént!");
$num_rows = mysqli_num_rows($result);



    $question = '';
    $option1 = '';
    $option2 = '';
    $option3 = '';
    $option4 = '';
    $update = false;
    $id = 0;
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $result = $con->query("SELECT * FROM question WHERE question_id = $id") or die("Hiba történt!");
        $result2 = $con->query("SELECT * FROM q_answers WHERE qid = $id");
        $update = true;
        $options = array();
        if(!empty($result)){
            $row = mysqli_fetch_array($result);
            $question = $row['question'];
           
        }

        while($row2 = mysqli_fetch_array($result2)){
            $options[1] = $row2['answer'];
            $options[2] = $row2['answer'];
            $options[3] = $row2['answer'];
            $options[4] = $row2['answer'];

        }

    }


    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $question = $_POST['question'];
        $options = array();
        $options[1] = $_POST['option1'];
        $options[2] = $_POST['option2'];
        $options[3] = $_POST['option3'];
        $options[4] = $_POST['option4'];

        $count = count($options);
        for($i = 1; $i < $count; $i++){
            $con->query("UPDATE q_answers SET answer='$options[$i]' WHERE qid = $id");
        }
    
        $con->query("UPDATE question SET question='$question' WHERE question_id = $id") or die("Hiba történt!");
        

        $_SESSION['message'] = "Az adatok frissültek!";
        header("location: editq.php");
        
        
        
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $con->query("DELETE FROM question WHERE question_id = $id") or die("Hiba történt!");
        $con->query("DELETE FROM q_answers WHERE qid = $id");
        
        $_SESSION['message'] = "Az adatok törlése sikeres!";
        header("location: editq.php");
        
        

    }

    if(isset($_POST['cancel'])){
        header("location: editq.php");
    }

?>

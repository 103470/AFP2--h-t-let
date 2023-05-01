<?php
    require 'connect.php'; ?>

<?php
    $result = $con->query("SELECT * FROM question");
    $num_rows = mysqli_num_rows($result);


    $question = '';
    $option1 = '';
    $option2 = '';
    $option3 = '';
    $option4 = '';
    $update = false;
    $id = $_GET['question_id'];
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $result = $con->query("SELECT * FROM question WHERE question_id = $id") or die("Hiba történt!");
        $update = true;
        if(!empty($result)){
            $row = mysqli_fetch_array($result);
            $question = $row['question'];
            $option1 = $row['option1'];
            $option2 = $row['option2'];
            $option3 = $row['option3'];
            $option4 = $row['option4'];
        }

    }


    if(isset($_POST['question_id'])){
        $id = $_POST['question_id'];
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];

        $con->query("UPDATE question SET question='$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4' WHERE question_id = $id") or die("Hiba történt!");

        $_SESSION['message'] = "Az adatok frissültek!";
        header("location: editq.php");
        
        
        
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $con->query("DELETE FROM question WHERE question_id = $id") or die("Hiba történt!");
        
        $_SESSION['message'] = "Az adatok törlése sikeres!";
        header("location: editq.php");
        
        

    }


?>

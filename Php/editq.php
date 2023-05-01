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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adatok</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
    </header>
    <body>
        <form action="editq.php">
        <div>
            <table class="styled-table">
                <thead>
                    <th>Quiz neve</th>
                    <th>Kérdés ID</th>
                    <th>Kérdés</th>
                    <th>1. Opció</th>
                    <th>2. Opció</th>
                    <th>3. Opció</th>
                    <th>4. Opció</th>
                    <th></th>

                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['quiz_name'] ?></td>
                    <td><?php echo $row['question_id'] ?></td>
                    <td><?php echo $row['question'] ?></td>
                    <td><?php echo $row['option1'] ?></td>
                    <td><?php echo $row['option2'] ?></td>
                    <td><?php echo $row['option3'] ?></td>
                    <td><?php echo $row['option4'] ?></td>
                    <td><a href="edit.php?edit=<?php echo $row['question_id']; ?>"
                            class="btnup">Szerkesztés</a>
                        <a href="editq.php?delete=<?php echo $row['question_id']; ?>" 
                            class="btndel">Törlés</a>
                        </td>

                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>    
        </div>
        </form>
    </body>
</html>

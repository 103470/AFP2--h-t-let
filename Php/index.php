<?php  

require 'connect.php'; ?>

<?php

$number = $_GET['n'];
$qidresult = $con->query("SELECT qid FROM questions WHERE sn = $number");
$qid = 1;
while($row = mysqli_fetch_assoc($qidresult)){
    $qid = $row['qid'];
}
$qresult = $con->query("SELECT * FROM questions WHERE sn = $number");
$question = mysqli_fetch_assoc($qresult);
$choices = $con->query("SELECT * FROM answers WHERE qid = $qid");

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


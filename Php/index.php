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


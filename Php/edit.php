<?php
    require 'editp.php'; ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adatok</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <header>
    </header>
    <body>
    <nav>
       <div class="container">

       <div class="menu">
            <a href="addquiz.php">Quiz hozzáadása</a>
            <a href="editquiz.php">Quiz szerkesztése</a>
            <a href="addchoice.php">Feleletválasztós kérdés hozzáadása</a>
            <a href="addqtext.php">Kifejtendő kérdés hozzáadása</a>
            <a href="editq.php">Kérdés szerkesztése</a>
            <a href="adduser.php">Felhasználó hozzáadása</a>
            <a href="logout.php">Kijelentkezés</a>
        </div>

       </div>
    </nav>
        <form action="editq.php" method="POST">
        <div class="filter">
            <table class="styled-table">
                <thead>
                    <th>Quiz neve</th>
                    <th>Kérdés ID</th>
                    <th>Kérdés</th>
                    <th>Válasz1</th>
                    <th>Válasz2</th>
                    <th>Válasz3</th>
                    <th>Válasz4</th>

                 
                    <th></th>

                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['quiz_name'] ?></td>
                    <td><?php echo $row['question_id'] ?></td>
                    <td><?php echo $row['question'] ?></td>
                    <?php 
                    $qid = $row['question_id'];
                    $result2 = $con->query("SELECT * FROM q_answers WHERE qid = $qid");
                    while($row2 = mysqli_fetch_assoc($result2)) {?>
                    <td><?php echo $row2['answer'] ?></td>
                    <?php } ?>
                    <td><a href="edit.php?edit=<?php echo $row['question_id']; ?>"
                            class="btnup">Szerkesztés</a>
                        <a href="editq.php?delete=<?php echo $row['question_id']; ?>" 
                            class="btndel">Törlés</a>
                        </td>

                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>   
            <div class="page">
                <ul>
                <?php if($page_no > 1){
                echo "<li><a href='?page_no=1'>First Page</a></li>";
                } ?>
    
                <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                <a <?php if($page_no > 1){
                echo "href='?page_no=$previous_page'";
                } ?>>Previous</a>
                </li>

                <?php
                if ($total_no_of_pages <= 10){  	 
	            for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
	            if ($counter == $page_no) {
	            echo "<li class='active'><a>$counter</a></li>";	
	            }else{
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
                
                }
                }
                elseif ($total_no_of_pages > 10){
                    if($page_no <= 4) {			
                        for ($counter = 1; $counter < 8; $counter++){		 
                           if ($counter == $page_no) {
                              echo "<li class='active'><a>$counter</a></li>";	
                               }else{
                                  echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                       }
                       }
                       echo "<li><a>...</a></li>";
                       echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                       echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                    }
                }
                elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                    echo "<li><a href='?page_no=1'>1</a></li>";
                    echo "<li><a href='?page_no=2'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for (
                         $counter = $page_no - $adjacents;
                         $counter <= $page_no + $adjacents;
                         $counter++
                         ) {		
                         if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                              }                  
                           }
                    echo "<li><a>...</a></li>";
                    echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                }
                else {
                    echo "<li><a href='?page_no=1'>1</a></li>";
                    echo "<li><a href='?page_no=2'>2</a></li>";
                    echo "<li><a>...</a></li>";
                    for (
                         $counter = $total_no_of_pages - 6;
                         $counter <= $total_no_of_pages;
                         $counter++
                         ) {
                         if ($counter == $page_no) {
                        echo "<li class='active'><a>$counter</a></li>";	
                        }else{
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }                   
                    }
                }
                ?>
    
                <li <?php if($page_no >= $total_no_of_pages){
                echo "class='disabled'";
                } ?>>
                <a <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
                } ?>>Next</a>
                </li>

                <?php if($page_no < $total_no_of_pages){
                echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
                } ?>
                </ul>

            </div> 
        </div>
        </form>
    </body>
</html>

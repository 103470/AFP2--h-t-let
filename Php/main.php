<?php 
require 'connect.php';


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





?>
<!DOCTYPE html>
<html>
<head>
	<title>Kezdőlap</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
    <meta charset="UTF-8">
</head>
<body>

	<nav>
       <div class="container">

       <div class="menu">
            <a href="main.php">Kezdőlap</a>
            <a href="login.php">Bejelentkezés</a>
        </div>

       </div>
    </nav>

	
	<form method="POST" action="index.php" >
    <div class="filter">
	<table class="styled-table">
        <thead>
            <tr>    
                <th>Quiz neve</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $quizname = $con->query("SELECT * FROM quiz LIMIT $offset, $total_records_per_page"); 
            $num_rows = mysqli_num_rows($quizname);
		    while($row = mysqli_fetch_assoc($quizname)): ?>
            <tr>
                <input type="hidden" name="id" value="<?php echo $row['quiz_id']; ?>">
                <?php $id = $row['quiz_id']; $_SESSION['id'] = $id;?>
                <td><?php echo $row['quiz_name'] ?></td>
                <td><a class="start" href="index.php?start=<?php echo $id ?>"
                    class="btnup">Kitöltés</a>
                </td>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table> 
  
    </div>  
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

			
    </form>

	
</body>
</html>

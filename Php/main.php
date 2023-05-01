<?php 
require 'connect.php';
$quizname = $con->query("SELECT * FROM quiz");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Kezdőlap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<ul>
			<li><a href="main.php">Kezdőlap</a></li>
            <li><a href="login.php">Bejelentkezés</a></li>
        </ul>
		
	</header>

	<main>
		<form action="index.php">
			<div class="main">
			<br>
                <select name="q_name" value="<?php echo $row['quiz_name']; ?>">
                    <option>Quiz címe</option>
                        <?php while($row = mysqli_fetch_assoc($quizname)){ ?>
                            <option value="<?php echo $row['quiz_name']; ?>" name="qname" require><?php echo $row['quiz_name']; ?></option>
                        <?php } ?>
                </select>
			</br>

			<button name="start">Kitöltés</button>
			</div>
		</form>

	</main>
</body>
</html>

<?php 

if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
?>

<!DOCTYPE hmtl>
    <head>
        <title>Quiz hozzáadása</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
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
    <main>
    <div class="box">
    <form method="POST" action="addquiz.php">
    
        <div class="inputBox">
        <br>
        <label>Quiz neve: </label>
        <input type="text" name="quizname" class="textbox">
        <br><br>
    
        <label>Készítette: </label>
        <br>
        <input type="text" name="madeby" class="textbox">
        <br><br>
   
        <button name="addquiz" value="addquiz">Hozzáadás</button>
        <br><br>
        </div>
    
    </div>
    
    </from>

    </main>

    </body>


</html>

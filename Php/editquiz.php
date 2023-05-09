Halfalo
#7335

SaviuR — 2022.11.29. 23:01
<!DOCTYPE html>
<html>
    <head>
        <title>Kérdőív szerkesztés</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
    </header>
        <main>
            <div class="nagytest">
            <h2 class="choice">Kérdés hozzáadása</h2>
            <form method="POST" action="addchoice.php">
                <div class="test">
                <br>
                    <label>Kérdés száma</label>
                    <input type="number" name="number" class="szam" value="<?php echo $next;  ?>">
                <br>
                <br>
                    <label>Kérdés :</label>
                    <input type="text" name="question" class="textbox">
                <br>
                <br>
                    <label>Válasz 1 :</label>
                    <input type="text" name="choice1" class="textbox">
                <br>
                <br>
                    <label>Válasz 2 :</label>
                    <input type="text" name="choice2" class="textbox">
                <br>
                <br>
                    <label>Válasz 3 :</label>
                    <input type="text" name="choice3" class="textbox">
                <br>
                <br>
                    <label>Válasz 4 :</label>
                    <input type="text" name="choice4" class="textbox">
                <br>
                <br>
                <button name="addqc" value="addqc">Hozzáadás</button>
                <br>
                </div>
            </form>
            </div>
        </main>

    </body>
</html>
Halfalo — 2022.11.29. 23:13
Kép
Kép
SaviuR — 2022.11.29. 23:30
Addqtext.php
<!DOCTYPE html>
<html>
    <head>
        <title>Kérdőív szerkesztése</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
    </header>
    <main>
    <div class="nagytest">
    <form method="POST" action="addqtext.php">
        <div class="test">
            <br>
                <label>Kérdés száma</label>
                <input type="number" name="number" class="szam" value="<?php echo $next;  ?>">
            <br> 
            <br>
                <label>Kérdés :</label>
                <input type="text" name="question" class="textbox">
            <br>

            <button name="addqt" value="addqt">Hozzáadás</button>
        </div>
    </form>
    </div>

    </main>
    </body>
</html>
Database.php
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
        <div>
            <table class="styled-table">
                <thead>
                    <th>Kérdés</th>
                    <th>Válasz</th>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['question'] ?></td>
                    <td><?php echo $row['answer'] ?></td>
                </tr>
                <?php endwhile; ?>
                </tbody>


            </table>
            <table class="styled-table">
            <thead>
                    <th>Kérdés</th>
                    <th>Válasz</th>

            </thead>
            <tbody>
            <tr class="active-row">
                <?php while($row = mysqli_fetch_assoc($result2)): ?>

                    <td><?php echo $row['question']; ?> </td>
                    <td><?php echo $row['answer']; ?> </td>
 
                <?php endwhile; ?>
            </tr>
            </tbody>
            </table>
        </div>
    </body>
</html>
Final.php
<html>
<head>
    <title>Kérdőív</title>
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
            <div class="final">
                <h2>Köszönjük, hogy időt szántál a kérdőív kitöltésésre.</h2>
                <h2>Válaszod sokat jelent nekünk!</h2>
            </div>

    </main>
</body>
</html>
SaviuR — 2022.11.29. 23:43
Index.php
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
        <h3 class="h2index"><label><?php echo $question['questions']; ?> </label></h3>
        <input type="hidden" name="question" value="<?php echo $question['questions']; ?> ">
            <br>
            <ul>
                <?php while($row = mysqli_fetch_array($choices)) { ?>
                <input type="radio" name ="answer" value="<?php echo $row['answer']; ?>" required ><?php echo $row['answer']; ?>
                <?php } ?>
            <br>
            </ul>
            <br>

            <input type="hidden" name="number" value="<?php echo $number; ?>"> 
            <button name="next" value="next">Tovább</button>
            <br>
        </form>
    </div>
    </body>
</html>
Login.php
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="main.php">Kezdőlap</a></li>
            <li><a href="login.php">Bejelentkezés</a></li>
        </ul>
    </header>
        <div class="nagytest">
            <h1 class="h1login">Bejelentkezés</h1>
            <form action="login.php" method="POST">
                <div class="test">
                <label>Felhasználónév : </label>
                <br>
                <input type="text" name="username" placeholder="Írja be a felhasználónevet!" id="log" class="textbox" required>
                <br><br>
                <label>Jelszó : </label>
                <br>
                <input type="password" name="password" placeholder="Írja be a jelszót!" id="log" class="textbox" required>
                <br><br>
                <button type="submit" name="login" class="reglog">Bejelentkezés</button>
                <br><br>
                </div>
            </form>
        </div>
    </body>

</html>
Main.php
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
            <div class="main">
                <h2>Mennyire vagy jártas a foci világában? </h2>
                <br>
                    Egy felelet választós kérdéssorozatban tesztelheted tudásod.
                <br>
                <ul>
                    <li><strong>Kérdések száma:</strong><?php echo $total; ?> </li>
                    <li><strong>Típus: </strong>Feleletválasztós</li>

                </ul>

                <li><a href="index.php?n=1" class="start">Kitöltés</a><li>

            </div>

    </main>
</body>
</html>
Prediction.php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kérdőív</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="index">
    <form method="POST" action="processp.php" >
        <h3><label><?php echo $question['question']; ?> </label></h3>
        <input type="hidden" name="question" class="textbox" value="<?php echo $question['question']; ?> ">
            <ul>
                <input type="text" name="answer" class="textbox" required>
            <br>
            </ul>

            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <button name="next" value="next">Tovább</button>
        </form>
        </div>
    </body>
</html>
SaviuR — 2022.11.29. 23:51
1.Kódrész
MEE6
BOT
 — 2022.11.29. 23:51
GG @SaviuR, you just advanced to level 8!
SaviuR — 2022.11.29. 23:51
{
    margin: 0px;
    padding: 0px;

}

body{
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-size: 16px;
    background-image: url(images/hatter.jpg);
    background-position: cover;
    background-attachment: fixed;
    background-size: cover;
    color: black;
    width: auto;
    margin-top: 10px;
    padding: 30px;
}

.h1login{
    padding: 40px;
    margin-bottom: -50px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    color:whitesmoke;
}

.h2choice{
    padding: 40px;
    margin-top: 40px;
    margin-bottom: -50px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    color:whitesmoke;
}
2.Kódrész
div.nagytest{
    margin-top: 250px;
    margin-left: 725px;
    background-color: rgb(0,0,0,0.5);
    width: 400px;
    font-size: 18px;
    border-radius: 10px;
    border:1px solid rgba(0, 0, 0, 0.5);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color:whitesmoke;


}

div.test{
    margin: 45px;
}

main {
    color: white;
}

.title {
    color: black;
    text-align: center;
    width: 100%;
    margin: auto;
    padding: 30px;
    font-size: 20px;

}
3.Kódrész
header {
    background-color: black;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 80px;
    display: flex;
    align-items: center;
    box-shadow: 0 0 25px 0 black;
}

header * {
    display: inline;
}

header li {
    margin: 20px;
}

header li a {
    color: white;
    text-decoration: none;
}

li{
    margin: 20px;
}

li a{
    color: black;
    text-decoration: none;
}
4.Kódrész
styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    margin-top: 100px;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    width: 100%;
    border-collapse: collapse;
}

.styled-table thead tr {
    background-color: black;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    background-color: white;
}

.styled-table tbody tr:nth-child(even) {
    background-color: whitesmoke;

}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid black;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: black;
}
%.Kódrész
.textbox{
    border-top: solid 1px #8e8e8e;
    border-right: solid 1px #d1d1d1;
    border-left: solid 1px #d1d1d1;
    border-bottom: solid 1px #e4e4e4;
    outline: 0;
    height: 30px;
    width: 275px;
}

.szam{
    border-top: solid 1px #8e8e8e;
    border-right: solid 1px #d1d1d1;
    border-left: solid 1px #d1d1d1;
    border-bottom: solid 1px #e4e4e4;
    outline: 0;
    height: 25px;
    width: 25px;
}

.main{
    margin-top: 250px;
    margin-left: 725px;
    width: 400px;
    font-size: 18px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color:black;
}

.index{
    margin-top: 250px;
    margin-left: 725px;
    width: 400px;
    height: 200px;
    padding-top: 50px;
    font-size: 18px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color:black;
}

.final{
    margin-top: 250px;
    margin-left: 725px;
    width: 400px;
    font-size: 18px;
    border-radius: 10px;
    text-align: center;
    color:black;

}
SaviuR — 2022.11.29. 23:59
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Nov 29. 23:37
Kibontás
nagyproject.sql
8 KB
Halfalo — 2022.11.30. 17:30
https://aries.ektf.hu/~ballatamas92/K1150.zip
Halfalo — 2022.11.30. 18:30
Console.WriteLine("Kérek egy típust: ");
            string marka = Console.ReadLine();
            Console.WriteLine("Kérek egy állapotot: ");
            string allapot = Console.ReadLine();
            if (F3_(lista, marka, allapot) == true)
            {
                for (int i = 0; i < lista.Count; i++)
                {
                    if (marka == lista[i].gyarto && lista[i].allapot == allapot)
                    {
                        Console.WriteLine("A keresett jármű váltója:{0}, klímája:{1}, eredeti ára:{2}", lista[i].manualisValto, lista[i].klima, lista[i].ar);
                    }
                }
            }
Budababa — 2022.12.01. 20:03
https://xdepot.uni-eszterhazy.hu/index.php/apps/richdocuments/public?fileId=501799290&shareToken=i66uTfLh5XjkSqc
Budababa — 2022.12.08. 18:13
https://docs.google.com/spreadsheets/d/1SbO67ud1L2al-XQRt18uwEzL35_Opowz/edit#gid=785138866
Google Docs
MP1_22_eredmények.xlsx
ZH1

1. feladat,2. feladat
Autó típus beolvasása,Benzin típus bekérése,Ellenőrzötten,Tankolt mennyiség beolvasása,Ellenőrzötten,Végösszeg,Egészre kerekítve,Van pontgyűjtő?,Ha van, pontok kiszámítása,Extra: tömbök deklarálása,Extra: tömböket jól is hasznája,Ciklus a feltétek beolvasására,Kiépés 5 ...
Kép
SaviuR — 2023.01.08. 18:44
<!DOCTYPE html>
<html>

<head>
    <title>
        Html CRUD with Pure JavaScript
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <table>
        <tr>
            <td>
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>EMP Code</label>
                        <input type="text" name="empCode" id="empCode">
                    </div>
                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="employeeList">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>EMP Code</th>
                            <th>Salary</th>
                            <th>City</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>

</html>
var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["fullName"] = document.getElementById("fullName").value;
    formData["empCode"] = document.getElementById("empCode").value;
    formData["salary"] = document.getElementById("salary").value;
    formData["city"] = document.getElementById("city").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.fullName;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.empCode;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.salary;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.city;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = <a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>;
}
function resetForm() {
    document.getElementById("fullName").value = "";
    document.getElementById("empCode").value = "";
    document.getElementById("salary").value = "";
    document.getElementById("city").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
    document.getElementById("empCode").value = selectedRow.cells[1].innerHTML;
    document.getElementById("salary").value = selectedRow.cells[2].innerHTML;
    document.getElementById("city").value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.fullName;
    selectedRow.cells[1].innerHTML = formData.empCode;
    selectedRow.cells[2].innerHTML = formData.salary;
    selectedRow.cells[3].innerHTML = formData.city;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("fullName").value == "") {
        isValid = false;
        document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
            document.getElementById("fullNameValidationError").classList.add("hide");
    }
    return isValid;
}
css
body > table{
    width: 80%;
}

table{
    border-collapse: collapse;
}
table.list{
    width:100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even),table.list thead>tr {
    background-color: #dddddd;
}

input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]{
    width: 30%;
    background-color: #ddd;
    color: #000;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form div.form-action-buttons{
    text-align: right;
}

a{
    cursor: pointer;
    text-decoration: underline;
    color: #0000ee;
    margin-right: 4px;
}

label.validation-error{
    color:   red;
    margin-left: 5px;
}

.hide{
    display:none;
}
SaviuR — 2023.02.01. 18:40
NBG_GI608G4
Budababa — 2023.04.01. 20:47
https://www.youtube.com/watch?v=NKvZZpfxvuM
YouTube
Gábor Sárosi
MagasProg II. - 03.31.
Kép
MEE6
BOT
 — 2023.04.01. 20:47
GG @Budababa, you just advanced to level 6!
Budababa — 2023.04.10. 15:30
tinyurl.com/mp2c2023
SaviuR
 kitűzött 
egy üzenetet
 a csatornán. Nézd meg az összes 
kitűzött üzenetet
.
 — 2023.04.13. 14:54
Budababa — 2023.04.21. 7:48
A 2. reláció már 1NF-ben van mert:

•A relációban minden érték elemi, a reláció nem tartalmaz adatcsoportot.
•A reláció minden sorában oszloponként egy és csak egy érték áll, az értékek sorrendje minden sorban azonos, minden sor különböző.
•Van legalább egy vagy több tulajdonság, amelyekkel a sorok egyértelműen megkülönböztethetők egymástól
SaviuR — 2023.05.01. 17:16
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Regisztráció</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
Kibontás
Uj_szoveges_dokumentum.txt
3 KB
SaviuR — 2023.05.01. 17:32
Csatolt fájltípus: archive
afp2.zip
10.98 KB
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 01. 17:39
Kibontás
afp2.sql
6 KB
SaviuR — 2023.05.01. 17:45
<?php

require 'connect.php'; 

?>
<?php
Kibontás
Uj_szoveges_dokumentum.txt
2 KB
<?php 
require 'connect.php';
$quizname = $con->query("SELECT * FROM quiz");


?>
Kibontás
Uj_szoveges_dokumentum.txt
1 KB
SaviuR — 2023.05.01. 17:54
<?php  
    require 'editq.php';
    $con = mysqli_connect('localhost', 'root', '', 'afp2');
    $result =$con->query("SELECT * FROM question") or die("Hiba tötént!");


Kibontás
Uj_szoveges_dokumentum.txt
3 KB
SaviuR — ma 23:36-kor
<?php

require 'connect.php'; ?>

<?php
    if(isset($_POST['addqc'])){
Kibontás
Uj_szoveges_dokumentum_2.txt
4 KB
<?php

require 'connect.php'; ?>

<?php 
if(isset($_POST['addqt'])){
Kibontás
Uj_szoveges_dokumentum_2.txt
1 KB
addqtext.php
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
                    <th>Quiz ID</th>
                    <th>Quiz neve</th>
                    <th>Készítette</th>
                    <th></th>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['quiz_id'] ?></td>
                    <td><?php echo $row['quiz_name'] ?></td>
                    <td><?php echo $row['made_by'] ?></td>
                    <td><a href="updatequiz.php?edit=<?php echo $row['quiz_id']; ?>"
                            class="btnup">Szerkesztés</a>
                        <a href="quizeditp.php?delete=<?php echo $row['quiz_id']; ?>" 
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
... (48 sor maradt)
Becsukás
Uj_szoveges_dokumentum_2.txt
6 KB
editquiz.php
﻿
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
                    <th>Quiz ID</th>
                    <th>Quiz neve</th>
                    <th>Készítette</th>
                    <th></th>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['quiz_id'] ?></td>
                    <td><?php echo $row['quiz_name'] ?></td>
                    <td><?php echo $row['made_by'] ?></td>
                    <td><a href="updatequiz.php?edit=<?php echo $row['quiz_id']; ?>"
                            class="btnup">Szerkesztés</a>
                        <a href="quizeditp.php?delete=<?php echo $row['quiz_id']; ?>" 
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
                echo "<li><a href='?page_no=$total_no_of_pages'>Last </a></li>";
                } ?>

                

            </ul>
            </div> 

        </div>
    </form>
    </body>
</html>
Uj_szoveges_dokumentum_2.txt
6 KB

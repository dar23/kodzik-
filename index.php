<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>



<form  method="post" >
  post:  <input type="text"  name="message">
 
</form>




<?php





//przypisanie do zmiennych parametrów serwera 

$servername="localhost";
$username='root';
$password='';
$database='messages';
$port='3306';
$wiadomosc= @$_POST['message'];

//połączenie z bazą danych za pomocą uniwersalnego łącznika PDO
try{
	$conn = new PDO('mysql:host='.$servername.';dbname='.$database.';port='.$port, $username, $password );
  
  

  
}catch(PDOException $e){
	echo 'Połączenie nie mogło zostać utworzone.<br />';
}

require_once("table_db.php");
require_once("save_data_to_base.php");
require_once("text_from_db.php");
require_once("delete_from_db.php");














?>














    
</body>
</html>
<?php 

//utworzenie tabeli i przypisanie jej do zmiennej $sql.

$sql="CREATE TABLE  dane (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    wiadomosc TEXT NOT NULL
    )";


//zapytanie do bazy (kontakt z nią)



    $conn->query($sql);
    


    
  

  







?>
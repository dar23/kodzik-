<?php 



if($_POST['wiadomosc']=''){


    $record="DELETE FROM dane (id,wiadomosc) VALUES (id,'$wiadomosc')";

    
$conn->exec($record);

}



















?>
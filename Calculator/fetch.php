<?php

require 'connection.php';



try{
    $fetch = $pdo->prepare("SELECT * FROM answer");
    $fetch->execute();
    $stored = $fetch->fetchAll(PDO::FETCH_OBJ);
   
}
catch(exception $e){
    die("connection refused".$e->getMessage());
}

require 'index.html'

?>
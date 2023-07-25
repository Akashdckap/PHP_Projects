<?php
require 'connection.php';

$id = $_POST['delete'];

try{
    $delete = $pdo->prepare("DELETE FROM answer WHERE id = '$id'");
    $delete->execute();
    header('location:/fetch.php');
}
catch(exception $e){
    die($e->getMessage());
}



require 'index.html';
?>
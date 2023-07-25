<?php

require 'connection.php';

$id = $_POST['edit'];
// echo $id;

try{
    $edit = $pdo->prepare("SELECT * FROM answer WHERE id = '$id'");
    $edit->execute();
    $stored = $edit->fetchAll(PDO::FETCH_OBJ);
}
catch(exception $e){
    die ($e->getMessage());
}
require 'edit.html';
?>
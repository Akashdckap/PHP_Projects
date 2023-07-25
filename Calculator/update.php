<?php

require 'connection.php';

$id = $_POST['update'];
$firstnumber = $_POST['firstnumber'];
$operator = $_POST['operator'];
$secondnumber = $_POST['secondnumber'];

switch($operator){
    case "addition":$total = $firstnumber + $secondnumber;
    break;
    case "subraction":$total = $firstnumber - $secondnumber;
    break;
    case "multiplly":$total = $firstnumber * $secondnumber;
    break;
    case "divide":$total = $firstnumber / $secondnumber;
    break;
}

try {
    $update = $pdo->prepare("UPDATE answer SET first_number='$firstnumber',symbol='$operator',second_number='$secondnumber',result='$total' WHERE id ='$id'");
    $update->execute();
    header('location:/fetch.php');
}
 catch (exception $e) {
    die($e->getMessage());
}
require 'edit.html'

?>
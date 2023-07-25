<?php

require 'connection.php';



//$sum=[];
//
//require 'connection.php';
//
//$sum['db'] = (new DataBase())->db;

//$Routes = [
//    '/'=>'controllers/insert.php',
//    '/fetch'=>'controllers/fetch.php',
//    '/edit'=>'controllers/edit.php',
//    '/delete'=>'controllers/delete.php',
//    '/update'=>'controllers/update.php',
//    ];



if($_POST['firstnumber'] !="0" || $_POST['secondnumber'] !="0"){
$firstnumber = $_POST['firstnumber'];
$operator = $_POST['operator'];
$secondnumber = $_POST['secondnumber'];
}
switch($operator){
    case "addition": $total = $firstnumber+$secondnumber;
    break;
    case "subraction": $total = $firstnumber-$secondnumber;
    break;
    case "multiply": $total = $firstnumber*$secondnumber;
    break;
    case "divide": $total = $firstnumber/$secondnumber;
    break;
}

    if($firstnumber && $operator && $secondnumber){
        try{
            $statement = $pdo->prepare("INSERT INTO answer(first_number,symbol,second_number,result)values('$firstnumber','$operator','$secondnumber','$total')");
            $statement->execute();
            header("location:/fetch.php");
        }
        catch(exception $e){
            die("connection failed".$e->getmessage());
        }
    }
    



require 'index.html';

?>
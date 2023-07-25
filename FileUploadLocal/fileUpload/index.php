<?php

require "connection.php";

$app['db'] = (new database())->db;

$userName = $_POST['UserName'];
$file = $_FILES['image'];

if($userName != "" && isset($file)){
    $userName = $_POST['UserName'];
    $file = $_FILES['image'];

    $filePath = "images/".$file["name"];

    // print_r($userName);
    // print_r($file);
    move_uploaded_file($file["tmp_name"],$filePath);

    $app['db']->query("INSERT INTO image(Username,images_upload)VALUES('$userName','$filePath')");
    header('location:view.php');

}

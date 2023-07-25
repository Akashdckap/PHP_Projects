<?php

require "index.html";

$fileName = $_POST['filename'];
$imageSaver = $_FILES['images'];
// print_r($imageSaver);

$filePath = './Images'.$imageSaver;

move_uploaded_file($imageSaver['tmp_name'],$filePath.$imageSaver['name']);

$app['db'] = (new Database())->db;
$insert = $app['db']->query("INSERT INTO users(file_name,image)VALUES('$fileName','$filePath')");
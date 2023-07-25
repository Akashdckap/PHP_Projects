<?php

require "index.html";

$fileName = $_POST['username'];
$file = $_FILES['profilePhoto'];

// print_r($file);
// print_r($fileName);

$filePath = "imageSaver";

move_uploaded_file($file['tmp_name'],$filePath.$file['name']);
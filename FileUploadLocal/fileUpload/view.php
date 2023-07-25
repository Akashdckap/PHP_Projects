<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="UserName">
    <input type="file" name="image">
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

require 'connection.php';
$app['db'] = (new database())->db;

$get = $app['db']->query("SELECT * FROM image");
$get = $get->fetchAll();
foreach($get as $take){
    ?>
    <h2><?php echo $take['Username'] ?></h2>
    <img src="<?php echo $take['images_upload'] ?>">
    <?php
}
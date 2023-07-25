<?php
session_start();

require "Core/Router.php";

$router = new router();



$router->post("/signIn","signIn");
$router->post("/login","login");
$router->post("/logOut","logOut");
$router->routing();
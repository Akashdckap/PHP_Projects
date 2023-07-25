<?php

//class DataBase{
//
//    public $db;
//
//    public function __construct(){
//        try{
//            $this->db = new PDO(
//                "mysql:host=127.0.0.1;dbname=maths",
//                "admin",
//                "welcome"
//            );
//        }
//        catch(exception $e){
//            die ($e->getMessage());
//        }
//    }
//}

try{
    $pdo = new PDO(
        "mysql:host=127.0.0.1;dbname=maths",
        "admin",
        "welcome"
    );
}
catch(exception $e){
    die ($e->getMessage());
}

?>
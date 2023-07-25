<?php 

class database{
    public $db;

    public function __construct(){
        try{
            $this->db = new PDO(
                "mysql:host=localhost;dbname=upload",
                "admin",
                "welcome"
            );
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        
    }
}
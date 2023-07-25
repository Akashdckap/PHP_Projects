<?php

require "connection.php";
class userModel extends database {
    public function signIn($userName,$email,$phNo){
        $this->db->query("INSERT INTO signIn(userName,Email,phone_no) VALUES('$userName','$email','$phNo')");
        $this->db->query("INSERT INTO login(userName,Email)VALUES('$userName','$email')");
    }
    public function login($userName,$email){
        $check = $this->db->query("SELECT * FROM login WHERE userName = '$userName' and Email = '$email'");
        return $check->fetchAll(PDO::FETCH_OBJ);
    }
}

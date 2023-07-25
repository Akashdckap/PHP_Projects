<?php
require "Model/userModel.php";
class userController{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
    public function signIn($signInDetails){
        $userName = $signInDetails['userName'];
        $email = $signInDetails['Email'];
        $phNo = $signInDetails['phNo'];
        if($userName != "" && $email != "" && $phNo != ""){
            $check = $this->userModel->signIn($userName,$email,$phNo);
            $_SESSION['userName'] = $userName;
            require "View/Home.php";
        }
        else{
            echo "please fill all the details";
        }
    }
    public function login($loginDetails){
        $userName = $loginDetails['userName'];
        $email = $loginDetails['Email'];
        $checkDetails = $this->userModel->login($userName,$email);
        if($checkDetails){
            $_SESSION['userName'] = $userName;
            require "View/Home.php";
        }
        else{
            echo "You are not an login user";
        }
    }
    public function logout(){
        session_destroy();
        header('location:View/show.php');
    }
}
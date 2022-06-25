<?php
include_once 'config.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
// login
    if(!empty($username) && !empty($password)){
        // check username is login
        $check_user=mysqli_query($conn,"SELECT * FROM users WHERE username = '{$username}'");
        if(mysqli_num_rows($check_user) >0){
            //if username is curretc
            $login=mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}' AND password = '{$password}'");
            if(mysqli_num_rows($login)){
                // if loggin
                while($obj = mysqli_fetch_object($login)){
                    $username= $obj -> username; //hendle Unique_id
                    $is_admin= $obj -> is_admin; //hendle Unique_id
                }
                $_SESSION['username']=$username;
                $_SESSION['is_admin']=$is_admin;
                if($_SESSION['username']){
                    echo json_encode(["status" => true, "message" => "login"]);
                }
            }else{
                echo json_encode(["status" => false, "message" => "Password is Wrong"]);
            }
        }else{
            // if user name not login
            echo json_encode(["status" => false, "message" => "UserName is Wrong"]);
        }
    }else{
        // if input is empty
        echo json_encode(["status" => false, "message" => "Input is Empty"]);
    }

// end login


?>
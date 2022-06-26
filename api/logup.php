<?php
include_once 'config.php';
session_start();
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$is_admin=0;
if(empty($name) && empty($username) && empty($password)){
    // if input is empty
    echo json_encode(["status" => false, "message" => "Input is Empty"]);
}else{
    if(strlen($name) <7){
    //   if name is short 8 char
    echo json_encode(['status'=>false,"message" => "($name) is  Short"]);
    }else{
        // if name is biger 7 char
        if(strlen($password) < 7){
            // if password short 8 char
            echo json_encode(['status'=>false,"message" => "Password is  Short"]);
        }else{
            // if password is biger
            // check username is new
            $user_check=mysqli_query($conn,"SELECT * FROM users WHERE username = '{$username}'");
            if(mysqli_num_rows($user_check) >0){
                // if username is  already login
                echo json_encode(['status'=>false,"message" => "($username) is  already login"]);
            }else{
                // if username is  new
                $register=mysqli_query($conn,"INSERT INTO users (username,password,is_admin,name) VALUES('$username','$password',$is_admin,'$name')");
                if($register){
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
                        //End get seesion
                    }//end if login
                }//end if register
            }
        }
    }
}
?>
<?php
define("DB_HOST","localhost");
define("DB_NAME","tourism");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (mysqli_connect_errno()) {
        echo "Database Connection Fail!";
    }else{
        return $db;
    }
    
}

function insertUser($name,$email,$password){
    $password = encodePass($password);
    $curTime= getTimeNow();
    $db = dbConnect();
    $qry = "SELECT * FROM member WHERE email='$email'";
    $result = mysqli_query($db,$qry);
    if (mysqli_num_rows($result)>0) {
        return "Email is already in Use!";
    }else {
       $qry = "INSERT INTO member(Username,email,password,created_at,updated_at)
        VALUES
        ('$name','$email','$password','$curTime','$curTime')";
        $result = mysqli_query($db,$qry);
        if ($result == 1) {
           return"Register Success";
        }else{
            return "Register Fail";
        }
    }
    
}
function encodePass($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);

    return $pass;

}
function getTimeNow(){
    return date("Y-m-d H:m:s", time());
}
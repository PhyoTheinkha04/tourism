<?php
require_once "./database.php";
function registerUser($username){
    if (usernameCheck($username) ) {
       //return insertUser($username);
    }else{
       return "please submit username without space";
    }
}
function registerEmail($email){
    if ( emailCheck($email)) {
      // return insertUser($email);
    }else{
       return "nkdckfpfe";
    }
}
function registerPassword($password){
    if ( passwordCheck($password)) {
       //return insertUser($password);
    }else{
       return "pass must contain Special character and ... ";
    }
}
function usernameCheck($username){
    #Username char > 6
    #Username char a-Za-9_
    if (strlen($username) >=6) {
        $bol = preg_match('/^[\w]+$/',$username);
        return $bol;
    } else { 
        return "false";
    }
}


function emailCheck($email){
    if (strlen($email) >=15) {
        $bol = preg_match('/[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/', $email);
        return $bol;
    }else {
        return false;
    }
}

function passwordCheck($password){
   if (strlen($password) >=6) {
    $bol = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $password);
     return $bol;
   }else{
      return false;
   }

   
}

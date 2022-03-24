<?php

$submit = $_POST['submit'];

function login(){
    
    include "query.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $user , $pass;
    $check = mysqli_num_rows(query("SELECT * FROM customer where Username = '$user' and Password = '$pass'"));
    echo $check;
    if( $check == 1){
        session_start();
        $grabU = fetch("select * from customer where Username = '$user' and Password = '$pass'");
        
        $_SESSION['CustID'] = $grabU['CustID'];
        $_SESSION['user'] = $grabU['Username'];
        $_SESSION['Perm'] = $grabU['Perm'];
                
        header('location:../index.php');
    }else{
        echo "error";
    }
    
    
    
}


function register(){
    
    include "query.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    query("inset into customer (Username,Password,Perm) values ('$user','$pass','U')");
    login();
    
}

switch($submit){
    
case 1: login();
    
    break;

case 2: register();
    
    break;
}
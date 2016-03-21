<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$con = mysql_connect("localhost", "root", "");
include './connect.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
 //echo $username.'<br/>'.$password;
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


$sql= "SELECT username,password,category FROM users WHERE username = '$username' AND password = '$password'";

$result = mysql_query($sql);
$count = mysql_num_rows($result);
//echo $sql.'<br/>'.$count;
if($count==0){
    header("Location:./client_login.php?username=".$username."&password=".$password."");
}
 else if ($count==1) {
    while ($row = mysql_fetch_array($result)) {
    
    if($row['category']==='Admin'){
        header("Location:./admin.php");
    }
 else {
        header("Location:./index.php?message=Welcome ".$username."");
    }
}
}
//echo $count;
//if (mysql_fetch_array($result)) {
//    header("Location:./index.php?message=Welcome ".$username."");
//   
//} else {
//    mysql_error();
//}



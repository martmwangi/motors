<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$con = mysql_connect("localhost", "root", "");
include './connect.php';
$username = $_GET['username'];
$password = $_GET['password'];

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

//mysql_select_db("wema", $con);
$result = mysql_query("SELECT username,password FROM registration WHERE username = '$username' AND password = '$password'");
//if (mysql_fetch_array($result)) {
//    header("Location:./index.php?message=Welcome ".$username."");
//   
//} else {
//    mysql_error();
//}

while ($row = mysql_fetch_array($result)) {
    if($row['category']==='Admin'){
        header("Location:./admin.php");
    }
 else {
        header("Location:./index.php?message=Welcome ".$username."");
    }
}

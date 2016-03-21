<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './connect.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$target_path = "uploads/store/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    chmod($target_path, 0777);
    $file_name = basename( $_FILES['uploadedfile']['name']);
    //echo $file_name;
    $query = "INSERT INTO `store` (`name`,`price`,`description`,`image`,`seller`,`contact`) VALUES ('".$_POST['name']."','".$_POST['price']."','".$_POST['description']."','$file_name','".$_POST['seller']."','".$_POST['contact']."')";
    mysql_query($query);
    header('Location:store.php?message='.basename( $_FILES['uploadedfile']['name']).' has been uploaded.');
    //echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded.".'<a href="admin.php"> Administrator</a>'."";
} else{
    echo '<p style="color:red">There was an error uploading the sample file, please try again!</p>';
}
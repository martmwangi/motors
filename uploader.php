<?php


include './connect.php';
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    chmod($target_path, 0777);
    $file_name = basename( $_FILES['uploadedfile']['name']);
    //echo $file_name;
    $query = "INSERT INTO `services` (`name`,`price`,`description`,`image`) VALUES ('".$_POST['name']."','".$_POST['price']."','".$_POST['description']."','$file_name')";
    mysql_query($query);
    header('Location:admin.php?message='.basename( $_FILES['uploadedfile']['name']).' has been uploaded.');
    //echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded.".'<a href="admin.php"> Administrator</a>'."";
} else{
    echo '<p style="color:red">There was an error uploading the sample file, please try again!</p>';
}
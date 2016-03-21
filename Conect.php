<?php
$mysql_hostname  =  "localhost" ;
$mysql_Fname   = "" ;
$mysql_Lname  = "" ;
$mysql_ID = "" ;
$mysql_DOB  = "" ;
$mysql_Tel  = "" ;
$mysql_Email = "" ;
$mysql_Model  = "" ;
$mysql_sum  = "" ;
$mysql_database  = "Kenyamotors" ;
$prefix = "";
$bd = mysql_connect($mysql_hostname , $mysql_Fname , $mysql_Lname , $mysql_ID , $mysql_DOB , $mysql_Tel , $mysql_Email , $mysql_Model , $mysql_sum);
mysql_select_db ($mysql_database , $bd) or die("Could not select data")
?>
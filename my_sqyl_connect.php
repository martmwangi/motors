<?php
$db_host="localhost";
$db_host="";
$db_Tel="";
$db_Email="";
$db_Message="";
$db_name="kmotors_database";

@msql_connect("$db_host","$db_host","$db_Tel","$db_Email") or die ("Could not connet to mysql");
@mysql_select_db("$db_name") or die ("No database");
echo"Bahati yako";












 ?>
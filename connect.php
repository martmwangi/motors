<?php
error_reporting(E_ERROR);
$con = mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
mysql_select_db("motors") or die(mysql_error());

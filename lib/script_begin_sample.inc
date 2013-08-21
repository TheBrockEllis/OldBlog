<?php
//connect to the database
$dbc = mysql_connect('address', 'user', 'password') or die(mysql_error());
$db = mysql_select_db('db_name', $dbc) or die(mysql_error());
?>


<?php 

// Connect to DB
$db = mysql_connect('localhost','root') or die('Error');

// Select DB
mysql_select_db('Library',$db) or die('Fail to select DB');

?>
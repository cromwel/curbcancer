<?php
//connect to server
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die( mysql_error());
}

//select a database

$db=mysql_select_db("emobilisdb");

if(!$db)
{
	die( mysql_error());
}


?>
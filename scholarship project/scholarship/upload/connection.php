<?php
	$server="localhost";
	$user="root";
	$pass="";
	$database="pp";
	$con=mysql_connect($server,$user,$pass);
	if(mysql_error())
	{
		die(mysql_error() .":".mysql_error());
	}
	$db=mysql_select_db($database,$con);
	if(mysql_error())
	{
		die(mysql_error() .":" .mysql_error());
	}
?>
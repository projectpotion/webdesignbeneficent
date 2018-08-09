<?php
error_reporting(~E_DEPRECATED & ~E_NOTICE);
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db(pp);
if(!$conn){
	die("unable to connect to MYSQL");
}
else if(!$db){
	die("unable to connect to database");
}
else{
	$sql = mysql_query("CREATE TABLE IF NOT EXISTS `reg_users`(
		`id` varchar(40) NOT NULL , 
		`firstname` varchar(40) NOT NULL,
		`lastname` varchar(40) NOT NULL,
		`email` varchar(40) NOT NULL ,
		`password` varchar(40) NOT NULL,
		`dob` date NOT NULL ,
		PRIMARY KEY(`id`) 
 ) AUTO_INCREMENT=1 ");
	$sql1 = mysql_query("CREATE TABLE IF NOT EXISTS `complaint`(
		`id` varchar(40) NOT NULL , 
		`to` varchar(40) NOT NULL ,
		`desc` varchar(255) NOT NULL,
		`comp_sub` date NOT NULL ,
		PRIMARY KEY(`id`) 
 ) AUTO_INCREMENT=1 ");
	if(!$sql){
		die("table does not exist" .mysql_error());
	}
	if(!sql1)
	{
		die("table complaint does not exist" .mysql_error());
	}
}

?>		
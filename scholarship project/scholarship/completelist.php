<!DOCTYPE html>
<html>
<head>
	<title>user portal</title>
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">

</head>
<body>
<h1 style = "font-family: 'Cutive Mono', monospace;">REGISTERED STUDENTS</h1>
</body>
</html>
<?php
include("dbconnect1.php");
session_start();
$idquery = mysql_query("SELECT id FROM reg_users");
$phquery = mysql_query("SELECT phno FROM reg_users");
$numrows = mysql_num_rows($idquery);
$idarray = array();
$phnumbers = array();
$i = 0;
echo "<h5 style='Arial,tahoma,sans-serif>".$_SESSION['id']."</h5>";
while($row = mysql_fetch_assoc($idquery)){
	$idarray[$i] = $row['id'];
	$i++;
}
$i = 0;
while ($row = mysql_fetch_assoc($phquery)) {
	$phnumbers[$i] = $row['phno'];
	$i++;
}
 echo "<table>";	
 for ($i1=0; $i1 < $numrows; $i1++){
 	if($idarray[$i1]=="admin"){
 		$i1++;} 
 	echo "<tr><td>".$idarray[$i1]."</td>";	
 	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 	echo "<td>". $phnumbers[$i1];
 	if($_SESSION['id'] != "admin")
 	echo "<br>";	
 	echo "<br>";	
 	echo "<button><a href = 'enteroyp.php' style = 'color: black;text-decoration:none;' >received otp</a></button> </td>";
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";
 	echo "</tr>";
 }
 echo "</table>";
 $idarray = implode("|" , $idarray);
 $phnumbers = implode("|",$phnumbers);
 $_SESSION['idarray'] = $idarray;
 $_SESSION['phnumbers'] = $phnumbers;
if(!display){
	echo "unable to display";
}
echo "<h1>_________________________________________________________________________________________________</h1>";
if($_SESSION['id'] == "admin"){
	echo "<button><a href = 'example.php'  style = 'color: black;text-decoration:none'>CLICK TO START SENDING MESSAGES</a></button>";
}
else
echo "<button><a href = 'upload/multiple.php'  style = 'color: black;text-decoration:none'>upload photos</button>";

?>



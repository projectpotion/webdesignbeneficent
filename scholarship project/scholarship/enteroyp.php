<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
<div style="position: absolute;width: 600px;height: 550px;left: 50%;top: 50%;margin-left: -300px;margin-top: -260px">
<h1>
<p style="font-size: 30px;font-family: monospace;">PLEASE ENTER YOUR OTP HERE:</p>
<input type="text" name="otp1" style="width:100%;padding: 12px 20px ;border-sizing: border-box;border-radius: 4px;" autofocus="true"><br><br>
<input type="submit" name="otp" style="position: absolute;">
</h1>
</div>
</form>
<?php
include("dbconnect1.php");
session_start();
$id=$_SESSION['id'];
if(isset($_POST['otp'])){
$otp = $_POST['otp1'];
$ins = "INSERT INTO `otp`(id,otp) VALUES ('$id','$otp')";
$ins1 = mysql_query($ins);
if(!ins1){
	echo "Not insetred";
}
}
else
echo "Not Inserted into Database";
?>

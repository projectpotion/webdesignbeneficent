<?php
include ("dbconnect1.php");	
session_start();
if(isset($_POST['form'])){
	switch ($_POST['form']) {
		case 'A':
			regform();
			break;	
		
		case 'B':
			logform();
			break;
		
		default:
		echo "hai";			
		break;
	}
}	
else{

}

function regform(){
	if(isset($_POST['subreg'])) {
	$_session['error'] = '' ;
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$dob=$_POST['dob'];
	$id = $_POST['id'];
	$phno = $_POST['phno'];
	$pwd = trim(htmlspecialchars($_POST['pwd']));
	$cpwd = trim(htmlspecialchars($_POST['cpwd']));
	$dob = $_POST['dob'];
	if ($pwd == $cpwd && strlen($pwd) > 9 ) {
		$pwd = md5($pwd);
		$cpwd = $pwd;
	$ins = "INSERT INTO `reg_users`(id,firstname,lastname,email,password,dob,phno) VALUES ('$id','$firstname','$lastname','$email','$pwd','$dob','$phno')";
	$ins1 = mysql_query($ins);
	$_SESSION['id']=$id;
    echo $_SESSION['id'];
		if(!$ins1){
		$_session['error'] = "values not inserted into the table";
	}
	}
	else{$_session['error'] = "your password must be atleast 9 characters ";	}
	echo $_session['error'];
}
}
function logform(){
		if(isset($_POST['login'])){
	$id1 = trim(htmlspecialchars($_POST['lid']));
	$password = trim(htmlspecialchars(md5($_POST['lpwd'])));
	$ret = "SELECT * FROM reg_users WHERE id = '$id1'";
	$ret1 = mysql_query($ret);
	$count = mysql_num_rows($ret1);
	if($count == 1){
	$row = mysql_fetch_array($ret1);
	$_SESSION['id'] = $row['id'];
	$_SESSION['firstname'] = $row['firstname'];
	$_SESSION['lastname'] = $row['lastname'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['dob'] = $row['dob'];
	if($password == $row['password']){
			$_SESSION['id']=$id1;
	echo $_SESSION['id'];
		header("location:completelist.php");
}	
		}
   	

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>L AND R</title>
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
</head>
<body>
<fieldset style = "	width:30% ; border:4px solid black;float: left;">
<legend><h2 style="font-family: 'Rye', cursive;	">REGISTER HERE</legend></h2></legend>
<form name="form1" action =  "<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>"	method = "post"  >
<input type = "hidden" name = "form" value = "A">
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >firstname</label><input type="text" name="fname" autofocus="true" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >lastname</label><input type="text" name="lname" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >email</label><input type="email" name="email" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >id</label><input type="text" name="id" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >phone number</label><input type="number" name="phno"><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >date of birth</label><input type="date" name="dob" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >password</label><input type="password" name="pwd" required><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;	" >confirm password</label><input type="password" name="cpwd" required><br><br>
<input type="submit" name="subreg" value = "register" style="width: 100%;font-family: 'Pacifico', cursive;">
</form>
</fieldset ><br><br>
<fieldset style ="width:30%;border:4px solid black;float: right;">
<legend><h2 style="font-family: 'Rye', cursive;	">LOGIN HERE</h2></legend>
<form name = "form2" method = "post" action="list.html">
<input type = "hidden" name = "form" value = "B">
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >id</label><input type="text" name="lid" value= "YOUR ID"><br><br>
<label style="display: inline-block;width: 140px;text-align: right;padding: 1px 10px 1px 0px;font-family: 'Pacifico', cursive;" >password</label><input type="password" name="lpwd" placeholder="password"><br><br>
<input type="submit" name="login" value = "login" style="width: 100%;font-family: 'Pacifico', cursive;">
</form>
</fieldset>
</body>
</html>
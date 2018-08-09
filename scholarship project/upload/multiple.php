<html>
<head>
<title>Uploading Images</title>
</head>

<body>
<?php include"connection.php";?>
<form action="multiple.php" method="post" enctype="multipart/form-data">
select Image1:<input type="file" name="img1"><br></br>
select Image2:<input type="file" name="img2"><br></br>
select Image3:<input type="file" name="img3"><br></br>
select Image4:<input type="file" name="img4"><br></br>
select Image5:<input type="file" name="img5"><br></br>
select Image6:<input type="file" name="img6"><br></br>
select Image7:<input type="file" name="img7"><br></br>
select Image8:<input type="file" name="img8"><br></br>
select Image9:<input type="file" name="img9"><br></br>
select Image10:<input type="file" name="img10"><br></br>


<input type="submit" name="upload" value="Upload Now">
</form>

<?php
session_start();
echo $_SESSION['id'];
if(isset($_POST['upload'])){
	$img1_name=$_FILES['img1']['name'];
	$img1_type=$_FILES['img1']['type'];
	$img1_size=$_FILES['img1']['size'];
	$img1_tmp_name=$_FILES['img1']['tmp_name'];
	
	if($img1_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img1_tmp_name,"photos/$img1_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img1_name'>";

if(isset($_POST['upload'])){
	$img2_name=$_FILES['img2']['name'];
	$img2_type=$_FILES['img2']['type'];
	$img2_size=$_FILES['img2']['size'];
	$img2_tmp_name=$_FILES['img2']['tmp_name'];
	
	if($img2_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img2_tmp_name,"photos/$img2_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img2_name'>";


if(isset($_POST['upload'])){
	$img3_name=$_FILES['img3']['name'];
	$img3_type=$_FILES['img3']['type'];
	$img3_size=$_FILES['img3']['size'];
	$img3_tmp_name=$_FILES['img3']['tmp_name'];
	
	if($img3_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img3_tmp_name,"photos/$img3_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img3_name'>";

	
if(isset($_POST['upload'])){
	$img4_name=$_FILES['img4']['name'];
	$img4_type=$_FILES['img4']['type'];
	$img4_size=$_FILES['img4']['size'];
	$img4_tmp_name=$_FILES['img4']['tmp_name'];
	
	if($img4_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img4_tmp_name,"photos/$img4_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img4_name'>";

if(isset($_POST['upload'])){
	$img5_name=$_FILES['img5']['name'];
	$img5_type=$_FILES['img5']['type'];
	$img5_size=$_FILES['img5']['size'];
	$img5_tmp_name=$_FILES['img5']['tmp_name'];
	
	if($img5_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img5_tmp_name,"photos/$img5_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img5_name'>";
	
if(isset($_POST['upload'])){
	$img6_name=$_FILES['img6']['name'];
	$img6_type=$_FILES['img6']['type'];
	$img6_size=$_FILES['img6']['size'];
	$img6_tmp_name=$_FILES['img6']['tmp_name'];
	
	if($img6_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img6_tmp_name,"photos/$img6_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img6_name'>";

if(isset($_POST['upload'])){
	$img7_name=$_FILES['img7']['name'];
	$img7_type=$_FILES['img7']['type'];
	$img7_size=$_FILES['img7']['size'];
	$img7_tmp_name=$_FILES['img7']['tmp_name'];
	
	if($img7_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img7_tmp_name,"photos/$img7_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img7_name'>";

if(isset($_POST['upload'])){
	$img8_name=$_FILES['img8']['name'];
	$img8_type=$_FILES['img8']['type'];
	$img8_size=$_FILES['img8']['size'];
	$img8_tmp_name=$_FILES['img8']['tmp_name'];
	
	if($img8_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img8_tmp_name,"photos/$img8_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img8_name'>";

if(isset($_POST['upload'])){
	$img9_name=$_FILES['img9']['name'];
	$img9_type=$_FILES['img9']['type'];
	$img9_size=$_FILES['img9']['size'];
	$img9_tmp_name=$_FILES['img9']['tmp_name'];
	
	if($img9_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img9_tmp_name,"photos/$img9_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img9_name'>";

if(isset($_POST['upload'])){
	$img10_name=$_FILES['img10']['name'];
	$img10_type=$_FILES['img10']['type'];
	$img10_size=$_FILES['img10']['size'];
	$img10_tmp_name=$_FILES['img10']['tmp_name'];
	
	if($img10_name==''){
		echo"<script>alert('please select an image')</script>";
	}
	else
		move_uploaded_file($img10_tmp_name,"photos/$img10_name");
	echo"Image uploaded successfully<br> Here is the Image";
	echo"<img src='photos/$img10_name'>";


mysql_query("insert into multipleu (id,doc1,doc2,doc3,doc4,doc5,doc6,doc7,doc8,doc9,doc10) value('$img1_name','$img2_name','$img3_name','$img4_name','$img5_name','$img6_name','$img7_name','$img8_name','$img9_name','$img10_name')") or die(mysql_error());
}}}}}}}}}}
?>
</body>
</html>
	

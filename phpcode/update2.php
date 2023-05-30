<?php
 
$con=mysqli_connect('localhost','root','','p11');
$id=$_GET['id'];
$image=$_GET['image'];
$video=$_GET['video'];
$sql="select * FROM student WHERE id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['btn'])){
	$uid=$_POST['id'];
	$uname=$_POST['name'];
	$uage=$_POST['age'];
	$ugender=$_POST['gender'];
	$ucountry=$_POST['country'];
	if($_FILES['photo']['name']!=""){

		$uphoto=$_FILES['photo']['name'];
		$temp=$_FILES['photo']['tmp_name']; 
		move_uploaded_file($temp, "image/$uphoto");
		
		 
		
	}
	else
	{
		$uphoto=$image;
		
	}

	if ($_FILES['video']['name']!="")
	{
		$uvideo=$_FILES['video']['name'];
		$vtemp=$_FILES['video']['tmp_name'];
		move_uploaded_file($vtemp, "video/$uvideo");
	}
	else
	{
		$uvideo=$video;
	}
	$sqlupdate="Update student SET id='$uid', name='$uname', age=$uage, gender='$ugender', country='$ucountry', video='$uvideo', image='$uphoto' WHERE id='$uid'";
	$res=mysqli_query($con,$sqlupdate);
	
	if(mysqli_query($con, $sqlupdate)){
        echo 'insert success';
    } 	
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	<div>
	<form  action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>ID</label></td><br>
				<td><input type="text" name="id" value="<?php echo $row["id"] ?>" required></td><br><br>
			</tr>
			<tr>
				<td><label>Name</label></td><br>
				<td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td><br><br>
			</tr>
			<tr>
				<td><label>Age</label></td><br>
				<td><input type="number" name="age" value="<?php echo $row["age"] ?>" required></td><br><br>
			</tr>
			<tr>
				<td><label>Gender</label></td><br>
				<td><input type="text" name="gender" value="<?php echo $row["gender"] ?>" required></td><br><br>
			</tr>
			<tr>
				<td><label>Country</label></td><br>
				<td><input type="text" name="country" value="<?php echo $row["country"] ?>" required></td><br><br>
			</tr>

			<tr>
				<td><label>Image</label></td><br>
				<td><input type="file" name="photo" value="<?php $row["image"] ?>"> 
				<img src="image/<?php echo $row["image"]; ?>" style="width:50px;height:40px;"> 
				
			</td><br><br>
			</tr>
			
			<tr>
				<td><label>Video</label></td><br>
				<td><input type="file" name="video" > 
				<video controls src="video/<?php echo $row["video"]; ?>" style="width:400px;height:60px;"> 
			</td><br><br>
			</tr>

		</table>
		<br><br>
		<input type="submit" name="btn" value="Update Info">
	</form>
	</div>
	</body>
</html>
		
		
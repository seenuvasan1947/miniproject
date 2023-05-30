<?php
 
$con=mysqli_connect('localhost','root','','p11');

$sql="select * FROM student";
$res=mysqli_query($con,$sql);
?>
<html>
<body>
<table border="1">
<tr>
	<td>Student</td>
	<td>Name</td>
	<td>Age</td>
	<td>Gender</td>
	<td>Country</td>
	<td>Image</td>
	<td>Video</td>
	<td>Action</td>
</tr>
<?php 
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>
	<td> <?php echo $row["id"]; ?> </td>
	<td> <?php echo $row["name"]; ?> </td>
	<td> <?php echo $row["age"];?> </td>
	<td> <?php echo $row["gender"];?> </td>
	<td> <?php echo $row["country"];?> </td>
	<td><img src="image/<?php echo $row["image"]; ?>" style="width:50px;height:40px;"> </td>   <!-- call the image from image
                                                                                           folder using the name of image which is store
																						   in database-->
	<td><video controls src="video/<?php echo $row["video"]; ?>" style="width:50px;height:40px;"> </td>
	<td><a href="deletesave.php?id=<?php echo $row["id"]?>">DELETE</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
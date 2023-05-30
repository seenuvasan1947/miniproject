<?php
$con= mysqli_connect('localhost','root','','p11');
$sql= "select * FROM student";
$res=mysqli_query($con,$sql);
?>

<html>
<body>
<h2>Display Database Info</h2>
<br><br>
<table border="1">
<tr>
    <th>StudentID</th>
	<th>Name</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Country</th>
    <th>Image</th>
    <th>Video</th>
</tr>

<?php
while($row=mysqli_fetch_array($res))
{
?>
<tr>


   <td><?php echo $row["id"]; ?></td>
   <td><?php echo $row["name"];?></td>
   <td><?php echo $row["age"];?></td>
   <td> <?php echo $row["gender"] ?> </td>
   <td> <?php echo $row["country"] ?> </td>
   <td><img src="image/<?php echo $row["image"]; ?>" style="width:50px;height:40px;"> </td> <!-- call the image from image
                                                                                           folder using the name of image which is store
                                                                                           in database-->
   <td><video controls src="video/<?php echo $row["video"]; ?>" style="width:400px;height:60px;"> </td>
</tr>	
	
<?php
        
}

?>

</table>
</body>
</html>
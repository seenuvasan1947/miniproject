<?php
 
$con=mysqli_connect('localhost','root','','p11');
$sql="select * FROM student";
$res=mysqli_query($con,$sql);
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div>
<table class="table table-border">
<thead>
<tr>
	<th>StudentID</th>
	<th>Name</td>
	<th>Age</th>
	<th>Gender</th>
	<th>Country</th>
	<th>Image</th>
	<th>video</th>
	<th>Action</th>
</tr>
</thead>

<tbody>
<?php while($row=mysqli_fetch_assoc($res)){?>
<tr>
	<td><?php echo $row["id"] ?></td>
	<td><?php echo $row["name"] ?></td>
	<td><?php echo $row["age"] ?></td>
	<td><?php echo $row["gender"] ?></td>
	<td><?php echo $row["country"] ?></td>
	<td><img src="image/<?php echo $row["image"]; ?>" style="width:50px;height:40px;"> 
	<td><video controls src="video/<?php echo $row["video"]; ?>" style="width:400px;height:60px;"> 
	
	<td><a class="glyphicon glyphicon-edit" href="update2.php?id=<?php echo $row["id"] ?> & image=<?php  echo $row["image"]?> & video=<?php  echo $row["video"]?>">update</a></td>
</tr>
<?php } ?>
	</tbody>
</table>
</div>
	</body>
</html>
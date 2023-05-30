<?php
	if(isset($_POST['search'])){
	$valueToSearch =$_POST['valueToSearch'];
	$query="SELECT * FROM `student` where id = ".$valueToSearch." "; // query for search the information by id.
	$search_result=filterTable($query); // call filterTable function to connect the database.
	}
	else{
		$query="SELECT * FROM student";
		$search_result=filterTable($query);
	}
	function filterTable($query){
		$con=mysqli_connect('localhost','root','','p11');
	
      if($res= mysqli_query($con, $query)){
        
        return $res;
      } 
	}
		
?>

<html>
<body>
<h2>Display Database Info</h2>
<form action="search.php" method="POST">
<input type="text" name="valueToSearch" placeholder="value To Search"><br><br>
<button type="submit" name="search">Search</button>
<br><br>
<table border="1">
<tr>
	<th>StudentID</th>
	<th>Name</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Country</th>
	<th>Image</th>
	
</tr>
<?php 
while($row=mysqli_fetch_array($search_result)) : ?>
<tr>
	<td> <?php echo $row["id"] ?> </td>
	<td> <?php echo $row["name"] ?> </td>
	<td> <?php echo $row["age"] ?> </td>
	<td> <?php echo $row["gender"] ?> </td>
	<td> <?php echo $row["country"] ?> </td>
	<td><img src="image/<?php echo $row["image"]; ?>" style="width:50px;height:40px;"> </td>   <!-- call the image from image
                                                                                           folder using the name of image which is store
                                                                                           in database-->
	</tr>
<?php endwhile;?>

</table>
</form>
</body>
</html>
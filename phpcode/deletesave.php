<?php
 
$con=mysqli_connect('localhost','root','','p11');
$did=$_GET['id'];
$sql="DELETE FROM student WHERE id='$did'";
mysqli_query($con,$sql);

?>
<?php
$con= mysqli_connect('localhost','root','','p11');


if(isset($_POST['sb'])){  // check any field have null value or not.

   
    $id=$_POST['sid'];     // receive the data from index.html file by their names.
    $name=$_POST['sn'];
    $age=$_POST['sa'];
    $country=$_POST['country'];
    $gender=$_POST['gender'];

    $image=$_FILES['fileToUpload']['name']; // insert the value of fileToUpload in the deafult image name variable
    $temp=$_FILES['fileToUpload']['tmp_name'];  // insert the value of fileToUpload in the deafult image tmp_name variable
    move_uploaded_file($temp, "image/$image");  // image copy in the htdocs->project-> image folder.

    $video=$_FILES['fileTovideo']['name']; 
    $vtemp=$_FILES['fileTovideo']['tmp_name'];  
    move_uploaded_file($vtemp, "video/$video"); 
   

    $sql="insert into student(id,name,age,country, gender, image, video)values('$id','$name',$age,'$country', '$gender', '$image','$video')";

    if(mysqli_query($con, $sql)){
        echo 'submission successful';
    } 
} 


?>
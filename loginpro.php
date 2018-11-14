<?php
	session_start();
	$gname = $_POST['name'];
	$gemail=$_POST['email'];
	$gid=$_POST['id'];
	$gimage=$_POST['imageurl'];
    $db=mysqli_connect('localhost','Nitin','','try');
    $query="SELECT * FROM users WHERE name='$gname' and email='$gemail'";
      $result=mysqli_query($db,$query);
      if(mysqli_num_rows($result)>0){
      	echo "You are already a user";
      }
      else{
	$sql = "INSERT INTO users(name,email,gid,imageurl) VALUES('$gname','$gemail','$gid','$gimage')";
	mysqli_query($db,$sql);
	 }
	 $_SESSION['userid']=5;
	 $query="SELECT userid from users where email='$gemail'";
	 $result=mysqli_query($db,$query);
	 $row = mysqli_fetch_assoc($result);
     $_SESSION['userid']=$row['userid'];
?>
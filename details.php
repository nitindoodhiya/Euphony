<?php
session_start();
echo $_SESSION['userid'];
$userid=$_SESSION['userid'];
$username = $_POST['username'];
	$password=$_POST['password'];
    $pass=md5($password);
    	$db=mysqli_connect('localhost','Nitin','','try');
    $query="SELECT userid FROM users WHERE username='$username' AND password='$pass' ";
    $result=mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0){
      	echo "You are already a user";
      }
      else{
	    $sql = "UPDATE users set username='$username' where userid='$userid'";
    mysqli_query($db,$sql);
    $sql = "UPDATE users set pass='$pass' where userid='$userid'";
    mysqli_query($db,$sql);
      }
       header('Location:second page.php');
    ?>
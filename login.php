<?php
if(isset($_POST['submit'])){
	$username=$_POST['uid'];
    $password=$_POST['pwd'];
    echo $username;
    $pass=md5($password);
    echo $pass;
	$db=mysqli_connect('localhost','Nitin','','try');
	$query="SELECT * FROM users WHERE username='$username' AND pass='$pass'";
    $result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)==1){
		$query="SELECT userid from users where username='$username' AND pass='$pass'";
	$result=mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['userid']=$row['userid'];
		 header('Location:second page.php');
    }
	else{
		header('Location:header.php');
	}
	
}
?>

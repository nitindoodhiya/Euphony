<?php
session_start();
$gname = $_POST['name'];
$gemail=$_POST['email'];
$db=mysqli_connect('localhost','Nitin','','try');
$query="SELECT * FROM users WHERE name='$gname' and email='$gemail'";
$result=mysqli_query($db,$query);
if(mysqli_num_rows($result)>0){
    $query="SELECT userid from users where email='$gemail'";
	 $result=mysqli_query($db,$query);
	 $row = mysqli_fetch_assoc($result);
     $_SESSION['userid']=$row['userid'];
     header('Location:second page.php');
}
else{
    echo "You should signup";
    header('Location:fb-call-thru.php');  
}
?>
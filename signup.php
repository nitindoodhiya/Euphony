<?php 
if(isset($_POST['submit'])){
	$firstname=$_POST['first'];
	$lastname=$_POST['last'];
	$email=$_POST['email'];
    $name=$firstname.' '.$lastname;
    echo $name;
    echo $email;
    $db=mysqli_connect('localhost','Nitin','','try');
    $query="SELECT userid from users where email='$email'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        echo "Already a user";
    }
    else{
	$query="INSERT into users(name,email) VALUES('$name','$email')";
    mysqli_query($db,$query);
    }
    $query="SELECT userid from users where email='$email'";
    $result=mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['userid']=$row['userid'];
     header('Location:redirectionFromGoogle.php');
}
?>
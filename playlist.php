<?php 
if(isset($_POST['submit'])){
	$playlist="";
	$playlist=$_POST['Name'];
	session_start();
	$userid=$_SESSION['userid'];
    $db=mysqli_connect('localhost','Nitin','','try');
    $query="INSERT into playlist(pname,userid) VALUES('$playlist','$userid')";
     $result=mysqli_query($db,$query);
}
//     if(isset($_POST['addsong'])){
//     	$songname="tp";
//     	$songname=$_POST['songname'];
//     	$userid=31;
//     	$playlist="first";
//     	$userid=$_POST['userid'];
//     	$playlist=$_POST['$playlist'];
//     	addsong($songname,$userid,$playlist);
//         function addsong($songname,$userid,$playlist){
// 	    $db=mysqli_connect('localhost','root','','try');
// 	    $query="SELECT pid FROM playlist WHERE pname='$playlist'";
// 	    $result=mysqli_query($db,$query);
// 	    $row = mysqli_fetch_assoc($result);
// 	    $pid=$row['pid'];
// 	    $query="UPDATE songs set pid='$pid' where userid='$userid' and songname='$songname'";
// 	    $result=mysqli_query($db,$query);
//     }
// }
?>

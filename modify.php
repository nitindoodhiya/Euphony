<?php
if(isset($_POST['createalbum'])){
	$albumname="";
	$trackname=$_POST['albumname'];
	session_start();
	$userid=$_SESSION['userid'];
	$dir='uploads/';
	$db=mysqli_connect('localhost','root','','try');
	$query="INSERT into album(albumname,userid) values('$albumname','$userid')";
	mysqli_query($db,$query);
}
if(isset($_POST['changealbum'])){
	$albumname="";
	$albumname=$_POST['albumname'];
	$newname="";
	$newname=$_POST['newname'];
	$oalbumid="";
	$albumid="";
	$db=mysqli_connect('localhost','root','','try');
	$query="SELECT albumid from album where albumname='$albumname'";
	$result=mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    $oalbumid=$row['albumid'];
	$query="SELECT albumid from album where albumname='$newname'";
	$result=mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    $albumid=$row['albumid'];
    $query="UPDATE songs set albumid='albumid' where albumid='$oalbumid'";
}
?>
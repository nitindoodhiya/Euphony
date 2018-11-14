<?php
if(isset($_POST['submit'])){
	$trackname="";
	$trackname=$_POST['Name'];
	$artist="";
	$artist=$_POST['artist'];
	$albumname="";
	$albumname=$_POST['album'];
	$tag="";
	$tag=$_POST['tags'];
	session_start();
	$userid=$_SESSION['userid'];
	$dir='uploads/';
	$audio_path=$dir.basename($_FILES['audioFile']['name']);
	if(move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)){
		saveSong($audio_path,$trackname,$artist,$albumname,$tag,$userid);
	}
	header('Location:SongBackTest.php');
}
else{
	echo "button is not pressed";
}
function saveSong($filename,$trackname,$artist,$albumname,$tag,$userid){
	 $db=mysqli_connect('localhost','root','','try');
	 if(!$db){
	 	die("Server not connected");
	 }
	 $query="SELECT albumid FROM album WHERE albumname='$albumname' AND userid='$userid'";
     $result=mysqli_query($db,$query);
     $row = mysqli_fetch_assoc($result);
     $albumid=$row['albumid'];
	 $sql="INSERT INTO songs(songname,albumid,song,tag,artist,userid) VALUES('$trackname','$albumid','$filename','$tag','$artist','$userid')";
	 mysqli_query($db,$sql);
}
?>
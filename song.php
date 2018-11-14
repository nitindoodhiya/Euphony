<?php
if(isset($_POST['Songs'])){
	$songname=$_POST['name'];
    $albumid="";
    session_start();
    echo $_SESSION['userid'];
	$userid=$_SESSION['userid'];
	$db=mysqli_connect('localhost','Nitin','','try');
	$query="SELECT * from songs where songname='$songname'";
	$result=mysqli_query($db,$query);
	$row = mysqli_fetch_assoc($result);
    $albumid=$row['albumid'];
    $song=$row['song'];
    echo "search song";
    echo $albumid;
    echo "\n";
    echo $song;
}
?>
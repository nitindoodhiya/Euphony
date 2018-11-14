<?php
if (isset($_POST['submit'])){
    $dbServername='localhost';
    $dbUsername='Nitin';
    $dbPassword='';
    $dbName='euphony';
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$id="";
$email="";
$firstname="";
$lastname="";
$name="";
$id=$userData['id'];
$email=$userData['email'];
$firstname=$userData['first_name'];
$lastname=$userData['last_name'];
$name = $firstname." ".$lastname;
$db=mysqli_connect('localhost','Nitin','','euphony');
 $query="SELECT * FROM users WHERE Email='$email'";
      $result=mysqli_query($db,$query);
      if(mysqli_num_rows($result)>0){
      }
      else{
  $sql = "INSERT INTO users(name,id,email) VALUES('$name','$id','$email')";
  mysqli_query($db,$sql);
   }
    include './SongBackTest.html'; 

?>
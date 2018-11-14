<?php
require './config.php'; 
  
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
 
if(!$accessToken) {
  header('Location: SongBackTest.html');
  exit();
}
 
// Logged in
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();
if (!$accessToken->isLongLived())
  $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

$response = $fb->get( "/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
$userData = $response->getGraphNode()->asArray();
session_start();
echo $_SESSION['userid'];
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
 $query="SELECT * FROM users WHERE email='$email'";
      $result=mysqli_query($db,$query);
      if(mysqli_num_rows($result)>0){
      }
      else{
  $sql = "INSERT INTO users(name,id,email) VALUES('$name','$id','$email')";
  mysqli_query($db,$sql);
  $sql="SELECT userid from users WHERE name='$name' AND id='$id' AND email='$email'";
  $result=mysqli_query($db,$sql);
  $row=mysql_fetch_assoc($result);
  $_SESSION['userid']=$row['userid'];
  header('location:redirectionFromGoogle.php'); 
  }
    include './SongBackTest.html'; 
    
?>

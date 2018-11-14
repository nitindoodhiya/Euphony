<?php
session_start();

require './Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '2118950758369424',	
  'app_secret' => 'b80cc467f0cf9795f2ef69f3db75fdc5',
  'default_graph_version' => 'v3.1',
]);
 
$helper = $fb->getRedirectLoginHelper();

?>


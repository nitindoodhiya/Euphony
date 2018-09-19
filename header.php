<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel ="stylesheet" type ="text/css" href="style.css">
       <link rel ="shortcut icon" type="image/jpg" href="music.jpg"> 
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">        
</head>

<body >
 <div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="box-shadow: 0px 2px 5px 0px rgba(84,84,84,1);">
    <div class="container-fluid">
        <div class="navbar-header ">
            <button style="border-style:none;background-color:transparent" type="button" class="navbar-toggle animated pulse collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
					</button>
                <a class="navbar-brand"  href="#"><img src="img/logo1.png" class="img-responsive" style="width: 100px" >
                </a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 0.996094px;">
					<ul class="nav navbar-nav navbar-left ">
                    <li><a href="Albums.html"  style="text-align:center;font-size:1.25pc;">Albums</a></li>    
                    <li><a href="Artist.html"  style="text-align:center;font-size:1.25pc;">Artists </a></li>
						<li><a href="Playlist.html"  style="text-align:center;font-size:1.25pc;">My Music</a></li>
						<li><a href="Friend.html" style="text-align:center;font-size:1.25pc;">Peek</a>
						</li></ul>
					
				</div>
      </div>
</nav>
   </div>
       <div id="home">
<div style="padding-top: 40px;">
<h1 class="w3-container w3-left w3-animate-left" style="color: white;font: 1em sans-serif;font-size: 3pc;">Listen..</h1>
<h1 class="w3-container w3-left w3-animate-left" style="color: white;font: 1em sans-serif;font-size: 3pc;">Enjoy..</h1>
<h1 class="w3-container w3-left w3-animate-left" style="color: white;font: 1em sans-serif;font-size: 3pc;">Share..</h1>

</div> 

       <div style="padding-top: 5pc">
    <div class="row">

        <div class="column left" style="padding-top: 8pc">
            <a href="FBlogin.php">
            <img src="img/fblog.png" width="40%" style="margin-left:10pc">
            </a>
            <a href="gmaillogin.php">
            <img src="img/gmaillog.png" width="40%" style="margin-left:10pc;padding-top: 1pc">
            </a>
        </div>
        <div class="column right">
        <form  method="post" action="includes/login.inc.php">

                <div class="header">
                        <h2> Login </h2>
                </div>
		<div class="input-group">
			
                        <input type="text" name="uid" size="100%" autocomplete="off" placeholder="Email">
		</div>
		<div class="input-group">
			
                        <input type="password" name="pwd" size="100%" placeholder="Password">
		</div>
            <div style="padding-top: 5px;">
              
                    <button type="submit" name="submit" class="btn " style="font-family: sans-serif;width: 49%"  >Login</button>
               
                <a href="signup.php"> 
                   <button2 name="signup" class="btn center" style="font-family: sans-serif ; width: 49%">SignUp</button2>
                </a>
            </div>
            <div class="input-group" style="text-align: right">
                <p ><a href="forgot.php" style="color: lightblue">Forgot password?</a></p>               
            </div>
        </form>
        </div>
    </div>
    </div>
        
    <?php
    if(isset($_SESSION['u_id']))
    {
        echo "loged in";
    }
  ?>  
 </body>
</html>

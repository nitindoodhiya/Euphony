<!DOCTYPE html>
<html>
<head>
  <title>Participant's Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>
<style>
        .grid-container {
        
        display: grid;
        grid-template-columns: repeat(8,auto);
        padding: 10px;    
        
    }
        .grid-item {
    
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
    </style>
    
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="box-shadow: 0px 2px 5px 0px rgba(84,84,84,1);">
    <div class="container-fluid">
        <div class="navbar-header ">
            <button style="border-style:none;background-color:transparent" type="button" class="navbar-toggle animated pulse collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
					</button>
                <a class="navbar-brand"  href="#"><img src="img/logo1.png" class="img-responsive" style="width: 14pc" >
                </a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 0.996094px;">
					<ul class="nav navbar-nav navbar-right">
						<li class="current"><a href="#about" style="text-align:center">About</a></li>
						<li><a href="speakers.html"  style="text-align:center">Speakers</a></li>
						<li><a href="sponsors.html"  style="text-align:center">Sponsors</a></li>
						<li><a href="#blog" style="text-align:center">Blog</a>
						</li><li><a href="faq.html"  style="text-align:center">FAQ</a></li>
						<li><a href="team.html"  style="text-align:center">team</a></li>
						<li><a href="shirt.html"  style="text-align:center">T-Shirt</a></li>
						<li><a href="gallery.html" style="text-align:center" >Gallery</a></li>
						<li><a href="biz-quiz.html"  style="text-align:center" >Biz Quiz</a></li>
						<li><a href="http://register.ecellmnnit.in"  style="text-align:center">Register</a></li>
						<li><a href="#contact" style="text-align:center">Contact</a></li>
					</ul>
					
				</div>
      </div>
</nav>
<?php
session_start();
$userid=$_SESSION['userid'];
$db=mysqli_connect('localhost','Nitin','','try');
$query="SELECT userid,username,email,name from users WHERE userid='$userid'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$username= $row['username'];
$name= $row['name'];
$email= $row['email'];
?>
<div id="home">
  <div class="container" style="padding-top: 10pc">
    <div class="row">
      <div class="col-md">
    <div >
  <h1 class="w3-container w3-center w3-animate-left"style="color: white;font: 1em sans-serif;font-size: 3pc;">WELCOME</h1>
  <h1 class="w3-container w3-center w3-animate-right"style="color: white;font: 1em sans-serif;font-size: 3pc">Nitin</h1>
  </div>
  <div>
  <img src="img/pic.jpg" class="img-responsive pic">
  </div>
  </div>
  </div>
	
	</div>
  
<div id="inf">
<div class="container detailbox menu" style="margin-left: auto;margin-right: auto;width: 30pc">

    <table class="table " style="color: white; background: url(img/bg1.png) no-repeat center fixed;">
				    <thead>
				      <tr>
				        <th ><h4 style="color: white">Your profile</h4></th>
				        
				      </tr>
				    </thead>
				    <tbody> 
							<tr>
				        <th>Name</th>
				        <td><?php echo $username?></td>
				        
                      </tr>
                      <tr>
                        <th>UserId</th>
                        <td><?php echo $userid?></td>
                        
                        </tr>
                          <tr>
                            <th>EmailId</th>
                            <td><?php echo $email?></td>
                            
                            </tr>
            
				      </tbody>

				      
                 </table>
                 
<div class="grid-container">
        <div class="grid-item" style="padding:2pc;background-color:white">
              <a href="">
              <img src="img/icon.png" style="width:3pc;height: 3pc;">
              <p>Albums</p>
              </a>
              </div>
              <div class="grid-item" style="padding:2pc ;background-color:white">
              <a href="">
              <img src="img/icon.png" style="width:3pc;height: 3pc;">
              <p>Playlists</p>
              </a>
              </div>
              <div class="grid-item" style="padding:2pc ;background-color:white">
              <a href="">
              <img src="img/icon.png" style="width:3pc;height: 3pc;">
              <p>AllSongs</p>
              </a>
              </div>
        
              </div>

</div>


</div>
</div>
</div>


</body>
</html>
<?php
session_start();
echo $_SESSION['userid'];
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
       <link rel ="stylesheet" type ="text/css" href="styleAddMusic.css">
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
                <a class="navbar-brand"  href="#"><img src="img/icon.png" class="img-responsive" style="width: 4pc" >
                </a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 0.996094px;">
					<ul class="nav navbar-nav navbar-right">
						<li class="current"><a href="#about" style="text-align:center">Home</a></li>
						<li><a href=".html"  style="text-align:center">Albums</a></li>
						<li><a href="#"  style="text-align:center">Artists</a></li>
						<li><a href=""  style="text-align:center" >Playlists</a></li>
						<li><a href="" style="text-align:center">Nick_Nitin</a></li>
					</ul>
					
				</div>
      </div>
</nav>
   </div>
       <div id="home">
        <div style="padding:5pc;padding-top: 4pc">
	<form  method="post" action="upload.php" enctype="multipart/form-data">

                <div class="header">
                        <h2> Enter Details </h2>
                </div>
		<div class="input-group">
			
                        <input type="text" name="Name" size="100" autocomplete="off" placeholder="Track Name">
		</div>
		<div class="input-group">
			
                        <input type="text" name="artist" size="100" placeholder="Artists">
                </div>
                <div class="input-group">
			
                        <input type="text" name="album" size="100" placeholder="Album">
                </div>
                <div class="input-group">
			                  <input type="text" name="tags" size="100" placeholder="Tags">
		            </div>
                <div class="input-group">
                        <input type="file" name="audioFile" style="width:100%;" >
                </div>
                        <button type="submit" name="submit" value="submit" class="btn " style="font-family: sans-serif;width: 100%"  >Add Song</button>               
        </form>
        </div>
    </div>    
 </body>
</html>
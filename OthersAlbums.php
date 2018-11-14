<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="//code.jquery.com/jquery-3.3.1.min.js">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel ="stylesheet" type ="text/css" href="style.css">
       <link rel ="shortcut icon" type="image/jpg" href="music.jpg"> 
        
</head>

<style>
  
@media (max-width: 100pc) {
     .grid-container {   
        flex-direction: column;
    }
}
  @media screen and (max-width: 100pc){
    .grid-container {
    display: grid;
    grid-template-columns: repeat(8,auto);
    padding: 10px;    
    
}
    .grid-item {
      background-color:white;
        border: 1px solid rgba(0, 0, 0, 0.8);      
        font-size: 30px;
        text-align: center;
    }
  }
</style>
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
  <div id="home" style="background-color: cyan">
  
  <?php 
  $db=mysqli_connect('localhost','Nitin','','try');
  session_start();
  $userid=$_SESSION['userid'];
  $query="SELECT albumname from album WHERE userid='$userid'";
  $result=mysqli_query($db,$query);
  $arr=array();
    while($row=mysqli_fetch_array($result)){
        array_push($arr,$row['albumname']);
    }
  ?>
<script>
    
 var complex= new Array();
    <?php foreach($arr as $key => $val){ ?>
        complex.push('<?php echo $val; ?>');
    <?php } ?>
    console.log(complex);
  
    var len = '<?php echo count($arr);?>';


    var table = '<div class="grid-item">'+'<div class="grid-container"><a href="AddAlbum.php"' + '<img src="img/addalbum.png" style="width:5pc;height: 5pc;">' +'</a>'+ '</div>'+ '</div>';
    var rows = len;
    for(var r = 0 ; r < rows ; r++)
    {
        table += '<div class="grid-item"><a href="'   
        table += 'OthersAlbumSongs.php">';
        table += '<img src="img/icon.png" style="width:5pc;height: 5pc;">';
        table += '<p> '+ complex[r] +'</p>';
        table += '</a>';
        table +='</div>';
    } 
    document.write('<div class="grid-container">' + table + '</div>');
</script>



  </div>
</div>
 </body>
</html>

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
if(isset($_POST['Album'])){
	$albumname=$_POST['name'];
    session_start();
	$userid=$_SESSION['userid'];
	$db=mysqli_connect('localhost','Nitin','','try');
	$query="SELECT * from albums where albumname='$albumname'";
	$result=mysqli_query($db,$query);
	$row = mysqli_fetch_assoc($result);
    $albumid=$row['albumid'];
    $query="SELECT * from songs where albumid='$albumid' and userid='$userid'";
    $result=mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($result);
    $songname=$row['songname'];
    $arr=array();
    for($row=mysql_fetch_array){
        array_push($arr,$row['songname']);
    }
}
?>
<audio src="" controls id="audioPlayer"></audio>
        
        <script>
                var songlinks = ["[Songs.PK] 3G - 01 - Kaise Bataaoon.mp3","[Songs.PK] Aashiqui 2 - 01 - Tum Hi Ho.mp3","Mylapore Blues - A.R.Rahman.mp3"];
                var songName = ["Kaise Bataaoon","Tum Hi Ho","Mylapore Blues - A.R.Rahman.mp3"];
                var artistname =["K.K.","Arijit Singh","A.R.Rahman"]
                      
            var t='<div id="inf">'
            t += '<div class="container detailbox menu" style="margin-left: auto;margin-right: auto;width: 50pc">';
                
            t +='<table class="table " style="color: white; ">';    
            t +=' <thead><tr><th ><h4 style="color: white">Title</h4></th>           <th ><h4 style="color: white">Artists</h4></th><th ><h4 style="color: white">Rename</h4></th>    </tr>  <tbody style="font:1.5em Sans-serif">';   

                
                t +='<tbody style="font:1.5em Sans-serif">';
                
                for(var i = 0 ; i < songlinks.length ; i++)
                {t += '<tr id="playlist">';
                    if(i==0){
                        t += '<td id="current-song"><a href="'+  songlinks[0] +'">'+ songName[0] +'</a></td>'
                        t += '<td >';
                        t += artistname[i] ;
                        t += '</td>';
                        t +='<td> <a href="rename.php">Rename</td>';
                        t += '</tr>';
                    }
                    else{
                    t += '<td ><a href="'+  songlinks[i] +'">'+ songName[i] +'</a></td>'
                        t += '<td >';
                        t += artistname[i]+'</td>';
                        t +='<td> <a href="rename.php">Rename</td>';
                        t += '</tr>';
                    }
                }
                t +=' </tbody><thead></tbody></table></div>'
                
                document.write(t);
        </script>    
            <script>
            audioplayer();
            function audioplayer(){
                var currentSong = 0;
                $("#audioPlayer")[0].src = $("#playlist td a")[0];
                $("#audioPlayer")[0].play();
                $("#playlist td a").click(function(e){
                    e.preventDefault();
                    $("#audioPlayer")[0].src = this;
                    $("#audioPlayer")[0].play();
                    $("#playlist td").removeClass("current-song");
                        currentSong =  $(this).parent().index();
                        $(this).parent().addClass("current-song");
                });
                $("#audioPlayer")[0].addEventListener("ended",function(){
                    currentSong++;
                    if(currentSong==$("#playlist td a").length)
                        currentSong=0;
                    $("#playlist td").removeClass("current-song");
                    $("#playlist td:eq("+ currentSong+")").addClass("curent-song");
                    $("#audioPlayer")[0].src = $("#playlist td  a")[currentSong].href;
                    $("#audioPlayer")[0].play();
                });
            }
    </script> 
    </div>
</div>
 </body>
</html>

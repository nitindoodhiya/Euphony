    <!DOCTYPE html>
<html>
<head>
  <title>SongList</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>
    <style>
            #playlist{
                list-style: none;
            
            }
            #playlist li a{
            color: black;
            text-decoration: none;
            }
            #playlist .current-song a{
                color: blue;
            
            }

    </style>

    <script type="text/javascript">
        var simple = '<?php echo $simple; ?>';
        var complex = <?php echo json_encode($complex); ?>;
        console.log(simple);
    </script>
            
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
                <a class="navbar-brand"  href="#"><img src="img/logo1.png" class="img-responsive" style="width: 5pc" >
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
<div id="home">
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
    <form action="searchsong.php" method="POST">
    
    <input type="text" class="form-control" id="usr">
    <input type="submit" class="btn btn-info" value="Submit Button">
    </form>    
      
</div>


</body>
</html>
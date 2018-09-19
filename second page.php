<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	
	<title>Horizontally Scrolling Site from CSS-Tricks</title>
	
	<link rel="stylesheet" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
       
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="jquery.mousewheel.js"></script>
	<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("body").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
			event.preventDefault();
		});   
	});
	function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
	</script>
</head>

<body>

	
				  
		<div id="mySidenav" class="sidenav">
                
                <a href="#" style="padding-top:5pc">Upload Song</a>
				<a href="#">Create Playlists</a>
				<a href="#">Other Users</a>
                <a href="#">Contact Us</a>
                <div  class="container-fluid;" style=" position: absolute; bottom: 0px; ">
                    <audio src="audio.mp3"  width="1280"  controls preload style="float:right"></audio>
                </div>

			  </div>
	<div id="page-wrap" style="padding-bottom:12pc;padding-top:2pc">
		
		<div class="post" style="padding-left:20pc">
				
				<h1  style="text-align: center; color: azure">Artists</h1>
<div style=" padding-top:2pc;">

		<div class="alm" >
		<a href="">
	<img src="images/Artists/Rahman.jpg"  style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Arjit.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Atif.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Shreya.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<br>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Guru.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Armaan.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="">
	<img src="images/Artists/Honey.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	<div class="alm" >
	<a href="#">
	<img src="images/Artists/Palak.jpg" style="height:100px;width:100px;" class="im">
	</a>
	</div>
	</div>
	</div>
	
	<div class="post" >
				
			<h1  style="text-align: center; color: azure">Albums</h1>

<div style=" padding-top:2pc;">
	<div class="alm" >
	<a href="">
<img src="images/Albums/sonuketitukisweety.jpg"  style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/states.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/Aashiqui2.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/dolaafzonkikahaani.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<br>
<div class="alm" >
<a href="">
<img src="images/Albums/FukreyReturns.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/Golmaalagain.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/SecretSuperstar.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="#">
<img src="images/Albums/Hawaizaada.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>  
</div>
	</div>	
	
	
	<div class="post" >
				
			<h1  style="text-align: center; color: azure">Playlists</h1>

<div style=" padding-top:2pc;">
	<div class="alm" >
	<a href="">
<img src="images/Albums/sonuketitukisweety.jpg"  style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/states.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/Aashiqui2.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/dolaafzonkikahaani.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<br>
<div class="alm" >
<a href="">
<img src="images/Albums/FukreyReturns.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/Golmaalagain.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="">
<img src="images/Albums/SecretSuperstar.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
<div class="alm" >
<a href="#">
<img src="images/Albums/Hawaizaada.jpg" style="height:100px;width:100px;" class="im">
</a>
</div>
</div>
	</div>	
	</div>
	
</body>

</html>
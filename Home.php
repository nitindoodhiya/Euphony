<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	
	<title>Euphony</title>
	
	<link rel="stylesheet" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
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
<style>
.td{
font: 3em sans-serif;

}
</style>

<body>
    <div>		  
            <div style="height: 600px;width: 100%;"> 
                    <iframe style="height: 110%;width: 100%;" src="second page.php" frameborder="0"></iframe>
            </div>
      <div  class="container-fluid;" style=" position: absolute; bottom: 0px; ">
            <audio src="audio.mp3"  style="margin: auto;" controls preload style="float:right;height:10"></audio>
        </div>

    </div>
</body>

</html>
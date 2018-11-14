+<!DOCTYPE html>
<html>
<title></title>
<head>
<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
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

<?php
    $simple = 'simple string';
    $complex = array('more', 'complex', 'object', array('foo', 'bar'));
?>
<script type="text/javascript">
    var simple = '<?php echo $simple; ?>';
    var complex = <?php echo json_encode($complex); ?>;
    console.log(simple);
</script>
<body>
    
    <audio src="" controls id="audioPlayer"></audio>
        
<script>
        var songlinks = ["[Songs.PK] 3G - 01 - Kaise Bataaoon.mp3","[Songs.PK] Aashiqui 2 - 01 - Tum Hi Ho.mp3","Mylapore Blues - A.R.Rahman.mp3"];
        var songName = ["Kaise Bataaoon","Tum Hi Ho","Mylapore Blues - A.R.Rahman.mp3"];
        var t = '<ul id="playlist">';
        for(var i = 0 ; i < songlinks.length ; i++)
        {
            if(i==0){
                t += '<li id="current-song"><a href="'+  songlinks[0] +'">'+ songName[0] +'</a></li>'
            }
            else
            t += '<li ><a href="'+  songlinks[i] +'">'+ songName[i] +'</a></li>'
            
        } 
        t += '</ul>';
        document.write(t);
</script>    
    <script>
    audioplayer();
    function audioplayer(){
        var currentSong = 0;
        $("#audioPlayer")[0].src = $("#playlist li a")[0];
        $("#audioPlayer")[0].play();
        $("#playlist li a").click(function(e){
            e.preventDefault();
            $("#audioPlayer")[0].src = this;
            $("#audioPlayer")[0].play();
            $("#playlist li").removeClass("current-song");
                currentSong =  $(this).parent().index();
                $(this).parent().addClass("current-song");
        });
        $("#audioPlayer")[0].addEventListener("ended",function(){
            currentSong++;
            if(currentSong==$("#playlist li a").length)
                currentSong=0;
            $("#playlist li").removeClass("current-song");
            $("#playlist li:eq("+ currentSong+")").addClass("curent-song");
            $("#audioPlayer")[0].src = $("#playlist li  a")[currentSong].href;
            $("#audioPlayer")[0].play();
        });
    }
    
    
    </script>


</body>
</html>
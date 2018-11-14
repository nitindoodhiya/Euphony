function OnLogIn(googleUser){
	var profile=googleUser.getBasicProfile();
    var id=profile.getId();
    var name=profile.getName();
    var imageurl=profile.getImageUrl();
    var email=profile.getEmail();
	if(profile){
      
          $.ajax({
                type: 'POST',
                url: 'googlelogin.php',
                data: {name, email,id,imageurl}
            }).done(function(data){
                console.log(data);
                window.location.replace("https://localhost/euphony/second page.php");
            }).fail(function() { 
                alert( "Posting failed." );
            });
      }
}

function OnSignIn(googleUser){
	var profile=googleUser.getBasicProfile();
    var id=profile.getId();
    var name=profile.getName();
    var imageurl=profile.getImageUrl();
    var email=profile.getEmail();
	if(profile){
      
          $.ajax({
                type: 'POST',
                url: 'loginpro.php',
                data: {name, email,id,imageurl}
            }).done(function(data){
                console.log(data);
                window.location.replace("https://localhost/euphony/redirectionFromGoogle.php");
            }).fail(function() { 
                alert( "Posting failed." );
            });
      }
}

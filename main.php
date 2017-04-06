<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

 	<title>Weight Memory</title>
 	
    <script src="js/jquery.js"></script>

    <script src="https://use.fontawesome.com/daef70889d.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

        <!-- google sign in things -->
    <meta name="google-signin-client_id" 
    content="321871138653-tbd116dn8dso17iqgupb8n988nmelv99.apps.googleusercontent.com">

    <script type="text/javascript" src="js/login.js"></script>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body>
    

	<div onclick="printDetailss();">exercisebody</div>

  <a onclick="signOut();">Sign out</a>

<br>

  <br>
  <a onclick="signOutAndRevoke();">Sign Out and Revoke All Details</a>

 <br><br>
  <a onclick="revokeAllScopesAndRedirect();">Just Revoke and Redirect</a>

<br><br>
  <a onclick="revokeAllScopes();">Just Revoke</a>


<script>




</script>


    <script>
    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
        window.location.replace('index.php');
      });
    }

    function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    } 
    //credit to : http://stackoverflow.com/questions/29815870/typeerror-gapi-auth2-undefined

    function printDetailss(){
        var auth2 = gapi.auth2.getAuthInstance();
        var profile = auth2.currentUser.get();
        console.log(profile.getId());
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>

</body>
</html>
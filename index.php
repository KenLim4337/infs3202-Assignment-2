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
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" 
    content="321871138653-tbd116dn8dso17iqgupb8n988nmelv99.apps.googleusercontent.com">

    <script type="text/javascript" src="js/login.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	
</head>
<body>
<div  onclick='redirect();'>Login Here</div>
	<br>
    <div onclick="printDetail();">//oath here</div>

<!-- 	<div class="g-signin2" data-onsuccess="onSignIn"></div> -->

	<!-- client id: 321871138653-tbd116dn8dso17iqgupb8n988nmelv99.apps.googleusercontent.com -->
	<!-- client secret: JNkpLUtRi-URIYDCKXVftN6S -->



	<!-- <a href="#" onclick="signOut();">Sign out</a> -->
<br>
  <a onclick="revokeAllScopes();">Revoke All Scopes</a>

</body>
<script>

function redirect(){
    window.location.replace('login.html');
}



</script>
</html>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

  window.location.replace('main.php');
  // var isSigned = {};
  // isSigned.Id = profile.getId();
  // isSigned.Name = profile.getName();

  // sessionStorage.setItem('isSignedx', JSON.stringify(isSigned));
  // console.log(sessionStorage.getItem('isSignedx'))

  // checkSigned();
  
}


function printDetail(){
	var auth2 = gapi.auth2.getAuthInstance();  
	var profile = auth2.currentUser.get();
	console.log(profile.getId());
}

// function signOut() {
//     var auth2 = gapi.auth2.getAuthInstance();
//     auth2.signOut().then(function () {
//     console.log('User signed out.');
//     });
// }


function signOutAndRevoke(){
    var auth2 = gapi.auth2.getAuthInstance();
  
    auth2.signOut().then(function () {
        auth2.disconnect();
    console.log('User signed out.');
    window.location.replace('index.php');
    });
}

var revokeAllScopes = function() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.disconnect();
}

var revokeAllScopesAndRedirect = function() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.disconnect();
  window.location.replace("index.php");
}






// function checkSigned(){
// 	if (sessionStorage.getItem('isSignedx') == null) {
// 		window.location.replace("index.php");
// 	} else {
// 		console.log("dope");
// 	}
// }

// function mySignOut(){
// 	sessionStorage.clear();
// 	window.location.replace("index.php#signOut")

// }

// function checkifDoubleHash(){
// 	if (window.location = "index.php#signOut"){
// 		signOut();
// 		sessionStorage.clear();
// 		window.location.href.split('#')[0]
// 	} else {
// 		sessionStorage.clear();
// 		window.location.href.split('#')[0]
// 	}
// }
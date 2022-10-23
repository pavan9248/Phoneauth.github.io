<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <form>
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="phone" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Submit</button>
    </form>
    <form>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Verification Number</strong></label>
        <input type="text" id="vernum" placeholder="Enter phone number" name="uname" required>
      </div>
      <button type="button" onclick="verifynumber();">Submit</button>
    
    </form>
    <script src="firebase.js" type="text/javascript"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    var firebaseConfig = {
    apiKey: "AIzaSyCBMfhhC_oFZkCYJat23yFdagZsg8UxmAU",
    authDomain: "connection-php-4305e.firebaseapp.com",
    projectId: "connection-php-4305e",
    storageBucket: "connection-php-4305e.appspot.com",
    messagingSenderId: "805263405607",
    appId: "1:805263405607:web:1bf5645d9115f433fad402",
    measurementId: "G-NWLNBT6VTC"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

  </body>
</html>
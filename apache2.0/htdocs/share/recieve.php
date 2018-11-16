<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fast Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./material/css/materialize.min.css">
    <script src="./material/js/materialize.min.js"></script>
    <link rel="stylesheet" href="./material/css/flexbox.css">
    <style>
       /* fallback */
@font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
  }
  
  .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
  }
    </style>
</head>
<body>

<nav class="blue">
    <div class="nav-wrapper">
      <a href="#" style="padding:0px 10px;" class="brand-logo"> Fast Share</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://localhost:8345/index.php">Home</a></li>
        <li><a href="http://localhost:8345/share/recieve.php">Recieve</a></li>
      </ul>
    </div>
  </nav>


  <section class="container">
     <h3>Enter your friends IP Address : </h3>
    
  <div class="row">
    <form method="GET" action="http://localhost:8345/share/validate.php" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="ip" type="text" class="validate">
          <label for="icon_prefix">IP Address</label>
        </div>
      </div>
    </form>
  </div>
  </div>
     
  </section>

  <section class="container">
     <br> <br>
     <h4>To get the IP Address of your Friend.</h4>
    <ul>
      <li>Make sure you and  your friend were connected to a same wifi network.</li>
      <li>Open Command Prompt of your friends Desktop.</li>
      <li>Enter 'ipconfig' and hit Enter</li>
      <li>There you can See the IPv4 Address of WiFi LAN</li>
      <li>Enter that Address in your Desktop.</li>
      <li>Note : If you Entered a Wrong IP Address the Network cannot connect, You need to try again by comming Back.</li>
    </ul>
  </section>
</body>
</html>


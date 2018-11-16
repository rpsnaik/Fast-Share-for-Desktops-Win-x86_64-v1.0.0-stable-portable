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
        <li><a href="http://localhost:8345/share/push.php">Send</a></li>
        <li><a href="http://localhost:8345/share/recieve.php">Recieve</a></li>
      </ul>
    </div>
  </nav>
    <section class="container">
       <h3>Fast Share for Desktops.</h3>
    </section>

    <br>
    <br>

    <section class="container">
       <div class="row middle-md middle-sm middle-xs middle-lg">
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
          <a href="http://localhost:8345/share/push.php" class="waves-effect waves-light btn-large pink"><i class="material-icons left">cloud_upload</i>Send</a>
          <h4>Send files to your mere friend faster</h4>
          <p>Desktop transfer, faster than ever</p>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
           <a href="http://localhost:8345/share/recieve.php" class="waves-effect waves-light btn-large pink"><i class="material-icons left">cloud_download</i>Recieve</a>
           <h4>Recieve files from your friend faster</h4>
          <p>Desktop transfer, faster than ever</p>
          </div>
       </div>
    </section>

    <br>
    <br>

    <section class="container">
        <h4>Important Note :</h4>
        <p style="color:red;">The files you want to share should be in the ./apache2.0/htdocs/files folder from the root.</p>
    </section>
</body>
</html>
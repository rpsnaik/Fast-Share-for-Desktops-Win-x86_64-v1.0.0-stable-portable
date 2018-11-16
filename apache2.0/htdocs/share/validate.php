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
        <li><a href="http://localhost:8345/share/get.php">Recieve</a></li>
      </ul>
    </div>
  </nav>

<section class="container">

<br><br>
<br>
<h3>Validating IP Address ... </h3>
<p>If this takes too much longer.. Try Again.... By Entering IP Address.</p>
<button class="btn"><a style="color:#fff" href="http://localhost:8345/share/recieve.php">Retry</a></button>
  <?php 
     if(isset($_GET['ip'])){
         ?>
        <script>
           location.href='http://<?php echo $_GET['ip'] ?>:8345/share/get.php?ip=<?php echo $_GET['ip'] ?>';
        </script>
        <?php
     }
     else{
    
     }
  ?>

  <br>
  <br><br>
</section>


</body>
</html>


<?PHP

if (!function_exists('mime_content_type')) {
    function mime_content_type($filename)
    {
        // Sanity check
        if (!file_exists($filename)) {
            return false;
        }

        $filename = escapeshellarg($filename);
        $out = `file -iL $filename 2>/dev/null`;
        if (empty($out)) {
            return 'application/octet-stream';
        }

        // Strip off filename
        $t = substr($out, strpos($out, ':') + 2);

        if (strpos($t, ';') !== false) {
            // Strip MIME parameters
            $t = substr($t, 0, strpos($t, ';'));
        }

        // Strip any remaining whitespace
        return trim($t);
    }
}



  function getFileList($dir)
  {
    $retval = array();
    if(substr($dir, -1) != "/") $dir .= "/";

    $d = @dir($dir) or die("getFileList: Failed opening directory $dir for reading");
    while(false !== ($entry = $d->read())) {
      // skip hidden files
      if($entry[0] == ".") continue;
      if(is_dir("$dir$entry")) {
        $retval[] = array(
          "name" => "$dir$entry/",
          "type" => filetype("$dir$entry"),
          "size" => 0,
          "lastmod" => filemtime("$dir$entry")
        );
      } elseif(is_readable("$dir$entry")) {
        $retval[] = array(
          "name" => "$dir$entry",
          "type" => mime_content_type("$dir$entry"),
          "size" => filesize("$dir$entry"),
          "lastmod" => filemtime("$dir$entry")
        );
      }
    }
    $d->close();

    return $retval;
  }
?>

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
    src: url(./material/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
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
    
<h3>Availiable Files to Recieve from Sender.</h3>

<table class="collapse" border="0">
<thead>
<tr><th>Name</th><th>Type</th><th>Size</th></tr>
</thead>
<tbody>
<?PHP
  $dirlist = getFileList("../files");
  foreach($dirlist as $file) {
    if($file['name'] == "./get.php"){
      
    }
    elseif($file['name'] == "./push.php"){

    }
    else{
    echo "<tr>\n";
    echo "<td>{$file['name']}</td>\n";
    echo "<td>{$file['type']}</td>\n";
    echo "<td>{$file['size']}</td>\n";
    ?>
    <td>
    <a href="http://<?php echo $_GET['ip']?>:8345/files/<?php echo "{$file['name']}\n" ?>" class="waves-effect waves-light btn-large pink" download><i class="material-icons left">cloud_download</i>Recieve</a>
    </td>
    <?php 
    echo "</tr>\n";
    }

  }
?>
</tbody>
</table>
</section>
</body>
</html>


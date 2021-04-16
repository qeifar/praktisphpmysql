<!DOCTYPE html><html lang="en"><head><?php include 'etc/head.php' ?></head>
  <body>
    <div class="d-flex" id="wrapper">
      <?php include 'etc/sidebar.php' ?>
      <div id="page-content-wrapper">
        <?php include 'etc/nav.php'; ?>
        <div class="container-fluid">
          
        <?php require_once('config.php');
          if(!$conn){
            echo "<h1 class='mt-4'>Sambungan tergendala</h1>";
          }else{
            echo "<h1 class='mt-4'>Sambungan berjalan. <br>Ctrl+Shift+J untuk lihat console log</h1>";
          }?>

<pre style="background:lightgreen; width:50%; margin-top:50px; margin-left:70px;">
//set conn
$namaserver ="localhost";
$namauser = "root";
$password ="";
$namadb ="ahadmac";
//sambung ke db
$conn = mysqli_connect($namaserver,$namauser,$password,$namadb);

if(!$conn){
    die("Sambungan tergendala ".mysqli_connect_error());
    $conn -> close();
}else{
    console_log("Sambungan berjalan");
}

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}</pre>
        </div>

      </div>
    </div><?php include 'etc/script.php' ?>
  </body>
</html>

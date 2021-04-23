<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>

<?php

//set conn
$namaserver ="localhost";
$namauser = "root";
$password ="";
$namadb ="dunia_koechink";

//sambung ke db
$conn = mysqli_connect($namaserver,$namauser,$password,$namadb);

if(!$conn){
    die("Sambungan tergendala ".mysqli_connect_error());
    $conn -> close();
}else{
    console_log("Sambungan berjalan");
    echo "Sambungan berjalan";
}
<script>
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '';
        var_dump($js_code);
        exit();
    }
    var_dump($js_code);
    exit();
    echo $js_code;
</script>
}

?>

</body>
</html>
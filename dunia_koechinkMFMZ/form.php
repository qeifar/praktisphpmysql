<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
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
}

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '';
    }
    echo $js_code;
}
?>

<?php require_once('config.php');?>
        <?php
        $sql = "SELECT * FROM users LIMIT 5  ";
        $result = $conn->query($sql);

        echo "<table class='mt-4' id='jadual'><tr style='background:tomato;'><th>ID</th><th>Nama</th><th>Emel</th><th>Dibuat Pada</th><th>Dikemaskini Pada</th></tr>";
        if ($result->num_rows>0){
            
            //print data
            while ($row=$result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["emel"]."</td><td>".$row["created_at"]."</td><td>".$row["updated_at"]."</td></tr>";
            }
        }else{
            echo "<tr><td>Data tiada</td></tr>";
        }
        echo "</table>";
        ?>

</body>
</html>
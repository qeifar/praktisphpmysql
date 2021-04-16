<?php 



//set conn

$namaserver ="localhost";

$namauser = "websiteu_praktisphpmysql";

$password ="praktisphpmysql";

$namadb ="websiteu_praktisphpmysql";

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

}



function generateRandomName($length = 10) {

    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return ucwords($randomString);

}

function generateRandomEmail($length = 10) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return $randomString."@legoom.net";

}

?>
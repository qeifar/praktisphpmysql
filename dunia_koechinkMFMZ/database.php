<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>

<?php require_once('config.php');

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
echo "<table>";
if ($result->num_rows>0){
    //print data
    while ($row=$result->fetch_asspc())) {
        echo $row[customer_id].$row[customer_name].$row[customer_phone].$row[customer_email].$row[created_at].$row[updated_at].
    }
}




?>


</body>
</html>
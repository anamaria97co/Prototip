<html>
<head><title></title>
<style>
body{
    background-color:lightgrey;
}
</style>
</head>
<body>

<?php
include "connect.php";

$reg=mysqli_real_escape_string($con, $_POST["reg"]);
$ulaz=mysqli_real_escape_string($con, $_POST["ulaz"]);
$izlaz=mysqli_real_escape_string($con, $_POST["izlaz"]);

$sql="INSERT INTO kazne(regOznaka, vrijemeUlaska, vrijemeIzlaska) VALUES ('$reg','$ulaz','$izlaz');";

if(mysqli_query($con, $sql)){ 
    echo "Podaci su uneseni u sustav!"; 
} else { 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con); 
}  
?>
<br>
<a href="home.php">Vrati se na početnu</a>
<body>
<html>
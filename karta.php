<?php
include "connect.php";
?>

<html>
<head><title>Prodaja karte</title>
<style>
body{
    background-color: lightgrey;
}
h1{
    text-align:center;
}
</style>
</head>
<body>
<div style="background-color: silver"><h1>Dobrodošli na prodaju karata</h1>
<hr></div>
<p>
&rArr;
<?php 
echo $vrsta = htmlspecialchars($_POST['vrsta']); ?>
 karta je prodana na registraciju: <?php
echo $oznaka = htmlspecialchars($_POST['oznaka']); ?>
</p>
<?php
$oznaka = htmlspecialchars($_POST['oznaka']);
$vrsta = htmlspecialchars($_POST['vrsta']);

//$sql="SELECT količina FROM karte WHERE vrsta='".$vrsta = htmlspecialchars($_POST['vrsta'])."'";
//$result=mysqli_query($con, $sql);
//$row=mysqli_fetch_assoc($result)
//    echo $row[0];

//pronadi gresku ovdje 
//$sql="UPDATE karte SET količina=(SELECT količina FROM karte WHERE vrsta='".$vrsta = htmlspecialchars($_POST['vrsta'])."')-1 
//WHERE vrsta='".$vrsta = htmlspecialchars($_POST['vrsta'])."'";

//$sql="UPDATE karte SET količina=248-1 WHERE vrsta='".$vrsta = htmlspecialchars($_POST['vrsta'])."'";

//if(mysqli_query($con, $sql)){ 
//    echo "Podaci su ažurirani u bazi."; 
//} else { 
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con); 
//}  
//?>
<br>
<a href="pregled.php">Pregledaj stanje karata</a><br>
<br>
<a href="home.php">Vrati na početnu</a>


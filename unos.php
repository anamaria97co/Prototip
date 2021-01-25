<?php
include "connect.php";

$sifra=mysqli_real_escape_string($con, $_POST["sifra"]);
$naziv=mysqli_real_escape_string($con, $_POST["naziv"]);
$brojMj=mysqli_real_escape_string($con, $_POST["brojMj"]);
$oznaka=mysqli_real_escape_string($con, $_POST["oznaka"]);
$zauzece=mysqli_real_escape_string($con, $_POST["zauzece"]);
$ulaz=mysqli_real_escape_string($con, $_POST["ulaz"]);
$izlaz=mysqli_real_escape_string($con, $_POST["izlaz"]);


$sql="SELECT * FROM parkiraliste WHERE sifraParkiralista='".$sifra."' AND nazivParkiralista='".$naziv."';";

$result=mysqli_query($con, $sql);
//unesi u bazu
$rowcount=mysqli_num_rows($result);
if ($rowcount!=1 || $rowcount>=1){
    $sql1="INSERT INTO parkiraliste(sifraParkiralista, nazivParkiralista, brojMjesta) VALUES ('$sifra','$naziv','$brojMj');";
    $rez=mysqli_query($con, $sql1);
    $sql2="INSERT INTO parkingmjesto(sifraParkiralista, oznakaMjesta, oznakaZauzeca, vrijemeUlaz, vrijemeIzlaz) VALUES ('$sifra','$oznaka','$zauzece', '$ulaz', '$izlaz');";
    $rez=mysqli_query($con, $sql2);
    echo "Uspjesan unos!";
}
else{
    die();
}
?>
<html>
<body>
<br>
<a href="home.php">Vrati na početnu</a>
</body>
</html>

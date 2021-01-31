<html>
<head><title>Pregled stanja</title>
<style>
body{
    background-color:lightgrey;
}
h1{
    text-align: center;
}
table{
    border-collapse: collapse;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
td{
    text-align: center;
    padding: 5px;
}
th{
    background-color: grey;
    color: white;
}

</style>
<body>
<div style="background-color: silver"><h1>Pregled stanja</h1>
<hr></div><br>

<?php
include "connect.php";

$result = mysqli_query($con,"SELECT * FROM parkiraliste");

echo "<table border='2'>
<tr>
<th>Šifra parkirališta</th>
<th>Naziv parkirališta</th>
<th>Broj mjesta</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sifraParkiralista'] . "</td>";
echo "<td>" . $row['nazivParkiralista'] . "</td>";
echo "<td>" . $row['brojMjesta'] . "</td>";
echo "</tr>";
}
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM parkingmjesto");

echo "<table border='2'>
<tr>
<th>Šifra parkirališta</th>
<th>Oznaka mjesta</th>
<th>Oznaka zauzeća</th>
<th>Šifra Karte</th>
<th>Vrijeme ulaza</th>
<th>Vrijeme izlaza</th>
</tr>";
echo "<br><hr>";
echo "<br>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sifraParkiralista'] . "</td>";
echo "<td>" . $row['oznakaMjesta'] . "</td>";
echo "<td>" . $row['oznakaZauzeca'] . "</td>";
echo "<td>" . $row['sifraKarte'] . "</td>";
echo "<td>" . $row['vrijemeUlaz'] . "</td>";
echo "<td>" . $row['vrijemeIzlaz'] . "</td>";

echo "</tr>";
}
echo "</table>";


$result = mysqli_query($con,"SELECT * FROM karte");

echo "<table border='2'>
<tr>
<th>Vrsta karte</th>
<th>Količina</th>
<th>Cijena/kn</th>
</tr>";
echo "<br><hr>";
echo "<br>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['vrsta'] . "</td>";
echo "<td>" . $row['količina'] . "</td>";
echo "<td>" . $row['cijena'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<br>
<a href="home.php">Vrati se na početnu</a>
</body>
</html>
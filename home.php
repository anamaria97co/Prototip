<?php include("funkcije.php"); 
$translations=loadTranslations(1);
?>
<?php
if($_SESSION["login"]="true"){
    echo "Login successful!";
    echo "<br />";
    echo "Uspješno ste prijavljeni!";
}
else{
    header("Location:index.php");
    die();
}
?>
<html>
<head><title>Početna</title>
<style type="text/css">
h1{
    text-align:center;
}

p{
    font-size:20px;
}
body{
    background: lightgrey;
}
</style>
</head>
<body>
<hr>
<h1>Informacijski sustav za vođenje parkirališta</h1>
<p></p>
<form name=forma action="unos.php" method="post">
    <hr><b>Dio za evidentiranje</b><br><hr>
    Šifra parkirališta: <input type="text" name="sifra" required><br><br>
    Naziv parkirališta: <input type="text" name="naziv" required><br><br>
    Broj mjesta parkirališta: <input type="text" name="brojMj" required><br><br>
   
    Oznaka parking mjesta: <input type="text" placeholder="npr. A20" name="oznaka" required>
    Zauzeto <input type="radio" id="z" name="zauzece" value="zauzeto"> <br><br>
    
    Vrijeme ulaska <input type="time" id="ulaz" name="ulaz" min="08:00" max="23:00" required>
    Vrijeme izlaska <input type="time" id="izlaz" name="izlaz" min="08:00" max="23:00" required><br>
    <input type="submit" value="Unesi">
</form>
<hr>
<b>Dio za pregled</b><br>
<a href="?pregled=da">Pregled trenutnog stanja</a>

<hr>
<form method="post" name="karta" action="karta.php">
    <h3>Prodaja karata</h3>
        Odaberi vrstu karte <select id="izbor">
        <option value="satna">Pretplatna</option>
        <option value="dnevna">Satna</option>
        <option value="dnevna">Dnevna karta</option>
        <option value="tjedna">Tjedna karta</option>
        <option value="vikend">Vikend karta</option>
        <option value="pretplatna">Poludnevna</option>
</select><br><br>
        Registarske tablice vozila <input type="text" placeholder="unesi reg. oznaku" name="oznaka">
        <input type="submit" value="Potvrdi">
</form>

<br><hr>
<h3>Kazne</h3>
<form name="kazne" method="post">
Registarska oznaka vozila: 
<input type="text" name="kazna">
        <input type="submit" value="Unesi u sustav">
</form>
</body>
</html>

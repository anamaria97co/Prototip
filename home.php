<?php include("funkcije.php"); 
$translations=loadTranslations(1);
?>
<?php
if($_SESSION["login"]="true"){
    
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

body{
    font-size:18px;
}
body{
    background: lightgrey;
}
.evid{
    text-align: center;
    background-color: silver;
    
}
.pro{
    text-align:center;
    background-color: silver;
}
.but{
    padding: 7px;
}

</style>
</head>
<body>


<div style="background-color: silver"><hr><h1>Informacijski sustav za vođenje parkirališta</h1>
<hr>
</div>


<form name=forma action="unos.php" method="post">
    
    <h3 class="evid"><hr>Dio za evidentiranje<hr></h3>
    Šifra parkirališta: <input type="text" name="sifra" required>
    Naziv parkirališta: <input type="text" name="naziv" required><br><br>
    Broj mjesta parkirališta: <input type="text" name="brojMj" required>
   <br><br>
    Oznaka parking mjesta: <input type="text" placeholder="npr. A20" name="oznaka" required>
    Zauzeto <input type="radio" id="z" name="zauzece" value="zauzeto"> <br><br>
    
    Vrijeme ulaska <input type="time" id="ulaz" name="ulaz" min="08:00" max="23:00" required>
    Vrijeme izlaska <input type="time" id="izlaz" name="izlaz" min="08:00" max="23:00" required><br><br>
    &rarr;<input class="but" type="submit" value="Unesi podatke">&larr;	
    
</form>


<h3 class="pro"><hr>Dio za pregled<hr></h3>
&rArr; <a href="pregled.php">Pregled trenutnog stanja parkiralista</a>
<br><br>

<h3 class="pro"><hr>Prodaja karata<hr></h3>
<form method="post" name="karta" action="karta.php">
        Odaberi vrstu karte <select name="vrsta" id="izbor">
        <option value="pretplatna">pretplatna</option>
        <option value="satna">satna</option>
        <option value="dnevna">dnevna karta</option>
        <option value="tjedna">tjedna karta</option>
        <option value="vikend">vikend karta</option>
        <option value="poludnevna">poludnevna</option>
</select><br><br>
        Registarske oznake vozila <input type="text" placeholder="unesi reg. oznaku" name="oznaka">
        <input type="submit" value="Potvrdi">
</form>

<h3 class="pro"><hr>Kazne<hr></h3>
<form name="kazne" method="post" action="kazne.php">
Registarske oznake vozila: 
<input type="text" name="reg"><br>
<br>Vrijeme ulaska <input type="time" id="ulaz" name="ulaz" min="08:00" max="23:00" required>
<br>Vrijeme izlaska <input type="time" id="izlaz" name="izlaz" min="08:00" max="23:00" required><br><br>
&rarr; <input class="but" type="submit" value="Unesi u sustav">&larr;
</form>

</body>
</html>

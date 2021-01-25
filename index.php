<!DOCTYPE html>
<head>
<link rel="stylesheet" href="styles.css"><style>
.registr{
    box-sizing: content-box;  
    width: 300px;
    height: 130px;
    padding: 30px; 
    border: medium outset grey;
    background-color:rgb(233, 236, 247);
    position: relative;
}
.t{
    background-color: white;
    text-align: center;
    position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-60%, -50%);
  transform: translate(-60%, -50%);
}
</style>
</head>
<body>
    <h2>Prijava</h2>
<div class="registr">
<form action="register_handler.php" method="post">
<label for="name"><b>Korisničko ime</b></label>
<input type="text" placeholder="Unesite korisnicko ime" name="korIme" required>
<br><br>
<label for="loz"><b>Lozinka</b></label>
<input type="password" placeholder="Unesite lozinku" name="lozinka">
<br><br>
<div class="t">
<button type="submit" class="button">Prijava</button>
</div>
</div>

</form>
<br> <br><br>
<hr>
Nastavi bez prijave!
<p>
    <a href="">Pregledaj popunjenost parkirališta </a>
</p>
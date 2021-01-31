<!DOCTYPE html>
<head><title>Prijava</title>
<link rel="stylesheet" href="styles.css"><style>
.registr{
    box-sizing: content-box;  
    width: 300px;
    height: 140px;
    padding: 30px; 
    border: medium outset grey;
    background-color:#f2f2f2;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.t{
    background-color: white;
    text-align: center;
    position: absolute;
    top: 85%;
    left: 40%;
    -ms-transform: translate(-80%, -50%);
    transform: translate(-60%, -50%);
}
.ime{
    position:relative;
	left:110px;
	top:-30px;
	line-height:35px;
	padding:0 22px;
	font-size:12px;
}
.loz{
    position:relative;
	left:50px;
	top:-10px;
	line-height:35px;
	padding:0 22px;
	font-size:12px;

}
button{
    text-align:center;
    display:block;
    transition: 0.25px;
    position:relative;
	left:80px;
	top:-0px;
}
body{
    background-color: lightgrey;
}
h2{
    text-align: center;
}
</style>

</head>
<body>
    <h2>Prijava</h2><hr>
<div class="registr">
<form action="register_handler.php" method="post">
<label for="name"><b>Korisničko ime</b></label>
<input class="ime" type="text" placeholder="Unesite korisnicko ime" name="korIme" required>
<br><br>
<label for="loz"><b>Lozinka</b></label>
<input class="loz" type="password" placeholder="Unesite lozinku" name="lozinka">
<br><br>
<div class="t">
<button type="submit">Prijava</button>
</div>
</div>
</form>
<br>

Nastavi bez prijave!
<p>
    <a href="popunjenost.php">Pregledaj popunjenost parkirališta </a>
</p>
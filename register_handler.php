<html>
<head><title>
</title>
</head>
<body>
<?php
include "connect.php";
$korIme=mysqli_real_escape_string($con, $_POST["korIme"]);
$lozinka=mysqli_real_escape_string($con, $_POST["lozinka"]);
$sql="SELECT * FROM korisnici WHERE korIme='".$korIme."' AND lozinka='".$lozinka."';";

$result=mysqli_query($con, $sql);
$rowcount=mysqli_num_rows($result);
if ($rowcount!=1){
    header("Location:login_failed.php");
    die();
}
else{
    session_start();
    $_SESSION["login"]="true";
    header("Location:home.php");
    die();
}

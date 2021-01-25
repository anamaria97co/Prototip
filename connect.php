<?php
$servername="localhost";
$korIme="root";
$lozinka="";

$con=new mysqli($servername, $korIme, $lozinka, "prototip");
if($con->connect_error){
    die("Pogreška".$con->connect_error);
}
?>
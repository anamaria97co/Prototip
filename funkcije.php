<?php
session_start();
if(isset($_GET["pregled"])){

$opcije=["da", "ne"];
if(in_array($_GET["pregled"], $opcije)){
    $_SESSION["pregled"]=$_GET["pregled"];
}
}
if(isset($_SESSION["pregled"])){
    $pregled=$_SESSION["pregled"];
}
else{
    $pregled="ne";
}

$con=mysqli_connect('localhost', 'root', '', 'prototip');

function loadTranslations($page_id){
    global $con;
    global $pregled;
    $sql="SELECT * FROM kazne WHERE page_id=" .$page_id;
    $result=mysqli_query($con, $sql);

    $array=[];
    while($row=mysqli_fetch_assoc($result)){
        $key=$row['nazivKazne'];
        $array[$key]=$row["nazivKazne"];
    }
    return $array;

}
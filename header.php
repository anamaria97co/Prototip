<?php
$pages=[
    "pocetna"=>[
        "title"=>"Početna",
        "description"=>"meta opis početne",
        "url"=>"pro.php"
    ],
    "kontakt"=>[
        "title"=>"Kontakti",
        "description"=>"meta opis kontakta",
        "url"=>"kontakt.php"
    ],
    "novosti"=>[
        "title"=>"Novosti",
        "description"=>"meta opis novosti",
        "url"=>"novosti.php"
],
];
$meta=$pages[$page];
?>

<html>
<head>
<title><?=$meta["title"]?></title>
<meta name="description" content="<?=$meta["description"]?>">
</head>
<body>

<div class="nav">
<?php
    foreach($pages as $key=>$value){
        ?>
    <a class="<?=$key==$pages?"active":""?>" href="<?=$value["url"]?>"><?=$value["title"]?></a>
    <?php
    }
    ?>
</div>

</body>
</html>


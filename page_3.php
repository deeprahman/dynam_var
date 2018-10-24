<?php
    $domain = "http://localhost/login/";
    $url = rawurlencode("logic.php")."?";
    $array = ['home','one','two','three'];
    $hide="false";
    foreach($array as  $value){
        $$value =$domain.$url."page=". urlencode($value);
    }
    $title=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body>
    <h2>This is the page 2</h2>
    <ul>
        <li class="<?=$hide?>"><a id="heome" href="<?=$home?>">Home Page</a></li>
        <li class="<?=$hide?>"><a id="one" href="<?=$one?>">Page One</a></li>
        <li class="<?=$hide?>"><a id="two" href="<?=$two?>">Page Two</a></li>
        <li class="<?=$hide?>"><a id="three" href="<?=$three?>">Page Three</a></li>
    </ul>
</body>
</html>
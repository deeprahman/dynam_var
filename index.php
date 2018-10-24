<?php
session_start();
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
    <title>Login Page</title>
</head>
<body>
    <div class="card">
        <form action="logic.php" method="post">
            <label for="name">Name:
                <input type="text" id="name" name="name" placeholder="User ID">
            </label>
            <label for="password">Password:
                <input type="passwordt" id="password" name="password" placeholder="Password" >
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php if (isset($_SESSION['ok']) && $_SESSION['ok'] == 'yes'): ?>
    <ul>
        <li class="<?=$hide?>"><a id="heome" href="<?=$home?>">Home Page</a></li>
        <li class="<?=$hide?>"><a id="one" href="<?=$one?>">Page One</a></li>
        <li class="<?=$hide?>"><a id="two" href="<?=$two?>">Page Two</a></li>
        <li class="<?=$hide?>"><a id="three" href="<?=$three?>">Page Three</a></li>
    </ul>
    <?php endif?>
</body>
</html>
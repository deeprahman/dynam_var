<?php

declare(strict_types=1);
session_start();
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$file_path = __DIR__.'/data.json';
$data = file_get_contents($file_path);
$data = json_decode($data, true);
// $data["password"] = (int)$data["password"];
if(isset($_GET['page'])){
    $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    switch($page){
    case 'one':
        header('location:./page_1.php');
        exit();  
        break;
    case 'two':
        header('location:./page_2.php'); 
        exit();  
        break;
    case 'three':
        header('location:./page_3.php'); 
        exit(); 
        break;
    default:
        header('location:.'); 
        exit();       
}
}
if($name !== $data['name'] || $password !== $data['password']){
    header("location:.");
    exit();
}
$_SESSION['ok'] = 'yes';
header('location:.');
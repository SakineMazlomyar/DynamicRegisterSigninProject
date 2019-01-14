<?php

include_once("./classes/class.php");

$page = new Page();
$page->title = "Class Page";
$page->navbar = include_once("./view/navbar.php");

$isSubmitted = isset($_GET['page']);
if($isSubmitted){
    $nexPage = $_GET['page'];
}else{
    $nexPage = 'login';

}
$page->navbar .= include_once("./view/$nexPage.php");


// We initial the database
$databaseJson = file_get_contents("./database/database.json");
$databaseConverted = json_decode($databaseJson);

if(!isset($databaseConverted)){
    $databaseConverted = new stdClass();

}
file_put_contents("./database/database.json", json_encode($databaseConverted));


$startPage = include("./template/page.php");
echo $startPage;

?>
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




$startPage = include("./template/page.php");
echo $startPage;

?>
<?php 


$databaseJson = file_get_contents("../database/database.json");
$databaseConverted = json_decode($databaseJson);

$isSubmitedLogin = isset($_POST['login-user']);
if($isSubmitedLogin){
    $name =  $_POST['username'];
    $password = $_POST['password'];
    
    foreach($databaseConverted->registers as $user){
        if( $name == $user->name && $password == $user->password){
            echo "Du har loggats in";
            return;
        } else {
            echo "Något gick fel";
            return;

        }
    }
   

}

?>
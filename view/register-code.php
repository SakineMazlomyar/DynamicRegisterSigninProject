

<?php

$databaseJson = file_get_contents("../database/database.json");
$databaseConverted = json_decode($databaseJson);

//We initial an array of all users
$users = array();
if(!isset($databaseConverted->registers)){
    $databaseConverted->registers = $users;
}


$isSubmitedRegister = isset($_POST['new-register']);
if($isSubmitedRegister){
    $name =  $_POST['name'];
    $password = $_POST['password'];
    $oneUser = new stdClass();
    $oneUser->name = $name;
    $oneUser->password =  $password;
    //We prevent similr users
    foreach($databaseConverted->registers as $user){
        if( $name == $user->name && $password == $user->password){
            echo "This username and password alreay exist!";
            return;
        }
    }
   
    array_push($databaseConverted->registers, $oneUser);
    file_put_contents("../database/database.json", json_encode($databaseConverted));

}



?>
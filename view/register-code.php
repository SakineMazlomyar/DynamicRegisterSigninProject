

<?php
$isSubmitedRegister = isset($_POST['new-name']);

if($isSubmitedRegister){

    $databaseJson = file_get_contents("../database/database.json");
    $databaseConverted = json_decode($databaseJson);
    
    //We initial an array of all users
    $users = array();
    if(!isset($databaseConverted->registers)){
        $databaseConverted->registers = $users;
    
    }
    //We prevent similr users before pushing new user
    foreach($databaseConverted->registers as $user){
        if($user->name == $_POST['name'] && $user->password == $_POST['password'])
        echo "This username and password alreay exist!";
        return;
    }
    // We check if array registers exist and then we push new user's info
    if(isset($databaseConverted->registers)){
        $oneUser = new stdClass();
        $oneUser->name = $_POST['name'];
        $oneUser->password = $_POST['password'];
        array_push($databaseConverted->registers, $oneUser);
    }








    file_put_contents("../database/database.json", json_encode($databaseConverted));

}



?>
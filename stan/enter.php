<?php
 
include_once 'database.php';
 

include_once 'sendtodatabase.php';
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 


$user->guestname = $_POST['guestname'];
$user->guestemail = $_POST['guestemail'];
$user->guestelephone = $_POST['guestelephone'];
$user->adults = $_POST['adults'];
$user->children = $_POST['children'];
$user->comments = $_POST['comments'];
$user->checkin = $_POST['checkin'];
$user->checkout = $_POST['checkout'];



if($user->enter()){
    $user_arr=array(
     
      "APPOINTMENT MADE!",
      header('location:madeappointment.html')
    );
}
else{
    $user_arr=array(
        "message" => "ERROR COULD NOT MAKE AN APPOINTMENT",
        header('location:madeappointment1.html')

    );
}
print_r(json_encode($user_arr));
?>
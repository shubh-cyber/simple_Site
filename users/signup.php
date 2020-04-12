<?php
 
// get database connection
include_once '../database/database.php';
 
// instantiate user object
include_once 'users.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->firstname = $_POST['firstname'];
$user->lastname = $_POST['lastname'];
$user->gender = $_POST['gender'];
$user->email = $_POST['email'];
$user->phone = $_POST['phno'];
 
// create the user
if($user->signup()){
    header("Location:../design/log_in.php");
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $user->id,
        "username" => $user->username
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
print_r(json_encode($user_arr));
?>
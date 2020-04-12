<?php
session_start();

include_once '../database/database.php';
include_once 'users.php';

//get database connection
$database = new Database();
$db = $database->getConnection();

//prepare user object
$user = new User($db);

//set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username']:die();
$user->password = isset($_GET['password']) ? $_GET['password']:die();

//read the details of user to be edited
$stmt = $user->login();

if($stmt->rowCount() > 0){
    
    //get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["name"] = $row['firstname'];
    echo $_SESSION["name"];
    if(isset($_SESSION["name"])){
        header("Location:../design/index1.php");
    }
    
    
    //create array
    /*$user_arr = array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );*/
}
else{
    $user_arr = array(
        "status" => false,
        "message" => "Invalid Username or Password!"
    );
}
    
print_r(json_encode($user_arr));
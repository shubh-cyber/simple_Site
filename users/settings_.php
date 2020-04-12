<?php
include_once '../database/database.php';
include_once 'users.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$user->username = isset($_POST['username']) ? $_POST['username']:die();
$user->password = isset($_POST['opass']) ? $_POST['opass']:die();
$user->rpassword = isset($_POST['rpass']) ? $_POST['rpass']: die();

if($user->settings()){
    //$row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $user_arr = array(
        "message" => "Password changed successfully!!",
        "user" => $user->username
    );
}
else{
    $user_arr = array(
        "message" => "Passwords don't match");
}
print_r(json_encode($user_arr));
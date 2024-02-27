<?php
require_once('db.php');

// var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $choice = $_POST['choice'];
    $message = $_POST['message'];
    
}


$ins = "INSERT INTO contact (name, username, email, choice, message) VALUES (?, ?, ?, ?, ?)";
$req = $db->prepare($ins);
$req->execute([$name, $username, $email, $choice, $message]);






?>
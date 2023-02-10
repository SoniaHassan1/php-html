<?php

require_once("database.php");

session_start();

$email = $_GET["email"];
$password = md5($_GET["password"]);

// $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

$statement = $db->prepare("SELECT * FROM users WHERE email = :email AND password = :password ");
$statement->bindParam(":email",$email);
$statement->bindParam(":password",$password);
$statement->execute();

// $result = $db->query($sql);

if ($record = $statement->fetch())  

{
     // Correct password : set up the authentication session variable
    // and store the username in it

    $_SESSION["gatekeeper"] = $record[email];
    $_SESSION["role_id"] = $record[roles_role_id];
    

    // Redirect to the main menu
    header ("location: ../dashboard.php");
}
else
{
   // The wrong password was supplied!
    echo "Incorrect email or password!";
}
?>
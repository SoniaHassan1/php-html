<?php

require_once("users.php");

session_start();

//$sql = "INSERT INTO users(email, password, name, address, phone_no, roles_role_id) 
 //           VALUES ('$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address]', '$_POST[phone_no]', '$_POST[role_id]')";



//$result = $db->query($sql);

$result = createUser($_POST); 

if ($result) {
   echo "You have successfully registered";
   $_SESSION["gatekeeper"] = $_POST[email];
   $_SESSION["role_id"] = $_POST[role_id];
    
    // Redirect to the main menu
    header ("location: ../dashboard.php");
}
else
{
   // The wrong password was supplied!
    echo "Failed to register!";
}
?>
<?php


require_once("users.php");

session_start();

//$sql = "INSERT INTO users(email, password, name, address, phone_no, roles_role_id) 
 //           VALUES ('$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address]', '$_POST[phone_no]', '$_POST[role_id]')";



//$result = $db->query($sql);
$result = updateUser($_POST['id'], $_POST['email']); 


if ($result) {
   echo "You have successfully updated";
    // Redirect to the main menu
    // header ("location: ../.php");
}
else
{
   // The wrong password was supplied!
    echo "Failed to update!";
}
?>
 <?php

// lock out user if not logged in
session_start();
if (!isset($_SESSION['user_id'])) header('location: login.php'); 


require_once("database.php");


function createUser($data) {
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'Admin') return;


    // validation
    if (preg_match("[^\D+$]", $data["role_name"])){
        
    global $db;

    $sql = "INSERT INTO users(email, password, name, address, phone_no, roles_role_id) 
            VALUES ('$data[email]', '$data[password]', '$data[name]', '$data[address]', '$data[phone_no]', '$data[role_id]')";

    $result = $db->query($sql);

    if ($result) {
        echo "Record inserted.";
    }
    else {
        echo "Failed to insert record.";
    }
    }
    else {
        echo "error";
    }
}

function retrieveUser($id) {

    //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM users WHERE user_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[name];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function updateUser($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE users SET email = 'test@email.com' WHERE user_id = $id";

    $result = $db->query($sql);

     if ($result) {
        echo "Record updated.";
    }
    else {
        echo "Failed to update record.";
    }
    }
    else {
        echo "error";
    }
}

function deleteUser($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM users WHERE user_id = $id";
    
     $result = $db->query($sql);

     if ($result) {
        echo "Record deleted.";
    }
    else {
        echo "Failed to delete record.";
    }
    }
    else {
        echo "error";
    }
}






//$data = ["email" => "test@test.com", "password" => "123", "name" => "Joe", "address" => "sample address", "phone_no" => "35463431", "role_id" => "7"];

//createUser($data);

//$id = 13;

//retrieveUser($id);


//updateUser($id);


//deleteUser($id);

?>

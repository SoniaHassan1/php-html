 <?php

require_once("database.php");


function createUser($data) {
    // validation
    if ( (preg_match("[^\D+$]", $data["email"])) && (preg_match("[^\S+$]", $data["password"]))
          && (preg_match("[^\D+$]", $data["name"])) && (preg_match("[^\D+$]", $data["address"])) 
          && (preg_match("[^\d+$]", $data["phone_no"])) && (preg_match("[^\d+$]", $data["role_id"])) ){
        
        global $db;
        $password=md5($data["password"]);

        $sql = "INSERT INTO users(email, password, name, address, phone_no, roles_role_id) 
                VALUES ('$data[email]', '$password', '$data[name]', '$data[address]', '$data[phone_no]', '$data[role_id]')";

        $result = $db->query($sql);

        if ($result) {
            // echo "Record inserted.";
            return True;
        }
        else {
            // echo "Failed to insert record.";
            return False;
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
    
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function retrieveUserByName($name) {

    //validation
    if ($name!="") {
        global $db;

        $sql = "SELECT * FROM users WHERE name = '$name'";

        $result = $db->query($sql);

        if ($result) {
            return $result->fetchAll();
        }
        else {
            echo "Failed to retrieve record.";
            return false;
        }
    }
    else {
        echo "error";
        return false;
    }
}


function updateUser($id ,$email) {

    //validation
    if ($id != "") {

        global $db;

        $sql = "UPDATE users SET email = '$email' WHERE user_id = '$id' ";

        $result = $db->query($sql);

        if ($result) {
            // echo "Record updated.";
            return true;
        }
        else {
            // echo "Failed to update record.";
        return false;
        }
    }
    else {
        // echo "error";
        return false;
    }
}

function deleteUser($id) {

    //validation
    if ($id != "") {

        global $db;

        $sql = "DELETE FROM users WHERE user_id = '$id' ";

        $result = $db->query($sql);

        if ($result) {
            
            return true;
        }
        else {
            
            return false;
        }
    }
    else {
        
        return false;
    }
}




//createUser($data);



//retrieveUser($id);

// retrieveUserByName("Sean");

//updateUser($id);


//deleteUser($id);

?>

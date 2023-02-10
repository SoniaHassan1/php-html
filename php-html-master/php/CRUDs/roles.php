 <?php

require_once("database.php");

function createRoles($data) {

// validation
    if (preg_match("[^\D+$]", $data["role_name"])){
        
        global $db;

        $sql = "INSERT INTO roles(role_name) 
                VALUES ('$data[role_name]')";

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

function retrieveRoles($id) {

    //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM roles WHERE role_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
    echo $record[role_name];
    }
    else {
        echo "Failed to retrieve record.";
    } 
    }
    else {
        echo "error";
    }

}

function updateRoles($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE roles SET role_name = 'new' WHERE role_id = $id";

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

function deleteRoles($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM roles WHERE role_id = $id";
    
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





//$data = ["role_name" => "abc"];

//createRoles($data);

//$id = 11;

//retrieveRoles($id);

//updateRoles($id);

//deleteRoles($id);

?>

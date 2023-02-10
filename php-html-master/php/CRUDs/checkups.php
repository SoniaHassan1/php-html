 <?php

require_once("database.php");


function createCheckups($data) {

    //validation
    if (preg_match("[^\D+$]", $data["checkup_description"])  && preg_match("[^\d+$]", $data["checkup_date"]) && preg_match("[^\d+$]", $data["dr_id"]) && preg_match("[^\d+$]", $data["patient_id"]) ){ 
        global $db;

        $sql = "INSERT INTO checkups(checkup_date, checkup_description, dr_id, patient_id) 
                VALUES ('$data[checkup_date]', '$data[checkup_description]', '$data[dr_id]', '$data[patient_id]')";

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

function retrieveCheckups($id) {

     //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM checkups WHERE id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[id];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function updateCheckups($id) {

     //validation
    if ($id>0) {

        global $db;
        $sql = "UPDATE checkups SET checkup_date = '980' WHERE id = $id";

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

function deleteCheckups($id) {

     //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM checkups WHERE id = $id";
    
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






//$data = ["checkup_date" => "123", "checkup_description" => "xyz", "dr_id" => "1", "patient_id" => "6"];

//createCheckups($data);

//$id = 10;


//retrieveCheckups($id);


//updateCheckups($id);


//deleteCheckups($id);

?>

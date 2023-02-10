 <?php

require_once("database.php");


function createMedication($data) {

    // validation
    if ((preg_match("[^\D+$]", $data["medication_type"])) &&  (preg_match("[^\d+$]", $data["treatment_id"])) ) {
       
        global $db;

        $sql = "INSERT INTO medication(medication_type, treatment_id) 
                VALUES ('$data[medication_type]', '$data[treatment_id]')";

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

function retrieveMedication($id) {
    //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM medication WHERE medication_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[medication_id];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function updateMedication($id) {
    //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE medication SET medication_type = 'new' WHERE medication_id = $id";

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

function deleteMedication($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM medication WHERE medication_id = $id";
    
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






//$data = ["medication_type" => "test", "treatment_id" => "1"];

//createMedication($data);

//$id = 5;

//retrieveMedication($id);


//updateMedication($id);


//deleteMedication($id);

?>

 <?php

require_once("database.php");


function createTreatmentCategory($data) {

    // validation
    if ( (preg_match("[^\D+$]", $data["treatment_description"])) ) {
        
        global $db;

        $sql = "INSERT INTO treatment_category(treatment_description) 
                VALUES ('$data[treatment_description]')";

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

function retrieveTreatmentCategory($id) {
    //validation
    if ($id>0) {

     global $db;

     $sql = "SELECT * FROM treatment_category WHERE treatment_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[treatment_description];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function updateTreatmentCategory($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE treatment_category SET treatment_description = 'dialysis' WHERE treatment_id = $id";

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

function deleteTreatmentCategory($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM treatment_category WHERE treatment_id = $id";
    
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






//$data = ["treatment_description" => "Failure"];
//createTreatmentCategory($data);

//$id = 5;

//retrieveTreatmentCategory($id);

//updateTreatmentCategory($id);


//deleteTreatmentCategory($id);

?>

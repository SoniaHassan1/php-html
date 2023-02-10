 <?php

require_once("database.php");


function createDiseases($data) {
    // validation
    if ((preg_match("[^\d+$]", $data["diagnosis_date"])) && (preg_match("[^\d+$]", $data["disease_type_id"]))
     && (preg_match("[^\d+$]", $data["diagnosis_dr_id"])) ) {
        
        global $db;

        $sql = "INSERT INTO diseases(diagnosis_date, disease_type_id, diagnosis_dr_id) 
                VALUES ('$data[diagnosis_date]', '$data[disease_type_id]', '$data[diagnosis_dr_id]')";

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

function retrieveDiseases($id) {

     //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM diseases WHERE disease_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[disease_id];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}



function updateDiseases($id) {

     //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE diseases SET diagnosis_date = '321' WHERE disease_id = $id";

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

function deleteDiseases($id) {

     //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM diseases WHERE disease_id = $id";
    
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






//$data = ["diagnosis_date" => "123", "disease_type_id" => "1", "diagnosis_dr_id" => "1"];

//createDiseases($data);

//$id = 6;


//retrieveDiseases($id);


//updateDiseases($id);


//deleteDiseases($id);

?>

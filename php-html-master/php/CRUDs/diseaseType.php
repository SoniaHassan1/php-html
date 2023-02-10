 <?php

require_once("database.php");


function createDiseaseType($data) {

    // validation
    if (preg_match("[^\D+$]", $data["disease_name"]) && preg_match("[^\D+$]", $data["disease_description"])){
        
        global $db;

        $sql = "INSERT INTO disease_types(disease_name, disease_description) 
                VALUES ('$data[disease_name]', '$data[disease_description]')";

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

function retrieveDiseaseType($id) {

    //validation
    if ($id>0) {
     global $db;

     $sql = "SELECT * FROM disease_types WHERE type_id = $id";
     
     $result = $db->query($sql);

     if ($result) {
        $record = $result->fetch();
	echo $record[type_id];
    }
    else {
        echo "Failed to retrieve record.";
    }
    }
    else {
        echo "error";
    }
}

function updateDiseaseType($id) {

    //validation
    if ($id>0) {

    global $db;
    $sql = "UPDATE disease_types SET disease_name = 'new' WHERE type_id = $id";

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

function deleteDiseaseType($id) {
    //validation
    if ($id>0) {

    global $db;
    $sql = "DELETE FROM disease_types WHERE type_id = $id";
    
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






$data = ["disease_name" => "test", "disease_description" => "xyz"];

createDiseaseType($data);

//$id = 6;

//retrieveDiseaseType($id);

//updateDiseaseType($id);


//deleteDiseaseType($id);

?>

<?php

require_once("diseases.php");

session_start();



$result = retrieveDiseases($_GET['search']); 

if ($result) {

	foreach ($result as $row)
	{
	    echo "<p>";
	    echo " Disease_id ". $row["disease_id"] . "<br/> ";
	    echo " Diagnosis date " . $row["diagnosis_date"] . "<br/> " ; 
	    echo " Disease type id " . $row["disease_type_id"] . "<br/>" ; 
	    echo "</p>";
	}
}

?>
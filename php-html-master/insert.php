home.php

<?php

// CRUD functions 

require_once("database.php");

function createUser ($data) {
  // use the database connection
  global $db;

  // determine sql queury 
  $sql = "INSERT INTO users (user_id, mail, password, name, address, phone_no, roles_role_id) 
          VALUES ('', 'test@test.com' , 'abc' , 'Patrick' , 'test address' , '09980980', '03')";
		  
  // execute query 
  $result = $db->query($sql);
  
  if ($result != false) {
	echo "Patient created.";
  }
  else {
	echo "Patient record not created.";
  }
}

//Testst create  function


createUser($data);

?>
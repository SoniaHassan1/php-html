<!DOCTYPE html>
<html>
<head>

    <title>PATIENT</title>
    <style>
        .center {
            text-align: center;
        }
        .right {
            float: right;
        }
        .button {
            margin-left: 2em;
            background-color: lightgrey;
            border-radius: .3em;
            padding: .2em .5em;
        }
        body {
            background-color: #f7e6e8;
            margin: 1.5em 3em;
        }
        .form-wrapper {
            background-color: white;
            border-radius: 1em;
            padding: 1em 2.5em;
            margin-top: 1em;
        }
        .btn {
            background-color: #ff1e8f;
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }

/* Darker background on mouse-over */
        .btn:hover {
            background-color: #cb1eff;
        }
    </style>
</head>
<body>

     <?php

        require_once("database.php");



        function userByName($name) {

            global $db;
             

           $sql= "SELECT name, email, role_id, role_name
                    FROM users, roles
                    WHERE users.roles_role_id = roles.role_id 
                    AND roles.role_id = 7
                    AND users.name LIke '_%_%'";

             
            $result = $db->query($sql);

            if ($result) {
                 while ($record = $result->fetch()){
                    echo "<p>";
                    echo "Name: " . $record["name"] . "<br/>"; 
                    echo "Role: " . $record["role_id"] ." <br/> ";
                    echo "Email: " . $record["email"] . "<br/>";
                    echo "Role name: " . $record["role_name"] . "<br/>", 
                    "</p>";

                }
            }
            else {
                echo "Failed to retrieve record.";
            }
        }




        userByName($_GET);

     ?>
    
</body>
</html>


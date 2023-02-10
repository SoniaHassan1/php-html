<?php
session_start();
$_SESSION["role_id"];
    // Test that the authentication session variable exists
  if (!isset($_SESSION["gatekeeper"]) || $_SESSION["role_id"] != 9)
    {
       // Redirect to the main menu
        header ("Location: dashboard.php");
    }


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>ADMIN DASHBOARD</title>
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
            background-color: #ff1ea8;
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

    <h1 class="center">ADMIN DASHBOARD</h1>
    
    <main>
        <h2>Select an action:</h2>
            <div style="float :right;"><a class="btn" href="api/check_logout.php"><i class="fas fa-user"></i> Logout</a></div>
            <div><a class="btn" href="api/admin_insert.php"><i class="fas fa-user"></i> Insert</a>
            <a class="btn" href="api/admin_delete.php"><i class="fas fa-comment-medical"></i> Delete</a>
            <a class="btn" href="api/admin_retrieve.php"><i class="fas fa-comment-medical"></i> Retirieve</a>
            <a class="btn" href="api/admin_update.php"><i class="fas fa-capsules"></i> Update</a></div>
    </main>
    
</body>
</html>
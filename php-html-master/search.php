<?php

session_start();

require_once("api/database.php");
$search_query = $_POST["search_query"];

$query = "SELECT * FROM users WHERE name = ?";
$stmt = $db->prepare($query);
$stmt = $db->bindParam(1, $search_query);
$stmt->execute();

while ($row = $stmt->fetch()) {
?>

<html>
<head>
    <title>search results</title>
</head>
<body>
<div class="inner">
    <div class="center flex column"><?php

session_start();

require_once("api/database.php");
$search_query = $_POST["search_query"];

$query = "SELECT * FROM users WHERE name = $search_query";
$stmt = $db->prepare($query);
$stmt->execute();

if ($row = $stmt->fetch()) {
    $_SESSION["search_query"] = $row['name'];
redirect('search_results.php');
}
?>

<html>
<head>
    <title>DASHBOARD</title>
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
        #search_field {
            padding: 1em;
            border-radius: 20em;
            border: 2px solid lightgrey;
        }
    </style>
</head>
<body>
    <h1 class="center">DASHBOARD</h1>
    <p class="center">Hey</p>

    <div class="form-wrapper right">
        <form action="" method="post" class="right">
            <h3>Search:</h3>
            <input type="text" name="search_query"/>
            <input type="submit" class="button"/>
        </form>
    </div>
</body>
</html>
        <?php
        // Get the venue name and type from the session variable $venueId.
        $query = "SELECT * FROM users WHERE name = $search_query";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $value) {
            echo $value;
        }
        ?>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>

    <title>DELETE USER</title>
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

    <h1 class="center">DELETE USER</h1>
    
    <main>
        <h2>Enter User name you want to delete</h2>
            <form method="post" action="check_delete.php">
                  User id:<br>
                  <input type="text" name="user_id" >
                  <br> 
                   <input type="submit" value= "Delete" />
                   </form>             
    </main>
    
</body>
</html>
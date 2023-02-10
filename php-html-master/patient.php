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

    <h1 class="center">PATIENT</h1>
    
    <main>
        <h2>Create Patient</h2>
            <form action="api/check_patient.php" method="post">
                  Email:<br>
                  <input type="email" name="email" >
                  <br>
                  Password:<br>
                  <input type="password" name="password" >
                  <br>
                  Name:<br>
                  <input type="text" name="name" >
                  <br>
                  Address:<br>
                  <input type="text" name="address" >
                  <br>
                  Phone no:<br>
                  <input type="number" name="phone_no" >
                  <br>
                  <input type="submit" value= "Register" />
            </form> 
        
 
        
        <h3>Search for Patient</h3>
        <form action="api/check_search.php" method="get">
                  Enter value:<br>
                  <input type="text" name="search" >
                  <br>
                  <input type="submit" value="Search"/> 
        </form>
        
    </main>
    
</body>
</html>
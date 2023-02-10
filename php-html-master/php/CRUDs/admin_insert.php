<!DOCTYPE html>
<html>
<head>

    <title>USER</title>
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

    <h1 class="center">USER</h1>
    
    <main>
        <h2>Create User</h2>
            <form action="check_patient.php" method="post">
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
                  Role name:<br>
                  <select name="role_id">
                      <option value="1">Doctor</option>
                      <option value="6">Nurse</option>
                      <option value="7">Patient</option>
                  </select>
                  <br>
                  <input type="submit" value= "Register" />
            </form> 

        
    </main>
    
</body>
</html>
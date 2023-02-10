
<!DOCTYPE html>
<html>

<head>

	<title>ENTER YOUR DETAILS</title>
	<style>
		.center{
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



	
    <h1 class="center">WELCOME! ENTER YOUR LOGIN DETAILS</h1>

    <div class="form-wrapper left">
	    <form method="get" action="api/check_login.php" >
		Email: <input name="email" id="search_field"/>
		Password: <input name="password" id="search_field" type="password" />
		<input type="submit" value="Login!" />
		</form>
    </div>

    <div id="search_results" style="display: none;"></div>


    <main>
        <h2>REGISTER</h2>
            <form method= "post" action="api/check_reg.php">
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
                  <select name = "role_id">
                      <option value="1">Doctor</option>
                      <option value="6">Nurse</option>
                      <option value="7">Patient</option>
                  </select>
                  <br>
                  <input type="submit" value="Register" />
            </form> 
        
 
        
         
    </main>
</body>

</html>

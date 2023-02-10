<!DOCTYPE html>
<html>
<head>

    <title>TREATMENT</title>
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
        <script>
        function showHint(str) {
            if (str.length == 0) { 
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "api/check_search.php?q=" + str, true);
                xmlhttp.send();
            }
        }
        </script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
Name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>
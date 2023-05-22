<!-- 
<html>
   <title></title>
    <head>
    <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
    </head>
    <body>
        <form onSubmit="return validate();" ">
        Password: <input type="text" id="password" name="password" /><br/>
        Re-enter Password: <input type="text" id="confirm_password" name="confirm_password" />
        <input type="submit" value="submit"/>
        </form>
    </body>
 </html>










 <html>
<?php

    if ($_POST["password"] === $_POST["confirm_password"]) 
    {
        echo "<script>alert('Password matched');</script>";
    }
    else 
    {
        echo "<script>alert('Passwords do no match');</script>";
    }

?>
</html> -->


<!DOCTYPE html>
 
<head>
    <title>Confirm Password validation using javascript</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgb(50, 57, 78);
            display: flex;
            justify-content: center;
            align-items: center;
        }
 
        .main {
 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgb(34, 34, 34);
            height: 400px;
            width: 300px;
            margin-top: 15%;
            border-radius: 10px;
            box-shadow: 2px 4px 6px rgb(0, 0, 0);
        }
 
        .pass {
            display: flex;
            flex-direction: column;
        }
 
        .image h2 {
            color: rgb(2, 149, 27);
            font-size: 30px;
            font-family: sans-serif;
            margin-bottom: 50px;
        }
 
        .username input,
        .pass input {
            font-family: sans-serif;
            margin-bottom: 20px;
            height: 30px;
            border-radius: 100px;
            border: none;
            text-align: center;
            outline: none;
        }
 
        .submit_btn {
            height: 30px;
            width: 80px;
            border-radius: 100px;
            border: none;
            outline: none;
            background-color: rgb(0, 179, 95);
            margin-top: 15px;
        }
 
        .submit_btn:hover {
            background-color: rgba(0, 179, 95, 0.596);
            color: rgb(14, 14, 14);
            cursor: pointer;
        }
    </style>
</head>
 
<body>
    <div class="main">
        <div class="image">
            <h2>GeeksforGeeks</h2>
        </div>
        <div class="username">
            <input type="text" name="username" placeholder="Dummyuser">
        </div>
        <div class="pass">
            <input id="pass" type="password" name="pass" placeholder="Enter Password" required"">
            <input id="confirm_pass" type="password" name="confirm_pass" placeholder="Confirm Password" required
                   onkeyup="validate_password()">
        </div>
        <span id="wrong_pass_alert"></span>
        <div class="buttons">
            <button id="create" class="submit_btn" onclick="wrong_pass_alert()"> Submit </button>
        </div>
    </div>
    <script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Passwords do not match';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
 
        function wrong_pass_alert() {
            if (document.getElementById('pass').value != "" &&
                document.getElementById('confirm_pass').value != "") {
                alert("Your response is submitted");
            } else {
                alert("Please fill all the fields");
            }
        }
    </script>
</body>
 
 
</html>
<?php
  $server_name = "localhost";
  $user_name = "root";
  $pass = "";
  $database_name = "disaster guardian";
  
  $conn = mysqli_connect($server_name, $user_name, $pass, $database_name);
  if(!$conn){
    die("Connection failed" . mysqli_connect_error());
  }

  if(isset($_POST['signup'])){
    $f_name = $_POST['first_name'];
    $s_name = $_POST['last_name'];
    $mobile = $_POST['mobile_no'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    
    $sql_query = "INSERT INTO sign_up (first_name,last_name,mobile_no,email,gender,password) VALUES ('$f_name','$s_name','$mobile','$email','$gender','$pass')";
    if(mysqli_query($conn,$sql_query)){
        //echo "Successful";
        header("Location: contactAccess.html");
        exit();
    }else{
        echo '<script type="Oops...An error occured");</script>';
    }
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>

     <style>
          body {
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          background-color: #f0f0f0;
          margin: 0;
          padding: 0;
         }

        header{
           color: black;
        }
        header h1{
           display: flex;
           margin-left: 10px;
           padding: 5px 5px;
         }


         .signup-container {
            background-color: #111;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            color: #fff;
}

h1 {
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="radio"] {
    margin-right: 5px;
}

button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    margin-left: 40%;
}

button:hover {
    background-color: #0056b3;
}
.log_pass a{
    text-align: center;
    padding-left: 10px;
    margin-left: 20%;
    text-decoration: none;
}
     </style>

    <script>
        var password;
        function submit(){
        password = document.getElementById("password");
        var len = password.length;
         if(len<8){
            alert("Password should be of atleast 8 characters");
         }
        }
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <h1>DISASTER GUARDIAN</h1>
        </div>
    </header>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="first-name"></label>
                <input type="text" placeholder="First Name" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name"></label>
                <input type="text" placeholder="Last Name" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="mobile-number"></label>
                <input type="tel" id="mobile-number" placeholder="Mobile Number" name="mobile_no" required>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" placeholder="Email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" placeholder="Password" id="password" name="password" required>
            </div>
            <div class="form-group">
               <button type="submit" name="signup" onclick="submit">Sign Up</button>
            </div>
            <div class="log_pass" id="log_pass">
                <a href="login.php">Login</a>
                <a href="forgotPass.php">Forgot password?</a>
            </div>
        </form>
    </div>
    <marquee behavior="" direction="left">Welcome to DISASTER GUARDIAN</marquee>
    </body>

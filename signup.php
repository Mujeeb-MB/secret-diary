<?php

include 'config.php';

error_reporting(0);

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);


    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);


        if(!$result-> num_rows > 0){
            $sql = "INSERT INTO users(email, password)
                    VALUES ('$email', '$password')";
            $result = mysqli_query($conn, $sql);


            if($result){
                echo "<script>alert('Signned Up Successfully.')</script>";
                $email="";
                $_POST['password']="";
                $_POST['cpassword']="";
            } else{
                    echo "<script>alert('Something is Wrong.')</script>";
                }
        } else{
                echo "<script>alert('email already exists.')</script>";
            }
    } else{
            echo "<script>alert('Password not matched')</script>";
        }
}      
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            background-image: url(diary1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #ffffff;
            text-align: center;
        }

        input[type=email],[type=password]{
            width: 350px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: auto;
            background-color: #12af46da;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #15b84b;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 100px;
        }
        h3{
            font-family: Arial, Helvetica, sans-serif;
        }
        a{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        button{
            color:rgb(30, 111, 233);
        }

    </style>
</head>

<body>
    <h1>Secret Diary</h1>
    <h3>Store your thoughts permanently and securely.</h3>
    <h4>Intrested? Sign up now.</h4>
    <div>
        <form method="POST">
            <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>"> <br>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>"><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" value ="<?php $_POST['cpassword']; ?>"><br>
            <input type="checkbox"> Stay logged in<br>
            <input name="submit" type="submit" value="Sign Up!"><br>
            <button><a href="login.php">Log In!</a></button>
        </form>
    </div>
</body>

</html>
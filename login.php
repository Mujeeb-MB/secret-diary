<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($conn, $sql);
    if($result-> num_rows >0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: diary.php");
    } 
     else{
        echo "<script>alert('Email or Password is Incorrect.')</script>";
        }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <h4>Log in using your email and passward.</h4>
    <div>
        <form action="" method ="POST">
            <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>"> <br>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>"><br>
            <input type="checkbox"> Stay logged in<br>
            <input type="submit" name="submit" value="Log In!"><br>
            <button ><a href="signup.php">Sign Up!</a></button>
        </form>
    </div>
</body>

</html>
<?php

$conn = mysqli_connect('localhost','Hr','hr','student_grevience');
if(mysqli_connect_error())
{
    echo"cannot connect";
}
if(isset($_POST["soham"]))
{
    $username = $_POST['userName'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM admin_login WHERE Admin_name='$username' AND password = '$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if(!$row)
    {
        echo("Invalid user name or password");
    } else {
        header('Location: admindashboard.html');
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="admin-page.css">
</head>
<body>
    

 <div class="wrapper">
    <div class="logo">
        <img src="images/adminlogo.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Admin Login
    </div>
    <form action="index.php" method="POST" class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="userName" id="userName" placeholder="Username">
        </div> 
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
           
        </div> 
        <button name= "soham" class="btn mt-3">Login</button>
    </form>
    
  </div>
</body>
</html>
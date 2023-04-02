
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        body{

            background-image: url("green2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="login.webp"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form class="card rounded-3 p-5" method="POST">
                <h3 class="mb-3">Login</h3>
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" /> 
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>
                <!-- Submit button -->
                <button onclick="submit()" name="submit" class="btn btn-success btn-lg btn-block">Login</button>
                <div class="divider  align-items-center my-4">
                  <p class="text-center fw-bold  mb-0 text-muted">OR
                    <a href="registration.php" class="ms-2">SignUp Here</a>
                  </p>
                  
                </div>
                <?php
$conn = mysqli_connect("localhost","Hr","hr","student_grevience");
if(isset($_POST['submit'])){
$email =  $_POST['email'];
$password =  $_POST['password'];
$query = "SELECT * FROM register WHERE email = '$email'  And password = '$password'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) >0){
while($row = mysqli_fetch_array($result)){
    echo $password == $row['password'];
    if($password == $row['password']){
        echo "hi";

        header("Location:dashboard.php?id=".$row["ID"]);
        
    }
    else{
        echo '<script> alert("Wrong Email-Id or Password" )</script>' ;
    }
}
}
echo "<script> alert('Wrong Email-Id or Password' )</script>" ;
}
?>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>

</html>



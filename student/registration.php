<?php
$conn = mysqli_connect("localhost","Hr","hr","student_grevience");
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $branch = $_POST['branch'];
  $class = $_POST['class'];
  $year = $_POST['year'];
  $gender = $_POST['gender'];
  $pass = $_POST['pass'];
  $query = "INSERT INTO `register`(`name`, `email`, `branch`, `class`, `year`, `gender`, `password`) VALUES ('$name', '$email', '$branch', '$class', '$year', '$gender', '$pass')";

  $result = mysqli_query($conn, $query);

  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
  
 /*.fullbhai{
    background-color: rgb(43, 226, 107);
  }*/
  body{

background-image: url("green2.jpg");
background-repeat: no-repeat;
background-size: cover;
}
    .sec{
        background-image: url(./assets/images/green2.jpg);
        background-repeat: no-repeat;
        background-size: auto 100%;
        background-size: cover;
        
    }
</style>
<body class="fullbhai" >
 
    <section class="h-100 h-custom sec container-fluid" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <div class="card-body p-4 p-md-5">
                <b><h1 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Register Yourself Here ! </h1></b> 
      
                  <form class="px-md-2" action="registration.php" method="POST">
                     <div class="form-outline mb-4">
                        <label class="form-label" for="name">Enter your Full Name</label>
                      <input type="text" id="name" name="name" class="form-control" required />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Enter your email:</label>
                      <input type="text" id="email" name="email" class="form-control" required />
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div>
                            <label for="branch" class="form-label" >Branch
                            </label>  
                          <select class="select  form-control" id="branch" name="branch">
                            <option value="1">CMPN</option>
                            <option value="2">IT</option>
                            <option value="3">EXTC</option>
                            <option value="4">AI-DS</option>
                          </select>
                        </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="class" class="form-label" >Class
                            </label>  
                          <select class="select  form-control" id="class" name="class">
                            <option value="1">D2A</option>
                            <option value="2">D2B</option>
                            <option value="3">D2C</option>
                            <option value="4">D7A</option>
                            <option value="5">D7B</option>
                            <option value="6">D7C</option>
                            <option value="7">D12A</option>
                            <option value="8">D12B</option>
                            <option value="9">D12C</option>
                          </select>
                        </div>
                        </div>
                        <!-- Second -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                              <div>
                                  <label for="year" class="form-label" >Year
                                  </label>  
                                <select class="select  form-control" id="year" required name="year">
                                  <option value="1">First</option>
                                  <option value="2">Second</option>
                                  <option value="3">Third</option>
                                  <option value="4">Fourth</option>
                                </select>
                              </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="gender" class="form-label" >Gender
                                  </label>  
                                <select name="gender" class="select  form-control" id="gender">
                                  <option value="M">Male</option>
                                  <option value="F">Female</option>
                                  <option value="O">Other</option>
                                </select>
                              </div>
                              </div>
                        <!-- Second -->
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-6">
                        <div>
                        <label class="form-label" for="password">Enter your Password</label>
                          <input type="password" name="pass" id="password" class="form-control" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                        <label class="form-label" for="confirmpassword">Confirm  Password</label>
                          <input type="password" id="confirmpassword" class="form-control" required />
                        </div>
                      </div>
                    </div> 
                    <button type="submit"  name="submit" class="btn btn-success text-center">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body{

            background-image: url("green2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <form method="POST">
    <div class="container-fluid">
    <div class=" bg-dark text-light fs-3 " style="border-radius: 3px;">
       <p class="mx-5">Register A Complaint !</p> 
    </div>
    <!-- <div class="m-3">
    <label for="" class="">Tracking ID</label>
   <input type="text" value="T202" class="m-2" readonly >
    </div>  -->
    <div class="row">
    <div class="m-4 col-md-5 mt-1">
        <div>
        <label for="category" class="form-label">Category</label>
        
        <select name="category" id="category"  class="form-control"value="<?php  if(isset($_POST['category'])) echo $_POST['category']; ?>" >
            <option value="Hygiene">Hygiene</option>
            <option value="Management">Management</option>
            <option value="Infrastructure">Infrastructure</option>
            <option value="Admission">Admission</option>
            <option value="Aminities and services">Aminities and services</option>

            <option value="Academics Matters">Academics Matters</option>
            <option value="Fee payments/refunds">Fee payments/refunds</option>
            <option value="Student Conflicts">Student Conflicts</option>
            <option value="Admission">Admission</option>

            <option value="Examination">Examination</option>
            <option value="Railway Concession">Railway Concession</option>
        </select>
        
    </div>
    </div>
    <div class="m-4 col-md-5 mt-1">
        <div>
        <label for="date" class="form-label">Date</label>
        <!-- <select name="category" id="category" class="form-control">
            <option value="">hi</option>
            <option value="">hello there</option>
            <option value="">hi</option>
        </select> -->
        <input type="date" class="form-control" name="date" value="<?php  if(isset($_POST['date'])) echo $_POST['date']; ?>">

    </div>
    </div>
</div>
    <div class="col-md-9 m-4 mt-1">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="" cols="50" rows="5" class="form-control"  value="<?php  if(isset($_POST['description'])) echo $_POST['description']; ?>"></textarea>
    </div>
<div class="row">
    <div class="col-md-4 m-4 mt-1">
        <label for="File" class="form-label">Upload File (If any)</label>
        <input type="file" class="form-control" name="file"  value="<?php  if(isset($_POST['file'])) echo $_POST['file']; ?>">
    </div> 
  <input type="hidden" value="<?= $_GET["id"];?>" name="id"> 

</div>
<div class="col-md-4 mx-5  align-items-center">
    <button type="submit"  name="submit" class="btn btn-success text-center">Submit</button>
</div> 
</div>

</form>
</body>
<?php

$conn = mysqli_connect("localhost","Hr","hr","student_grevience");
 // set the PDO error mode to exception
 
 

 if(isset($_POST['submit'])){
 
    $date =  $_POST['date'];
    $discription =  $_POST['description'];
    $category = $_POST['category'];
    $file = $_POST['file'];
    $sid=$_POST["id"];
 $sql = " insert  into `student_complain` (complain_category,complain_date,complain_description,complain_file, complain_status, sid)  values ('$category','$date','$discription','$file', 'pending', $sid)";
 
 // use exec() because no results are returned
 $result =mysqli_query($conn,$sql);
 if($result){
 echo "<script>window.location.href='dashboard.php?id=$sid';</script>";
 }
 }


?>

</html
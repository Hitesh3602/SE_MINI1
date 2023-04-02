<?php
$conn = mysqli_connect('localhost','Hr','hr','student_grevience');
//$conn = mysqli_connect('localhost','root','maha700e','db_test');
if(!$conn)
{
    echo 'connection error'. mysqli_connect_error();
}
else{
//    echo '/Connected'."<br>";
}
$id = $_GET['id'];

$sql = " select * from  student_complain where sid=$id";
$result = mysqli_query($conn,$sql);
echo "<center>
<h1>View Complaint</h1>
</center>
<br> 

<table class='table'>
<tr>
<th>Category</th>
<th>Date</th> 
<th>Description</th>
<th>File</th>
<th>Status</th>

</tr>";
while($row =mysqli_fetch_array($result))
{
    if($row['complain_status']=='pending'){
        $button="<td><Button class='btn btn-danger'>Pending</Button></td>";

      }
      else if($row['complain_status']=='approved'){
        $button="<td><Button class='btn btn-success'>Approved</Button></td>";
      }
      else{
        $button="<td><Button class='btn btn-warning'>In Progress</Button></td>";
      }
   //$country = $conn->query("SELECT * FROM Master_Country WHERE sr_id = {$row->country_name}");
//$country = $country->fetch_object();
   // echo $row['st_name'] ."&nbsp;&nbsp;". $row['st_f_country']."&nbsp;&nbsp;". $row['st_f_state']."&nbsp;&nbsp;".$row['st_f_city']."&nbsp;&nbsp;".$row['area_name']." <br>";
   echo "<tr>";
   echo "<td>" . $row['complain_category'] . "</td>";
   echo "<td>" . $row['complain_date'] . "</td>";
   echo "<td>" . $row['complain_description'] . "</td>";
   echo "<td>" . $row['complain_file'] . "</td>";
echo $button;   
   echo "</tr>";    
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
        body{

            background-image: url("green2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body{

            /* background-image: url(./assets/images/greenlight.jpg);
            background-repeat: no-repeat;
            background-size: cover; */
        }
    </style>
</head>

</html>
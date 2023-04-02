<?php 
$conn = mysqli_connect('localhost','Hr','hr','student_grevience');

if(!$conn)
{
    echo 'connection error'. mysqli_connect_error();
}


$query = " select * from  student_complain";
$rows = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="viewcomplaintadmin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
<header>
		<h1>Student Complaint</h1>
</header>
<div>
<table class="table">
        <thead>
          <tr>
            <th scope="col">Sr no</th>   
            <th scope="col">Gmail</th>         
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">View complaint</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          while($row =mysqli_fetch_array($rows)):
            $query="select email from register where id=".$row['sid'];
            $result=mysqli_query($conn, $query);
            $Email_id=mysqli_fetch_array($result)[0];
            if($row['complain_status']=='pending'){
              $button="<td><Button class='btn btn-danger'>Pending</Button></td>";

            }
            else if($row['complain_status']=='approved'){
              $button="<td><Button class='btn btn-success'>Approved</Button></td>";
            }
            else{
              $button="<td><Button class='btn btn-warning'>In Progress</Button></td>";
            }
          ?>
          <tr>
            <th scope="row"><?= $row["complain_id"];?></th>
            <td><?= $Email_id;?></td>
            <td><?= $row["complain_category"];?></td>
            
            <?=$button;?>
            
            <td><button type="button" class="btn btn-link"><a href="viewclick.php?id=<?= $row["complain_id"];?>">View</a></button></td>
          </tr>
          
          <?php
          endwhile;
          ?>
        </tbody>
      </table>
</div>
</body>
</html>
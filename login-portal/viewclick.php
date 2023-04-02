<?php 
$conn = mysqli_connect('localhost','Hr','hr','student_grevience');

if(!$conn)
{
    echo 'connection error'. mysqli_connect_error();
}
if(isset($_POST["submitbro"])){
 
  $status=$_POST['status'];
  $id=$_POST['id'];
  $query="update student_complain set complain_status='$status' where complain_id=$id";
  mysqli_query($conn,$query);
  header('Location: viewcomplaintsadmin.php');
}
$id=$_GET['id'];
$query = " select * from  student_complain where complain_id=$id";
$rows = mysqli_query($conn,$query);
$row = (mysqli_fetch_array($rows));
$sid = $row['sid'];
$query = "SELECT name FROM register where ID = $sid";
$result = mysqli_query($conn, $query);
$name = mysqli_fetch_array($result)['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="viewclick.css">
    <title>Document</title>
</head>
<body>
    <header>
		<h1>View And Resolve Complaint!</h1>  
	</header>

   
    <form action="viewclick.php" method="POST" style="margin-top: -10%;">
    
      <fieldset style="width:60%; margin:15%;">
        <legend style="Font-size:large;font-weight:bold">Student Details</legend>
        <div style="margin-left:4%;" >
        <label style="margin-top:4%;" for="name"><u>Name</u>: <?= $name;?></label>
        <!-- <input type="text"style="width:50%" id="name" name="name" required> -->
     </div>
        <div style="margin-left:4%;">
        <div style="display:inline-block;">
        <!-- <label for="division">Division</label> -->
        <!-- <input type="text" style="width:70%" id="division" name="division" required> -->
    </div>
    <div style="display:inline-block;">
        <!-- <label for="roll">Roll No</label> -->
        <!-- <input type="text" style="width:70%" id="roll" name="roll" required> -->
    </div>
</div>
<div style="margin-left:4%; margin-bottom:20px">
    <div style="display:inline-block;">
        <label for="category"><u>Category</u>: <?= $row['complain_category'];?></label>
        <!-- <input type="text" style="width:70%" id="category" name="category" required> -->
        </div>
        <div style="display:inline-block;">
        <!-- <label for="dept">Concerned Department</label> -->
        <!-- <input type="text"style="width:70%" id="dept" name="dept" required> -->
        </div>
    </div>
    <div style="
    margin-left: 4%;
">
        <label for="date"><u>Date</u>: <?= $row['complain_date'];?></label>
        <!-- <input type="date" id="date" name="date" required=""> -->
        </div>
        <!-- <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
        </div> -->
      <br>
        <div style="
    margin-left: 4%;">
        <label for="description"><u>Description</u>: <?= $row['complain_description'];?></label>
        <!-- <textarea id="description" style="width:50%" name="description" rows="4" required></textarea> -->
    </div>
    <br>
    <div style="margin-left:4%;" >
        <label for="file"><u>Uploaded File</u>: </label>
        <!-- <input type="file" id="file" name="file"> -->
        </div>
      <br>
        
        <!-- <label for="srno">Sr No</label>
        <input type="text" id="srno" name="srno" required>
         -->
         <div class="status" style="margin-left:4%;" >
          <label for="status"><u>Current Status</u>: <?= $row['complain_status'];?></label>
          
        </div>
        
        <div class="status" style="margin-left:4%;" >
          <label for="status"> <u>Change Status</u>: </label>
          <select id="status" name="status" style="width:90%">
            <option value="pending" >Pending </option>
            <option value="In Progress">In progress</option>
            <option value="approved">Approved</option>
          </select>
        </div>

        <input name="id" type="hidden" value="<?=$id;?>">

        <button name="submitbro" id="jabhai" type="submit" class="last_lable" value="Close Grievance"> Close grevience
        </button>
        
              
      </fieldset>

    </form>

    
</body>
</html>

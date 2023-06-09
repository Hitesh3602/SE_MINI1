<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid m-2">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light fw-bold me-5" aria-current="page" href="{% url 'dashboard' %}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold me-5" href="complain.php?id=<?= $_GET["id"];?>">Make Complaint</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold me-5" href="viewComplain.php?id=<?= $_GET["id"];?>">View Complaints</a>
          </li>

         
          
        </ul>
    
        <a href="{% url 'logout' %}" class="btn btn-success">Logout</a>
        
      </div>
    </div>
  </nav>
  </div>
  <div class="testimonals-container mt-4 mb-4" id="testi">
    <div class="container-fluid">
      
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="grievance.jpg" class="d-block w-100" alt="..." style="height:500px">
       
      </div>
      <div class="carousel-item">
        <img src="keyboard.jpg" class="d-block w-100" alt="..." style="height:500px">
        
      </div>
      <div class="carousel-item">
        <img src="grievance4.jpg.crdownload.jpeg" class="d-block w-100" alt="..." style="height:500px">>
        
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  </div>
  
  <div class="hero-container" id="hero-sec">
    <div class="container-fluid ">
    <div class="row d-flex">
      <div class="col align-middle">
        <div class=" mt-5">
          <div class="px-2 py-2 align-middle">
          <h1  class="px-1 py-1 fw-bold text-success " style="margin-left:450px">Grievance Redressal Cell</h1>
          <p> The Grievance Redressal Cell aims to look into the complaints lodged by any student and redress it as per requirement. Verbal complaints received from student's representatives are taken cognizance in grievance redressal cell meetings. The students can state their grievance regarding any academic and non- academic matter within the campus through the suggestion box.
            Student satisfaction is a major concern for any educational institute. However, many a time the students fail to express their concerns & issues or fail to reach out for proper support from the organization. Neither is there any system to address the conflicts or issues faced by the students.
            <br>
            <br>
            This eventually leads to students’ dissatisfaction. Hence, to maintain the dignity of the college or institute by ensuring a conflict-free atmosphere by promoting good student-teacher relationships we have developed a Student Grievance System that will address the students’ issues & grievances. The students can lodge their complaints through this system which will be redressed by the institute. This python-based student grievance cell will also look into matters of harassment thus creating a protective environment for students.

The system functions to look into the grievances lodged by any student. Students may approach the cell to voice their grievances regarding academic matters, health services, library and other services. Anyone with a genuine grievance may approach the Co-ordinator or member of the Student’s Grievance cell, Grievance cell is formed in order to keep the healthy working atmosphere amongst staff and students, Admin can view the resolving status of all grievance.
          </p>
          </div>
          
        </div>

      </div>
  </div>
  </div>
  <!-- main container -->
  <div class="main-container">
    <div class="container-fluid">
    ...
  </div>
  </div>
  
  <!--  Card container  -->
  <div class="card-container bg-black" id="team">
    <div class="container-fluid px-3 py-3">
      <div class="row center mx-4 my-4 text-white">
        <h2>Meet Our Experts</h2>
        <p>Highly professional team</p>
      </div>
      <div class="row mb-5">
        <div class="col">
          <div class="card" >
    <img src="hitesh.jpeg"style="height:300px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hitesh Punjabi</h5>
      <p class="card-text">Highly proficient in Web3 and AI and professional in Designing Websites with tools of Web3.0.</p>
      
    </div>
  </div>
        </div>
        <div class="col">
            <div class="card" >
      <img src="varsha.jpg"style="height:300px" alt="...">
      <div class="card-body">
        <h5 class="card-title">Varsha Chhabria</h5>
        <p class="card-text">Highly proficient in Web3 and AI and professional in Designing Websites with tools of Web3.0.</p>
        
      </div>
    </div>
          </div>
            
        <div class="col">
            <div class="card" >
      <img src="jiya.jpeg" class="card-img-top" style="height:300px" alt="...">
      <div class="card-body">
        <h5 class="card-title">Jiya Gangwani</h5>
        <p class="card-text">Expert in all aspects of coding and knowledgeable about a wide range of coding languages</p>
      
      </div>
    </div>
          </div>
           
        <div class="col">
            <div class="card" >
      <img src="soham.jpeg" class="card-img-top" style="height:300px" alt="...">
      <div class="card-body">
        <h5 class="card-title">Soham Panjabi</h5>
        <p class="card-text">Expert in all aspects of coding and knowledgeable about a wide range of coding languages</p>
      
      </div>
    </div>
          </div>
        
      </div>
  </div>
  </div>
  
    
  <!--  banner container  -->
  <div class="banner-container mt-5 mb-5" id="featured">
    <div class="container-fluid px-4 py-4">
    <div class="card bg-black text-white shadow-lg ">
    <h5 class="card-header">Featured Courses</h5>
    <div class="card-body">
  <!--     <h5 class="card-title">Special Teachers for Students</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn org-btn center">Learn More</a> -->
      <div class="conatiner">
      <div class="row d-flex justify-content-around">
        <div class="col">
           <div class="card text-black move-up mb-3" >
    <div class="card-header">Web Development</div>
    <div class="card-body">
      <h5 class="card-title">Front End + Backend</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <!--     <a href="#" class="btn btn-outline-primary center">View our curriculum</a> -->
    </div>
  </div>
        </div>
        <div class="col">
          <div class="card text-black move-up mb-3" >
    <div class="card-header">Web3.0</div>
    <div class="card-body">
      <h5 class="card-title">Web3 and Tools</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
        </div>
        <div class="col">
          <div class="card text-black move-up mb-3" >
    <div class="card-header">Java Masterclass</div>
    <div class="card-body">
      <h5 class="card-title">Begineer Course</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
        </div>
          <div class="col">
          <div class="card text-black move-up mb-3" >
    <div class="card-header">Python </div>
    <div class="card-body">
      <h5 class="card-title">Python AI</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
        </div>
     
  
  
      </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <!-- footer -->
  <div class="footer-container foot">
    <div class="container-fluid">
    <footer>
      <div class="">
    <div class="row">
     <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <span class="footer-title">Product</span>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Product 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plans & Prices</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">Frequently asked questions</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <span class="footer-title">Company</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">News and articles</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <span class="footer-title">Contact & Support</span>
            </li>
            <li class="nav-item">
              <span class="nav-link"><i class="fas fa-phone"></i>+47 45 80 80 80</span>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
            </li>
          </ul>
        </div>
      </div>
  
      <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
      
      <div class="row text-center">
        <div class="col-md-4 box">
          <span class="copyright quick-links">Copyright &copy; Made by Second Year <script>document.write(new Date().getFullYear())</script>
          </span>
        </div>
        <div class="col-md-4 box">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 box">
          <ul class="list-inline quick-links">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    </footer>  
  </div>
  </div>
</body>
</html>
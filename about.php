<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pet Adopt</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #F2E2B1;
      margin: 0;
    }

      .container {
      width: 100%;
      max-width: 800px; 
    }
    
    .add-pet-container {
      background-color: #D5C7A3;
      border-radius: 16px;
      box-shadow: 0 0 0 2px #ddcda9;
      margin: 60px auto;
      padding: 100px 100px 100px 100px;
      
      
    }
    .navbar {
      background: none;
      border: none;
      box-shadow: none;
      margin-top: 24px;
    }
    .nav-bg {
      background: #fff;
      border-radius: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 750px;
      min-height: 40px;
      margin: 0 50%;
      box-shadow: 0 1px 6px rgba(0,0,0,0.4);
      position: relative;
      padding: 0 10px;
    }
    .navbar-nav {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0;
      display: flex;
      align-items: center;
      width: 100%;
    }
    .navbar-nav .nav-link {
      color: #232323;
      font-weight: 700;
      border-radius: 20px;
      padding: 0.6rem 35px;
      margin: 0 0.2rem;
      transition: background 0.2s;
      font-size: 1.4rem;
      position: relative;
    }
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:focus,
    .navbar-nav .nav-link:hover {
      background: #edefda;
      font-weight: 600;
    }
   
    .navbar-nav .nav-item {
      list-style: none ;
      margin: 0;
      padding: 0;
    }
    .navbar-brand {
      font-weight: 600;
      color: #e77b3a;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      font-size: 1.4rem;
      margin-right: 22px;
    }
    .navbar-brand img {
      width: 45px;
      height: auto;
      margin-right: 7px;
    }
    @media (max-width: 991px) {
      .nav-bg {
        flex-direction: column;
        width: 100%;
        min-width: unset;
        padding: 1rem 10px;
      }
      .navbar-brand {
        margin-bottom: 1rem;
      }
      .navbar-nav .nav-link {
        padding: 1rem 1rem;
        font-size: 1.1rem;
      }
      
    }
  </style>
</head>
<body>
  <div>
    <a class="navbar-brand d-flex align-items-center" style="margin: 10px 50px 0;" >
      <img src="images/logo.png" alt="Pet Adopt Logo" style="height:70px; width:auto;"></a>
  </div>
  
  <nav class="navbar">
    <div class="nav-bg">
      <div class="collapse navbar-collapse show" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link active">ABOUT</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
          <li class="nav-item"><a href="adoption_records.php" class="nav-link">ADOPTION</a></li>
          <li class="nav-item"><a href="add_pet.php" class="nav-link">ADD PETS</a></li>
        </ul>
      </div>
    </div>
  </nav>


<div class="container">
  <div class="bg-white border rounded shadow p-4 text-center">

   
    <div class="card p-4 bg-light shadow-sm rounded mb-4">
      <h3 class="mb-4">About Pet Adopt</h3>
      <p>Pet Adopt is a web-based system that helps manage adoptable pets and their new families.</p>
      <p>Our mission is to help shelters connect pets with loving homes.</p>
    </div>


    <div class="card p-4 bg-light shadow-sm rounded">
      <h4 class="mb-3">Why It Matters</h4>
      <p>Every pet deserves a second chance. Pet Adopt helps bridge the gap between shelters and families ready to love.</p>
      <p>We believe adoption is not just a process—it’s a promise of care, companionship, and compassion.</p>
    </div>

  </div>
</div>

</body>
</html>

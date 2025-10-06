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
      background-color: #f2e2b1;
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
   
    .pill-bg {
      background: #fff;
      border-radius: 30px;
      box-shadow: 0 1px 6px rgba(0,0,0,.09);
      display: flex;
      justify-content: center;
      align-items: center;
      width: max-content;
      margin: 32px auto 0 auto;
      padding: 2px 8px;
    }
   
    .circular {
      border-radius: 50%;
      object-fit: cover;
      width: 120px;
      height: 120px;
      margin: 0 16px;
      box-shadow: 0 0 0 7px #f2e2b1;
    }
    .pet-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 10px;
      background: #eee;
    }
    .adopt-btn {
      background: #edae74;
      color: #232323;
      font-weight: 600;
      border: none;
      padding: 0.48rem 1.4rem;
      border-radius: 7px;
      font-size: 1.1rem;
      margin-top: 6px;
      transition: background .2s;
      display: inline-block;
    }
    .adopt-btn:hover {
      background: #ebc795;
    }
    .section-head-bar {
      background: #ded1a4; height: 34px; border-radius: 4px;
      margin-bottom: 22px;
    }
    .pet-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 1px 5px rgba(0,0,0,0.08);
      padding: 18px 14px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }
    
    .hero-text {
    text-align: left;
    position: relative;
    left: 50px;
    padding-left: 40px;
    margin-top:150px;
    }

    .hero-right { position: relative; width: 100%; min-height: 420px; }
    .hero-right .circular { border-radius: 50%; object-fit: cover; box-shadow: 0 6px 18px rgba(0,0,0,0.18); position: absolute; }
    .hero-small { width: 200px; height: 200px; right: 540px; top: 90px; }
    .hero-medium { width: 300px; height: 300px; right: 700px; top: 200px; }
    .hero-large { width: 500px; height: 500px; right: 200px; top: 250px; }
    @media (max-width: 991px) {
      .pill-bg {flex-direction: column; width: 100%;}
      .circular {width: 78px; height: 78px;}
      .logo-img {width: 45px;}
      .hero-right { min-height: auto; display: flex; gap: 18px; flex-wrap: wrap; justify-content: center; }
      .hero-right .circular { position: static; width: 120px; height: 120px; box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
    }
    
  </style>
</head>
<body>

   <div>
    <a class="navbar-brand d-flex align-items-center" style="margin: 0 50px 0;" >
      <img src="images/logo.png" alt="Pet Adopt Logo" style="height:70px; width:auto;"></a>
  </div>
  
  <nav class="navbar">
    <div class="nav-bg">
      <div class="collapse navbar-collapse show" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a href="index.php" class="nav-link active">HOME</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link ">ABOUT</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
          <li class="nav-item"><a href="adoption_records.php" class="nav-link">ADOPTION</a></li>
          <li class="nav-item"><a href="add_pet.php" class="nav-link">ADD PETS</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="col-md-5 hero-text">
  <h1 class="fw-bold mb-2" style="font-size:80px;">Find Your New<br>Best Friend</h1>
  <p class="mb-3" style="font-size:30px;" >Every pet deserves a loving home.</p>
  <a href="add_pet.php" class="btn btn-warning">Adopt now</a><br>
  <img src="images/2.png">
</div>


        <div class="col-md-7 col-12 order-md-2 d-none d-md-block">
          <div class="hero-right">
            <img src="images/home_cat.png" class="circular hero-small" alt="cat">
            <img src="images/home_dog1.png" class="circular hero-medium" alt="dog1">
            <img src="images/home_dog.png" class="circular hero-large" alt="dog2">
          </div>
        </div>

    </div>
  </div>


 


   
    <div class="container" style="background-color: #D5C7A3; padding: 40px; border-radius: 10px;   margin-top:1000px; margin-bottom:30px;">
  <h3 class="text-center" style="font-weight:600; margin-bottom:30px;">Pets Available For Adoption</h3>

  <?php
    $query = mysqli_query($conn, "SELECT * FROM pets WHERE status='Available'");
    while($row = mysqli_fetch_assoc($query)) {
  ?>
  
  <div class="pet-card" style="background: #fff; border-radius: 10px; padding: 20px; margin-bottom: 20px; display: flex; align-items: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <img src="uploads/<?php echo $row['photo']; ?>" class="pet-img" alt="<?php echo $row['name']; ?>" style="width: 90px; height: 90px; object-fit: cover; border-radius: 10px; margin-right: 20px;">
    
    <div style="flex-grow: 1; line-height: 1.8;">
      <div><strong>Name:</strong> <?php echo $row['name']; ?></div>
      <div><strong>Age:</strong> <?php echo $row['age']; ?></div>
      <div><strong>Type:</strong> <?php echo $row['type']; ?></div>
      <div><strong>Breed:</strong> <?php echo $row['breed']; ?></div>
    </div>

    <div style="display: flex; flex-direction: column; gap: 10px; margin-left: 20px;">
      <a href="edit_pet.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" style="width: 100px;">Edit</a>
      <a href="delete_pet.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" style="width: 100px;" onclick="return confirm('Are you sure you want to delete this pet? This cannot be undone.');">Delete</a>
      <a href="adopt.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm" style="width: 100px; color: #232323; font-weight:600;">Adopt</a>
    </div>
  </div>
  
  <?php } ?>
</div>

  </div>
</body>
</html>

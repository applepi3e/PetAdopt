<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Pet</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      background-color: #FFF2CC;
      font-family: 'Segoe UI', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
   
  .background-banner {
  position: fixed;
  top: 45%;
  left: 0;
  width:50%;
  z-index: 0;
  overflow: hidden;
}

.top-banner {
  position: absolute;       
  top: 0;                   
  right: 0;                 
  z-index: 0;               
  overflow: hidden;
  width: auto;              
}

.top-banner img {
  transform: scaleX(-1) scaleY(-1); 
  border-bottom-left-radius: 20px;
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
    .add-pet-title {
      text-align: center;
      margin-bottom: 21px;
      font-size: 40px;
      font-weight: 600;
      text-align: center;
    }
    label {
      font-size:15px;
      font-weight: 500;
      margin-bottom: 6px;
      display: inline-block;
      color: #232323;
    }
    .form-control {
      border-radius: 8px;
      border: none;
      margin-bottom: 18px;
      font-size: 1.07rem;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.02);
    }
    .btn-add {
      background-color: #66A476;
      color: #232323;
      font-weight: 600;
      border: none;
      border-radius: 15px;
      padding: 10px 50px;
      font-size: 15px;
      margin-right: 20px;
      transition: background 0.2s;
    }
    .btn-add:hover {
      background-color: #448d55;
      color: #fff;
    }
    .btn-cancel {
      background-color: #ED7E74;
      color: #232323;
      font-weight: 600;
      border: none;
      border-radius: 15px;
      padding: 10px 50px;
      font-size: 15px;
      transition: background 0.2s;
    }
    .btn-cancel:hover {
      background-color: #bd635b;
      color: #fff;
    }
    .form-row {
      display: flex;
      align-items: center;
      margin-bottom: 13px;
    }
    .form-row label {
      width: 138px;
      text-align: right;
      padding-right: 10px;
      margin-bottom: 0;
    }
    .form-row .form-control, .form-row select {
      width: 62%;
      min-width: 120px;
    }
  </style>
</head>
<body>
<div class="background-banner">
  <img src="images/6.png" alt="Pet Banner">
</div>

<div class="top-banner">
  <img src="images/6.png" alt="Pet Banner">
</div>

<div class="container">
    <div class="add-pet-container">
      <div class="add-pet-title">Add New Pet</div>
      <form action="" method="POST" enctype="multipart/form-data">
  <div class="row mb-2 align-items-center">
    <label for="name" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Pet Name:</label>
    <div class="col-sm-9">
      <input type="text" name="name" id="name" class="form-control form-control-md" required>
    </div>
  </div>

  <div class="row mb-2 align-items-center">
    <label for="type" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Type:</label>
    <div class="col-sm-9">
      <select name="type" id="type" class="form-control form-control-md" required>
        <option value="" disabled selected hidden>Choose</option>
        <option value="Cat">Cat</option>
        <option value="Dog">Dog</option>
      </select>
    </div>
  </div>

  <div class="row mb-2 align-items-center">
    <label for="breed" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Breed:</label>
    <div class="col-sm-9">
      <input type="text" name="breed" id="breed" class="form-control form-control-md" required>
    </div>
  </div>

  <div class="row mb-2 align-items-center">
    <label for="age" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Age:</label>
    <div class="col-sm-9">
      <input type="text" name="age" id="age" class="form-control form-control-md" required>
    </div>
  </div>

  <div class="row mb-2 align-items-center">
    <label for="photo" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Upload Image:</label>
    <div class="col-sm-9">
      <input type="file" name="photo" id="photo" class="form-control form-control-md" required>
    </div>
  </div>

  <div class="row mb-2 align-items-center">
    <label for="status" class="col-sm-3 col-form-label fs-5 fw-semibold text-sm-end">Adoption Status:</label>
    <div class="col-sm-9">
      <select name="status" id="status" class="form-control form-control-md" required>
        <option value="" disabled selected hidden>Choose</option>
        <option value="Available">Available</option>
        <option value="Adopted">Adopted</option>
      </select>
    </div>
  </div>

 <div class="text-center" style="margin-top: 4rem;">
  <button type="submit" name="save" class="btn btn-add px-4 py-2 fs-5 me-3">Add Pet</button>
  <a href="index.php" class="btn btn-cancel px-4 py-2 fs-5">Cancel</a>
</div>
</form>




      <?php
        if (isset($_POST['save'])) {
          $name = $_POST['name'];
          $type = $_POST['type'];
          $breed = $_POST['breed'];
          $age = $_POST['age'];
          $status = $_POST['status'];
          $photo = $_FILES['photo']['name'];
          $target = "uploads/" . basename($photo);
          if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
          }
          if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
            $sql = "INSERT INTO pets (name, type, breed, age, photo, status)
                    VALUES ('$name','$type','$breed','$age','$photo','$status')";
            mysqli_query($conn, $sql);
            echo "<script>alert('Pet Added Successfully'); window.location='index.php';</script>";
          } else {
            echo "<p class='text-danger'>Error uploading image.</p>";
          }
        }
      ?>
    </div>
  </div>

 
</body>
</html>

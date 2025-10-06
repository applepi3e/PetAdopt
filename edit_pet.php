<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Pet</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color:#fae8c8;">

<div class="container mt-5">
  <h3>Edit Pet Details</h3>

  <?php
  if (!isset($_GET['id'])) {
    echo "<p class='text-danger'>No pet selected for editing.</p>";
    exit;
  }

  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM pets WHERE id=$id");
  if (mysqli_num_rows($query) == 0) {
    echo "<p class='text-danger'>Pet not found.</p>";
    exit;
  }
  $pet = mysqli_fetch_assoc($query);

  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $status = $_POST['status'];

    $photo = $pet['photo']; // keep old photo by default
    if (!empty($_FILES['photo']['name'])) {
      $photo = $_FILES['photo']['name'];
      $target = "uploads/" . basename($photo);
      move_uploaded_file($_FILES['photo']['tmp_name'], $target);
    }

    $sql = "UPDATE pets SET 
              name='$name',
              type='$type',
              breed='$breed',
              age='$age',
              photo='$photo',
              status='$status'
            WHERE id='$id'";
    mysqli_query($conn, $sql);

    echo "<script>alert('Pet updated successfully!'); window.location='index.php';</script>";
  }
  ?>

  <form method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded">
    <div class="form-group">
      <label>Pet Name</label>
      <input type="text" name="name" value="<?php echo $pet['name']; ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Type</label>
      <input type="text" name="type" value="<?php echo $pet['type']; ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Breed</label>
      <input type="text" name="breed" value="<?php echo $pet['breed']; ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" name="age" value="<?php echo $pet['age']; ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Photo</label><br>
      <img src="uploads/<?php echo $pet['photo']; ?>" width="100" class="rounded mb-2"><br>
      <input type="file" name="photo" class="form-control">
    </div>
    <div class="form-group">
      <label>Status</label>
      <select name="status" class="form-control">
        <option value="Available" <?php if($pet['status']=="Available") echo "selected"; ?>>Available</option>
        <option value="Adopted" <?php if($pet['status']=="Adopted") echo "selected"; ?>>Adopted</option>
      </select>
    </div>
    <button type="submit" name="update" class="btn btn-success">Update Pet</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>

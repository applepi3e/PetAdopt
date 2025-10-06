<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Adopt Pet</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color:#fae8c8;">

<div class="container mt-5">
  <h3>Adopt a Pet</h3>

  <?php
  if (!isset($_GET['id'])) {
    echo "<p class='text-danger'>No pet selected for adoption.</p>";
    exit;
  }
  $id = $_GET['id'];
  $pet = mysqli_query($conn, "SELECT * FROM pets WHERE id=$id");
  if (mysqli_num_rows($pet) == 0) {
    echo "<p class='text-danger'>Pet not found.</p>";
    exit;
  }
  $row = mysqli_fetch_assoc($pet);
  ?>

  <div class="card p-4">
    <h5><?php echo $row['name']; ?> (<?php echo $row['type']; ?>)</h5>
    <img src="uploads/<?php echo $row['photo']; ?>" width="200" class="mb-3 rounded">
    <form method="POST">
      <input type="text" name="adopter_name" class="form-control mb-2" placeholder="Your Full Name" required>
      <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
      <input type="text" name="contact" class="form-control mb-2" placeholder="Contact Number" required>
      <button type="submit" name="adopt" class="btn btn-success">Confirm Adoption</button>
      <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
  </div>

  <?php
  if (isset($_POST['adopt'])) {
    $name = $_POST['adopter_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $date = date("Y-m-d");

    mysqli_query($conn, "INSERT INTO adoptions (pet_id, adopter_name, contact, email, adoption_date)
                         VALUES ('$id','$name','$contact','$email','$date')");
    mysqli_query($conn, "UPDATE pets SET status='Adopted' WHERE id='$id'");

    echo "<script>alert('Adoption Successful!'); window.location='adoption_records.php';</script>";
  }
  ?>
</div>
</body>
</html>

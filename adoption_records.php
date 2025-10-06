<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Adoption Records</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color:#fae8c8;">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="50"> Pet Adopt</a>
</nav>

<div class="container mt-5">
  <h3 class="text-center">Adoption Records</h3>
  <table class="table table-bordered mt-4 bg-light">
    <thead class="thead-dark">
      <tr>
        <th>Pet</th>
        <th>Type</th>
        <th>Adopter</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Date Adopted</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = mysqli_query($conn, "SELECT a.*, p.name AS pet_name, p.type FROM adoptions a 
                                    JOIN pets p ON a.pet_id = p.id ORDER BY adoption_date DESC");
      if (mysqli_num_rows($query) == 0) {
        echo "<tr><td colspan='6' class='text-center'>No adoptions yet.</td></tr>";
      }
      while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>{$row['pet_name']}</td>
                <td>{$row['type']}</td>
                <td>{$row['adopter_name']}</td>
                <td>{$row['contact']}</td>
                <td>{$row['email']}</td>
                <td>{$row['adoption_date']}</td>
              </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

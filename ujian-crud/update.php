<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $No_pasien = $_POST['No_pasien'];
   $Nama = $_POST['Nama'];
   $No_kamar = $_POST['No_kamar'];
   $Usia = $_POST['Usia'];
   $Tgl_lahir = $_POST['Tgl_lahir'];


   $sql = "UPDATE `pasien` SET `No_pasien`='$No_pasien', `No_kamar`='$No_kamar', `Nama`='$Nama', `Usia`='$Usia', `Tgl_lahir`='$Tgl_lahir' where id=$id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit pasien</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `pasien` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
      
      <div class="mb-3">
          <label class="form-label">No_kamar:</label>
          <input type="text" class="form-control" name="No_kamar" value="<?php echo $row['No_kamar'] ?>">
        </div>

      <div class="row mb-3">
          <div class="col">
            <label class="form-label">No_pasien:</label>
            <input type="text" class="form-control" name="No_pasien" value="<?php echo $row['No_pasien'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Nama:</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $row['Nama'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Usia:</label>
          <input type="text" class="form-control" name="Usia" value="<?php echo $row['Usia'] ?>">
        </div>

        <div class="mb-3">
               <label>Tanggal Lahir:</label>
               <input type="date" name="Tgl_lahir" value="2023-01-01" min="2000-01-01" max="2023-12-31" value="<?php echo $row['Tgl_lahir'] ?>">
            </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <div class="teks-bawah">
  <a>Rangga Ardhi Perkasa - 51421252</a>
  </div>
  
</body>

</html>
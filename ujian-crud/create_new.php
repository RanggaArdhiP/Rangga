<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $No_pasien = $_POST['No_pasien'];
   $Nama = $_POST['Nama'];
   $No_kamar = $_POST['No_kamar'];
   $Usia = $_POST['Usia'];
   $Tgl_lahir = $_POST['Tgl_lahir'];

   $sql = "INSERT INTO `pasien`(`id`,`No_pasien`, `Nama`, `No_kamar`, `Usia`, `Tgl_lahir`) VALUES (NULL,'$No_pasien','$Nama','$No_kamar','$Usia','$Tgl_lahir')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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

   <link rel="stylesheet" href="createstyle.css" type="text/css">
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>UJIAN CRUD PWEB</title>
</head>

<body>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Tambah Pasien Baru</h3>
         <p class="text-muted">Isi Data Pasien pada Form dibawah</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
         
         <div class="mb-3">
                  <label class="form-label">No_kamar:</label>
                  <input type="text" class="form-control" name="No_kamar" placeholder="122">
               </div>
               
         <div class="row mb-3">
               <div class="col">
                  <label class="form-label">No_pasien:</label>
                  <input type="text" class="form-control" name="No_pasien" placeholder="01">
               </div>

               <div class="col">
                  <label class="form-label">Nama:</label>
                  <input type="text" class="form-control" name="Nama" placeholder="Rangga Ardhi">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Usia:</label>
               <input type="text" class="form-control" name="Usia" placeholder="20">
            </div>

            <div class="mb-3">
               <label>Tanggal Lahir:</label>
               <input type="date" name="Tgl_lahir" value="2023-01-01" min="2000-01-01" max="2023-12-31" placeholder="Tanggal Lahir">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>

</html>
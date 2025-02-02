<?php 
$koneksi=mysqli_connect("localhost","root","","KAMU");
if(isset($_POST["submit"])){
  
    $nama = $_POST["nama"];
    $nomor_induk = $_POST["nomor_induk"];
    $password = $_POST["password"];

    $query="insert into user values ('' , '$nama' , '$nomor_induk' , 'mahasiswa' , '$password')";

    $result = mysqli_query($koneksi,$query);

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="" method="POST">
        <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label class="form-label">Nomor Induk</label>
        <input type="text" class="form-control" name="nomor_induk">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="mb-3 form-check">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
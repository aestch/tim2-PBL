<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #6C97F3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GROSHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <form class="d-flex col-12 offset-10" role="search">
            <input class="form-control me-2" name="cari" type="search" placeholder="Apa yang ingin Anda cari">
            <button class="btn btn-light"  value="submit">Cari</button>
        </form>
        <li class="nav-item">
            <a class="nav-link active"><i class="bi bi-cart3"></i></a>
        </li>
        <?php
        if(isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from t_barang where nama_barang like '%" .$cari . "%'");
        }
        ?>
    </div>
  </div>
</nav>
</body>
</html>
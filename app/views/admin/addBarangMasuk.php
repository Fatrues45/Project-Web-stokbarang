<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang Masuk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Tambah Barang Masuk</h1>
    <form action="" method="post">
      <div class="form-group">
        <label for="namaBarang">Nama Barang</label>
        <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Masukkan nama barang">
      </div>
      <div class="form-group">
        <label for="jumlahMasuk">Jumlah Masuk</label>
        <input type="number" class="form-control" id="jumlahMasuk" name="jumlahMasuk" placeholder="Masukkan jumlah barang yang masuk">
      </div>
      <div class="form-group">
        <label for="tanggalMasuk">Tanggal Masuk</label>
        <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk">
      </div>
      <div class="form-group">
        <label for="gambarBarang">Gambar Barang</label>
        <input type="file" class="form-control-file" id="gambarBarang" name="gambarBarang">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
    <title>Menampilkan Hasil Inputan Form</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-mahasiswa.php" method="POST">
                    <?php
                    $id = $_GET['id']; // Menggunakan $_GET bukan $GET
                    include "koneksi.php";
                    // Membersihkan nilai $id untuk mencegah SQL injection
                    $id = mysqli_real_escape_string($koneksi, $id);
                    $tampil = $koneksi->query("select * from mahasiswa where mahasiswa_id='$id'");
                    $row = $tampil->fetch_assoc();
                    ?>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="hidden" name="mahasiswa_id" value="<?php echo $row['mahasiswa_id']?>" class="form-control">
                        <input type="number" name="nim" value="<?php echo $row['nim']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control"> <!-- Perbaikan nama atribut -->
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option> <!-- Perbaikan value -->
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>
                        
                        <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                        <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">

                </form>

            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
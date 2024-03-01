<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Mahasiswa</h1>
                <?php
                if(@$_GET['pesan']=="inputBerhasil"){
                ?>
                    <div class="alert alert-success">
                        Penyimpanan Berhasil!
                    </div>
                <?php
                }
                ?>

                <?php
                if(@$_GET['pesan']=="hapusBerhasil"){
                ?>
                    <div class="alert alert-success">
                        Data Berhasil Dihapus!
                    </div>
                <?php
                }
                ?>

                <?php
                
                if(@$_GET['pesan']=="edittBerhasil"){
                ?>
                    <div class="alert alert-success">
                        Perubahan Berhasil!
                    </div>
                <?php
                }
                ?>

                <table id="dataTables" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>
                                <a href="input-mahasiswa.php">
                                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $sql = $koneksi->query("select * from mahasiswa order by nim ASC");
                        while($row = $sql->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['nim']?></td>
                                <td><?php echo $row['nama']?></td>
                                <td><?php echo $row['jenis_kelamin']?></td>
                                <td><?php echo $row['alamat']?></td>
                                <td>
                                    <a href="edit-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>">
                                        <button class="btn btn-xs btn-warning glyphicon glyphicon-edit"></button>
                                    </a>

                                    <a href="hapus-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>" onclick="return confirm('Anda yakin menghapus data?')">
                                        <button class="btn btn-xs btn-danger glyphicon glyphicon-remove"></button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#dataTables').DataTable();
        });
    </script>
</body>
</html>

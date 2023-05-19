<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br><br>
        <a href="create.php" class="btn btn-primary">Tambah Data</a><br><br>

        <table id="myTable" cellpadding="10" cellspacing="0" class="table table-striped">
         <thead>
        <tr>
                <td width="50px" class="text-center">ID</td>
                <td width="200px" class="text-center">Nama</td>
                <td width="200px" class="text-center">Jenis Kelamin</td>
                <td width="200px" class="text-center">Telepon</td>
                <td width="200px" class="text-center">Alamat</td>
                <td width="200px" class="text-center">Aksi</td>
            </tr>
         </thead>
         <tbody>
            <?php
                include('connect.php');

                $nomor = 1;

                $data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id DESC");

                while($pelanggan = mysqli_fetch_array($data_pelanggan)){
            ?>
            <tr>
                <td class="text-center"><?php echo $nomor++ ?></td>
                <td><?php echo $pelanggan['nama'] ?></td>
                <td><?php echo $pelanggan['jenis_kelamin'] ?></td>
                <td><?php echo $pelanggan['telpon'] ?></td>
                <td><?php echo $pelanggan['alamat'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $pelanggan['id']?>" class="btn btn-warning">Edit</button>
                    <a href="delete_process.php?id=<?php echo $pelanggan['id']?>" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>  
        </table>
    </div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
        </script>
</body>
</html>

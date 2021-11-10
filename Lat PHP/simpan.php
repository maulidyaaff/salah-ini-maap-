<?php 
    include './koneksi.php';

    $nama_lengkap = $_POST['nama_lengkap'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO SISWA (nama_lengkap,nis,alamat) VALUES ($nama_lengkap,$nis,$alamat)";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

 ?>
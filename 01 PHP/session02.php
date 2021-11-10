<!DOCTYPE html>
<head>
    <title>Session 01</title>
</head>
<body>
<?php
session_start();

echo "Nama Anda Adalah " .$_SESSION['nama'];
echo "<br/><a href='session01.php'>Kembali ke halaman pertama</a>";
?>  
</body>
</html>
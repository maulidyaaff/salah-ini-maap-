<!DOCTYPE html>
<head>
    <title>Session 01</title>
</head>
<body>
<?php
session_start();

$_SESSION['nama'] = "Vinanti Maulidya Fazri";
echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
?>  
</body>
</html>
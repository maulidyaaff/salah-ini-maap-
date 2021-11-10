<!DOCTYPE html>
<head>
    <title>cookie 01</title>
</head>
<body>
<?php
$value = 'Vina';
$value2 = 'Vinanti Maulidya Fazri';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); 

echo "<h1>Ini Halaman Pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>  
</body>
</html>
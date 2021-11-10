<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP -2</title>
</head>
<body>
    <h2>Perulangan</h2>
    <?php
    echo date("d-m-Y h:i:sa");
    echo "<br />";
    for ($i = 1; $i < 7; $i++) {
        for ($j = $i; $j < 7; $j++){
            echo " * ";
        }
    echo '<br />';
    }
    ?>  
</body>
</html>
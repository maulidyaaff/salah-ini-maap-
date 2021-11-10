<!DOCTYPE html>
<head>
    <title>Meneruskan Variabel</title>
</head>
<body>
<?php
    if (isset($_GET['v1']))
    {
        echo $_GET['v1'];
    }
        echo "<br />";
    if (isset($_GET['v2']))
    {
        echo $_GET['v2'];
    }
?>  
</body>
</html>
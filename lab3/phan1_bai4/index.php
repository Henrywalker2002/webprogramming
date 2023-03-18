<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php" media="screen">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<table><tr>";
        for ($i = 1; $i < 50; $i++) {
            if ($i % 7 == 0) {
                echo "<td>$i</td>";
                echo "</tr>";
                if ($i != 49){
                    echo "<tr>";
                }
            }
            else {
                echo "<td>$i</td>";
            }
        } 
        echo "</table>"
    ?>
</body>
</html>
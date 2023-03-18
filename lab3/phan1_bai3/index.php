<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i = 1; $i < 100; $i += 2) {
            echo $i ;
            echo " ";
        }   
        echo "<br />";
        $i = 1;
        while ($i < 100) {
            echo $i ;
            echo " ";
            $i += 2;
        }
    ?>
</body>
</html>
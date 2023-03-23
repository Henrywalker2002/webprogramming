<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Caculator</title>
</head>
<body>
    <form action="" method = "get">
        <label for="exp1">Operand 1</label>
        <input type="number" name="exp1" id="exp1">
        <label for="op">Operator </label>
        <input type="text" name="op" id="op">
        <label for="exp2">Operand 2</label>
        <input type="number" name="exp2" id="exp2">
        <input type="submit">
    </form>
    <?php
        $exp1 = intval(($_GET["exp1"]));
        $exp2 = intval($_GET["exp2"]);
        $op = $_GET["op"];
        switch ($op) {
            case '+':
                echo "$exp1 + $exp2 = " .$exp1 + $exp2;
                break;
            case '-':
                echo "$exp1 - $exp2 = " .$exp1 - $exp2;
                break;
            case '*':
                echo "$exp1 * $exp2 = " .$exp1 * $exp2;
                break;
            case '/':
                echo "$exp1 / $exp2 = " .$exp1 / $exp2;
                break;
            default:
                echo "operator must be + - * /";
                break;
        } 
    ?>
</body>
</html>
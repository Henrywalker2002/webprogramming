<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Product</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        }

        th,
        td {
        border: 1px solid #ccc;
        text-align: left;
        padding: 8px;
        }

        th {
        background-color: #f2f2f2;
        font-weight: bold;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        button {
            margin-left: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Our Product</h1>
    <button type="submit" onclick= add()>Create new product</button>
    <table>
        <tr>
            <th style="width: 2%;">ID</th>
            <th style="width: 10%;">Name </th> 
            <th style="width: 60%;">Description</th> 
            <th style="width: 10%;">Price</th>
            <th >Action</th>
        </tr>
        <?php 
            include("db.php");
            $query = "select * from products";
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
                $des = $row['description'];
                $price = $row['price'];
                echo "<tr id = $id> <td class ='id'>  $id </td> <td class = 'name' > $name </td> <td class = 'des'> $des </td> <td class = 'price'> $price </td> ";
                echo "<td> <button type='submit' onclick = read($id)>read </button>";
                echo "<button type='submit' onclick = edit($id)>edit </button> <button type='submit' onclick = del($id)>delete </button> </td> ";
                echo "</tr>";
            }
        ?>
    </table>
    
    <script>
        function read(id) {
            console.log(id)
        }

        function edit(id) {
            window.location = "c.php?id=" + id 
        }

        function del(id) {
            window.location = "d.php?id=" + id
        }

        function add() {
            window.location = "b.php"
        }
    </script>
</body>
</html>
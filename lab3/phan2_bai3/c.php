<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        
        button[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }
        
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        
        div {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin-bottom: 20px;
        }
  
    </style>
</head>
<body>
    <?php
        include("db.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $des = $_POST['description'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $id = $_GET['id'];
            $query = "update products set name = '$name', description = '$des', price = $price, image = '$image' where id = $id";
            echo $query;
            $result = $conn->query($query);
            if ($result === false) {
                echo "<script> alert('something went wrong') </script>";
            }
            else {
                echo "<script> alert('success') </script>";
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
    ?>

    <form action="" method="post">
        <div>
            <?php echo  "<h2>Product ID = " .$_GET['id'] ."</h2>" ?>
        </div>

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" minlength="5" maxlength="40" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" maxlength="5000" required></textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" maxlength="255" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
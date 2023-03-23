<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        width: 500px;
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
    <title>Sign Up</title>
</head>
<body>
    
    <?php
        include("db.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $query = "insert into products values (" .$_POST['id'] .',"' .$_POST['name'] .'","' .$_POST['description'] .'",' .$_POST['price'] .',"' .$_POST['image'] .'")';
            echo $query;
            $result = $conn->query($query);
            if ($result === false) {
                echo "alert('something went wrong')";
            }
            echo "<meta http-equiv='refresh' content='0'>";
        }
    ?>
    <form action="" method="post">
        <div>
            <label for="id">ID:</label>
            <input type="number" id="id" name="id" required>
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
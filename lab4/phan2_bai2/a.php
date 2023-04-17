<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
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
    <table id = "tab">
        <tr>
            <th style="width: 2%;">ID</th>
            <th style="width: 10%;">Name </th> 
            <th style="width: 60%;">Description</th> 
            <th style="width: 10%;">Price</th>
            <th >Action</th>
        </tr>
    </table>    
    
    <script src="script.js"></script>
</body>
</html>
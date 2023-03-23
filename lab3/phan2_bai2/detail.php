<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <title>lab 1</title>

</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, "shop");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $id = $_GET['id'];
        $query = "Select * from products where id = " . $id;
        $result = $conn->query($query);
        $data = $result->fetch_assoc();
    ?>
    <div class = "all">
        <div class = "header-container">
            <div class = "title">
                <h6>Site Title</h6>
            </div>
            <div class="nav" id = "link">
                <a href="#">Categories</a> |
                <a href="#">Contact us</a> |
                <a href="#">Follow us</a>
            </div>
            <div class="input-group">
                <div class="form-outline">
                  <input type="search" id="form1" class="form-control" placeholder="search" >
                </div>
            </div>
        </div>
        <div class = "own-container">
            <div class = "left-container">
                <div class = "menu">
                    <div class = "box-container">
                        <div class = "box">
                            <p>Category</p>
                        </div>
                        <div class = "list-group">
                            <a href="#">Item 1...</a>
                            <a href="#">Item 2...</a>
                            <a href="#">Item 3...</a>
                            <a href="#">Item 4...</a>
                            <a href="#">Item 5...</a>
                        </div>
                    </div>
                    <div class = "box-container">
                        <div class = "box">
                            <p>Top product</p>
                        </div>
                        <div class = "list-group">
                            <a href="#">Item 1...</a>
                            <a href="#">Item 2...</a>
                            <a href="#">Item 3...</a>
                            <a href="#">Item 4...</a>
                            <a href="#">Item 5...</a>
                        </div>
                    </div>
                </div>
                <div class = "content">
                    <p>Home > Main Category > Sub Category</p>
                    <div class = "sub-container">
                        <div class = "product-img">
                            <?php 
                                $image = $data['image'];
                                echo "<img src= $image alt='no image' >";
                            ?>
                            
                            <div class = "mul-img">
                                <div class = "sub-img">
                                    <img src="./no-img.jpg" alt="no image">
                                </div>
                                <div class = "sub-img">
                                    <img src="./no-img.jpg" alt="no image">
                                </div>
                                <div class = "sub-img">
                                    <img src="./no-img.jpg" alt="no image">
                                </div>
                                <div class = "sub-img">
                                    <img src="./no-img.jpg" alt="no image">
                                </div>

                            </div>
                        </div>
                        <div class = "product-sum">
                            <?php 
                                $name = $data['name'];
                                echo "<h3>$name</h3>"
                            ?>
                            <h5><strong>Sumary</strong></h5>
                            
                            <?php 
                                $des = $data["description"];
                                echo "<p>$des</p>";
                            ?>
                            
                            <div class = "btn-container">
                                <button type="submit">Buy now</button>
                            </div>

                        </div>
                    </div>
                    <div class = "des">
                        <p style="font-weight: bold;">Description</p>
                        <?php 
                            $des = $data["description"];
                            echo "<p>$des</p>";
                        ?>
                    </div>
                </div>
            </div>
            <div id = "right">
                <div class = "right-box"></div>
            </div>
        </div>
        <div class = "footer">
            <p>footer information</p>
            <a href="#">Link 1</a> |
            <a style="text-decoration: none; color: black;" href="#">Link 2</a> |
            <a href="#">Link 3</a> 
        </div>

    </div>
</body>
</html>
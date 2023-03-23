<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        $query = "Select * from products";
        $result = $conn->query($query);
    ?>
    <div class="container">
        <div class="header">
            <div class="headtitle">
                <h1>Site Title</h1>
            </div>
        </div>
        <div class="navigation">
            <div class="nav">
                <a href="#">Categories</a> |
                <a href="#">Contact us</a> |
                <a href="#">Follow us</a>
            </div>
            <div class="search">Search</div>
        </div>
        <div class="left">
            <div class="category">
                <div class="title"><h2>Category</h2></div>
                <div class="text"><h4>Item 1..</h4><h4>Item 2..</h4><h4>Item 3..</h4><h4>Item 4..</h4><h4>Item 5..</h4></div>
            </div>
            <div class="topproduct">
                <div class="title"><h2>Category</h2></div>
                <div class="text"><h4>Item 1..</h4><h4>Item 2..</h4><h4>Item 3..</h4><h4>Item 4..</h4><h4>Item 5..</h4></div>
            </div>
        </div>
        <div class="main">
            <div><h1>Top Products</h1></div>
            
            <div class="products">
                <?php
                    while($row = $result->fetch_assoc()) {
                        $img = $row["image"];
                        $price = $row['price'];
                        $id = $row['id'];
                        echo "<div class = 'product'>";
                        echo "<img class ='image' src = $img alt = 'photo' onclick = 'detail($id)' id = $id> ";
                        echo "Price : $price $";
                        echo "<div class = 'buy'> Buy Now </div>";
                        echo "</div>";
                    }
                ?>
                
                <!-- <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div>
                <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div>
                <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div>
                <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div>
                <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div>
                <div class="product">
                    <img class="image" src="no.png" alt="photo">
                    Price: 10$
                    <div class="buy">Buy Now</div>
                </div> -->
            </div>

            <div class="superpage">
                <div class="page">
                    <div class="subpage">prev</div>
                    <div class="subpage">1</div>
                    <div class="subpage">2</div>
                    <div class="subpage">3</div>
                    <div class="subpage" id="next">next</div>
                </div>
            </div>

            <div class="space"></div>
        </div>
        <div class="right"><div class="divright">160x600</div></div>
        <div class="footer">
            <div>
                Footer Information ...
                <div>
                    <a href="#">Link 1</a> |
                    <a style="text-decoration: none; color: black;" href="#">Link 2</a> |
                    <a href="#">Link 3</a> 
                </div>
            </div>
        </div>
    </div>
    <script> 
        function detail(id) {
            window.location = "./detail.php?id=" + id
        }
    </script>
</body>
</html>
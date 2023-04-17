<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
$method = $_SERVER['REQUEST_METHOD']; 

$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, "shop");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($method === 'GET') {
    $result = $conn->query("select * from products");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}
elseif ($method === 'POST') {
    try {
        $input = (array) json_decode(file_get_contents('php://input'), true);
        $query = "insert into products values (" .$input['id'] .',"' .$input['name'] .'","' .$input['description'] .'",' .$input['price'] .',"' .$input['image'] .'")';
        $res = $conn->query($query);
        if ($res) {
            echo json_encode(["result" => "ok"]);
        }
    }
    catch (Exception $e) {
        $res = ["result" => "fail", "message" => $e->getMessage()];
        echo json_encode($res);
    }
}
elseif ($method == 'DELETE') {

    try {
        $input = (array) json_decode(file_get_contents('php://input'), true);
        $query = "delete from products where id = " .$input['id'] ;
        $result = $conn->query($query);

        echo json_decode($result);
    }
    catch (Exception $e) {
        $res = ["result" => "fail", "message" => $e->getMessage()];
        echo json_encode($res);
    }
}
elseif ($method == 'PUT') {
    try {
        $input = (array) json_decode(file_get_contents('php://input'), true);
        $name = $input['name'];
        $des = $input['des'];
        $price = $input['price'];
        $img = $input['image'];
        $id = $input['id'];
        $query = "update products set name = '$name', description = '$des', price = $price, image = '$img' where id = $id";
        $result = $conn->query($query);
        echo json_decode($result);
    }
    catch (Exception $e) {
        $res = ["result" => "fail", "message" => $e->getMessage()];
        echo json_encode($res);
    }
}
?>
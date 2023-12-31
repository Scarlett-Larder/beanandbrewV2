<?php 
include("connection.php");
try {
    $sql = "SELECT img_url, price, name, product_id FROM product";
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception("Error executing the query: " . $conn->error);
    }
    if ($result->num_rows > 0) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['img_url'] = base64_encode($row['img_url']);
            $data[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo json_encode(["message" => "No data found"]);
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>

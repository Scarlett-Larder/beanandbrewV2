<?php 
include("connection.php");

try {
    $sql = "SELECT img_url, price, name, product_id FROM product";
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception("Error executing the query: " . $conn->error);
    }

    // Check if there is any result
// ... (existing code)
    if ($result->num_rows > 0) {
        // Convert result to associative array
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['img_url'] = base64_encode($row['img_url']); // Convert binary data to Base64
            $data[] = $row;
        }

        // Output data as JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo json_encode(["message" => "No data found"]); // Return JSON for no data
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn->close();
?>

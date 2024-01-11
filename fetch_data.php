<?php
include 'db.php'; // This is your database connection file

header('Content-Type: application/json');

$query = "SELECT * FROM utm_data"; // Assuming 'utm_data' is your table name
$result = $pdo->query($query);

$data = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row; 
    
}

echo json_encode(['data' => $data]);


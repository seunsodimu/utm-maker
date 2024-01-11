<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

function shortenUrl($longUrl):string
{
    $token = $_ENV['BITLY_TOKEN'];
    $apiUrl = 'https://api-ssl.bitly.com/v4/shorten';

    $headers = [
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json',
        'Accept: application/json'
    ];

    $postData = json_encode(['long_url' => $longUrl]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
        return 'cURL Error: ' . $err;
    }

    $response = json_decode($result, true);
    return $response['link'] ?? 'Error: Invalid response';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST);
     $url = $_POST['siteUrl'];
    // $campaignSource = $_POST['campaignSource'];
    // $campaignMedium = $_POST['campaignMedium'];
    // $campaignName = $_POST['campaignName'];
    // $campaignTerm = $_POST['campaignTerm'];
    // $campaignContent = $_POST['campaignContent'];
    // $campaingId = $_POST['campaignId'];
    if($_POST['isShorten']){
        $endUrl = shortenUrl($url);
    }else{
        $endUrl = $_POST['longUrl'];
    }
    //get user ip
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO utm_data (campaignName, sourcePlatform, campaignMedium, campaignSource, campaignTerm, campaignId, campaignContent, siteUrl, userIp, endUrl) VALUES (:campaignName, :sourcePlatform, :campaignMedium, :campaignSource, :campaignTerm, :campaignId, :campaignContent, :siteUrl, :userIp, :endUrl)");

    // Bind parameters
    $stmt->bindParam(':campaignName', $data->campaignName);
    $stmt->bindParam(':sourcePlatform', $data->sourcePlatform);
    $stmt->bindParam(':campaignMedium', $data->campaignMedium);
    $stmt->bindParam(':campaignSource', $data->campaignSource);
    $stmt->bindParam(':campaignTerm', $data->campaignTerm);
    $stmt->bindParam(':campaignContent', $data->campaignContent);
    $stmt->bindParam(':siteUrl', $data->siteUrl);
    $stmt->bindParam(':userIp', $ip);
    $stmt->bindParam(':endUrl', $endUrl);

    // Execute the statement
    try {
        $stmt->execute();
        echo json_encode(['message' => 'Success', 'endUrl' => $endUrl]);
    } catch(Exception $e) {
        http_response_code(500);
        echo json_encode(['message' => 'Failure']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
}

    
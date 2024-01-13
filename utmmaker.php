<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'db.php';
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
function getLocationFromIp($ip){
    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    return $ipdat->geoplugin_city.', '.$ipdat->geoplugin_region;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     //get user ip
    $ip = $_SERVER['REMOTE_ADDR'];
    $location = (($ip != '::1') || ($ip != '')) ? getLocationFromIp($ip) : 'Unknown';
    $location = ($location == ', ') ? 'Unknown' : $location;
    
     $json = file_get_contents('php://input'); 
     $datax = json_decode($json);
   parse_str($json, $data);
    if(isset($data['isShorten'])){
        $endUrl = shortenUrl($data['siteUrl']);
    }else{
        $endUrl = $data['siteUrl'].'?utm_source='.$data['campaignSource'].'&utm_medium='.$data['campaignMedium'].'&utm_campaign='.$data['campaignName'];
        $endUrl .=!empty($data['campaignContent']) ? '&utm_content='.$data['campaignContent'] : "";
        $endUrl .=!empty($data['campaignId']) ? '&utm_id='.$data['campaignId'] : "";
        $endUrl .=!empty($data['campaignTerm']) ? '&utm_term='.$data['campaignTerm'] : "";
    }
    $endUrl = urlencode($endUrl);
    // Prepare an SQL statement to prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO utm_data (campaignName, sourcePlatform, campaignMedium, campaignSource, campaignTerm, campaignId, campaignContent, siteUrl, userIp, endUrl, userLocation) VALUES (:campaignName, :sourcePlatform, :campaignMedium, :campaignSource, :campaignTerm, :campaingId, :campaignContent, :siteUrl, :userIp, :endUrl, :userLocation)");

    // Bind parameters
    $stmt->bindParam(':campaignName', $data['campaignName']);
$stmt->bindParam(':sourcePlatform', $data['sourcePlatform']);
$stmt->bindParam(':campaignMedium', $data['campaignMedium']);
$stmt->bindParam(':campaignSource', $data['campaignSource']);
$stmt->bindParam(':campaignTerm', $data['campaignTerm']);
$stmt->bindParam(':campaignContent', $data['campaignContent']);
$stmt->bindParam(':campaignId', $data['campaignId']);
$stmt->bindParam(':siteUrl', $data['siteUrl']);
$stmt->bindParam(':userIp', $ip);
$stmt->bindParam(':userLocation', $location);
$stmt->bindParam(':endUrl', $endUrl);

    // Execute the statement
    try {
        $stmt->execute();
        echo json_encode(['message' => 'success', 'endUrl' => $endUrl]);
    } catch(Exception $e) {
        http_response_code(500);
        echo json_encode(['message' => 'Failure']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
}

    
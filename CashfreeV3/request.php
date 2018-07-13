 <?php
$json = file_get_contents('php://input');
  $postData = json_decode($json, true);



   $appId = ""; //replace it with your appId
   $secretKey = ""; //replace it with your secret key 
   $orderId = $postData["orderId"]; 
   $orderAmount = $postData["orderAmount"];
   $customerEmail = $postData["customerEmail"];
   $customerPhone = $postData["customerPhone"];
$orderCurrency =  isset($postData["orderCurrency"])?$postData["orderCurrency"] : "INR";

   $tokenData = "appId=".$appId."&orderId=".$orderId."&orderAmount=".$orderAmount."&customerEmail=".$customerEmail."&customerPhone=".$customerPhone."&orderCurrency=".$orderCurrency;   

$token = hash_hmac('sha256', $tokenData, $secretKey, true);
 

 $signature = hash_hmac('sha256', $tokenData, $secretKey,true);
 $signature = base64_encode($signature);


 $response = array("checksum" => $signature, "status" => "OK");
 

echo json_encode($response);
?>
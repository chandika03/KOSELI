<?php
$amount = $_POST['total'];

$paisa = $amount * 100;

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS =>'{
"return_url": "http://localhost/koseli/success.php",
"website_url": "https://example.com/",
"amount": "' . $paisa . '",
"purchase_order_id": "Order01",
    "purchase_order_name": "test",

"customer_info": {
    "name": "Test Bahadur",
    "email": "test@khalti.com",
    "phone": "9800000001"
}
}

',
CURLOPT_HTTPHEADER => array(
    'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
    'Content-Type: application/json',
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

if(!empty($response)){
    $responseData = json_decode($response, true);

    if(isset($responseData['payment_url'])){
        $value = $responseData['payment_url'];
        echo $value;
        header("Location: $value");
    }else{
        echo "Payment url not found in response.";
    }
}else{
    echo "Empty response received.";
}
?>
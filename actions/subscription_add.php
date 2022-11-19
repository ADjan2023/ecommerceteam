<?php
  $curl = curl_init();
  


  curl_setopt_array($curl, array(
    CURLOPT_URL =>"https://api.paystack.co/transaction/verify/".$_GET['reference'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_042ff0f5bee06f6045a5634058666bbd7133b809",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $result=json_decode($response,true);
    print_r($result['message']);
   echo $result['message'];
  }
?>
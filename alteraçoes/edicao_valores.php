<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/request/CB203C9B5E5EFDC774705FA09C380D73/payment?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'{
  "amountPerPayment": "500.00",
  "updateSubscriptions": false
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);
echo $err2 = curl_error($curl);
echo "<hr>";

echo $resposta1 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo "<hr>";

curl_close($curl);
echo $response;
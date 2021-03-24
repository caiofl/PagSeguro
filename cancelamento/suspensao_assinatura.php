<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/BABAE30085856B4994ACCFBB58856545/status?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'{
	"status":"SUSPENDED"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
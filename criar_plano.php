<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/request/?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="ISO-8859-1" standalone="yes"?>
<preApprovalRequest>
<preApproval>
<name>Plano - Teste</name>
<reference>IDTESTE</reference>
<charge>MANUAL</charge>
<period>weekly</period>
<amountPerPayment>1.00</amountPerPayment>
<cancelURL>http://sitedocliente.com</cancelURL>
<membershipFee>2.00</membershipFee>
<trialPeriodDuration>1</trialPeriodDuration>
</preApproval>
<maxUses>500</maxUses>
</preApprovalRequest>',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/vnd.pagseguro.com.br.v3+xml;charset=ISO-8859-1',
    'Content-Type: application/xml;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


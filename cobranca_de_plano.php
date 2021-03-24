<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/payment?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<payment>
	<items>
		<item>
			<id>0001</id>
			<description>Cobranca 123</description>
			<amount>1.00</amount>
			<quantity>1</quantity>
		</item>
	</items>
	<reference>REF1234-1</reference>
	<preApprovalCode>BABAE30085856B4994ACCFBB58856545</preApprovalCode>
</payment> ',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/xml',
    'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
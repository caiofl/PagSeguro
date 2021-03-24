<?php

$curl = curl_init();
$data = [
  "type"=> "CREDITCARD",
  "sender"=> [
    "ip"=> "1.1.1.1",
    "hash"=> "{{ADICIONE_SENDERHASH_DO_COMPRADOR}}"
  ],
  "creditCard"=> [
    "token"=> "{{ADICIONE_TOKEN_DO_CARTÃO}}",
    "holder"=> [
      "name"=> "Comprador Retentativa",
      "birthDate"=> "27/12/1991",
      "documents"=> [
        [
          "type"=> "CPF",
          "value"=> "00000000000"
        ]
      ],
      "phone"=> [
        "areaCode"=> "11",
        "number"=> "988744005"
      ],
      "billingAddress"=> [
        "street"=> "Av. PagSeguro",
        "number"=> "1384",
        "complement"=> "99o andar",
        "district"=> "Jardim Internet",
        "city"=> "Cidade Exemplo",
        "state"=> "SP",
        "country"=> "BRA",
        "postalCode"=> "01234000"
      ]
    ]
  ],
];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/CA68D297C2C27D8994148F965DBFCF0A/payment-orders/3C7B0DAAEEEE83ECC40E1FA41B096FE0/payment?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
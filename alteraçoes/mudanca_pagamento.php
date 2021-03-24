<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/E401F1C19797217BB4928FA450BECAE6/payment-method?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'{
  "type": "CREDITCARD",
  "sender": {
    "ip": "1.1.1.1",
    "hash": "{{ADICIONE_SENDERHASH_DO_COMPRADOR}}"
  },
  "creditCard": {
    "token": "990b0c8774c04e208e2ae3e107ece4f9",
    "holder": {
      "name": "Novo Comprador",
      "birthDate": "27/12/1991",
      "documents": [
        {
          "type": "CPF",
          "value": "00000000000"
        }
      ],
      "phone": {
        "areaCode": "11",
        "number": "988744005"
      },
      "billingAddress": {
        "street": "Av. PagSeguro",
        "number": "1384",
        "complement": "99o andar",
        "district": "Jardim Internet",
        "city": "Cidade Exemplo",
        "state": "SP",
        "country": "BRA",
        "postalCode": "01234000"
      }
    }
  }
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
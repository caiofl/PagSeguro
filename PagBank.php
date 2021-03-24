<?php

class PagBank {

  public function getSession() {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));

    $session = curl_exec($curl);

    curl_close($curl);

    return $session;
  }

  public function getTokenCard($data) {

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://df.uol.com.br/v2/cards',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'sessionId=def3660e22814b2fa525745903026cb3&
    amount=100.00&
    cardNumber='. $_POST['cardNumber'].'&
    cardBrand=mastercard&
    cardCvv='. $_POST['cardCvv'].'&
    cardExpirationMonth='. $_POST['cardExpirationMonth'] .'&
    cardExpirationYear=' . $_POST['cardExpirationYear'] . '',
    CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: TS0153c357=0160ed0a6c3d9ece8071a6e1d45e01a397e2f650c6a7d3da50e59794291258d4513b4888d69a6b19dc0cdec7fd7966ccd2fde0e2aa'
    ),
));

$tokencard = curl_exec($curl);

curl_close($curl);

return $tokencard;

}

  public function getAdesao($data){

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
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
        'Accept: application/vnd.pagseguro.com.br.v1+json;charset=ISO-8859-1'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    echo $response;

  }

  public function getCobrancaPlano() {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/payment?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION =>     CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'
      <payment>
	      <items>
		      <item>
			      <id>0001</id>
			      <description>Cobranca 123</description>
			      <amount>1.00</amount>
			      <quantity>1</quantity>
		      </item>
	      </items>
	      <reference>REF1234-1</reference>
	      <preApprovalCode>E401F1C19797217BB4928FA450BECAE6</preApprovalCode>
      </payment> ',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/xml',
        'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
    ),
));

  $cobrancaplano = curl_exec($curl);

  curl_close($curl);

  return $cobrancaplano;

  }

  public function getRetentativaPagamento(){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/D5A75D8C30309119948EBF85E87B159F/status?email=caio.fl199607@gmail.com&token=18B94FE33E61490482BE23F17FBE0A57',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION =>     CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'PUT',
      CURLOPT_POSTFIELDS =>'{
	    "status":"ACTIVE"
      }',
      CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'
    ),
));

$retentativa = curl_exec($curl);

curl_close($curl);

return $retentativa;

  }

  
}
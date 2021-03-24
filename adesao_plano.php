<?php

require_once 'PagBank.php';

$PagBank = new PagBank();

//$session = $PagBank->getSession();
session_start();
//$_SESSION['pagbank_session'] = $session;
//var_dump($_SESSION['pagbank_session']);die;

$tokencard = $PagBank->getTokenCard($_POST);

$data = [
	"plan"=> "CB203C9B5E5EFDC774705FA09C380D73",
	"reference"=> "TESTE",
	"sender"=> [
		"name"=> $_POST['name'],
		"email"=> $email = $_POST['email'],
		"hash"=> "hash",
		"phone"=> [
			"areaCode"=> $_POST['areaCode'],
			"number"=> $_POST['telNumber'],
		],
		"address"=> [
			"street"=> $_POST['street'],
			"number"=> $_POST['casaNumber'],
			"complement"=> $_POST['complement'],
			"district"=> $_POST['district'],
			"city"=> $_POST['city'],
			"state"=> $_POST['state'],
			"country"=> $_POST['country'],
			"postalCode"=> $_POST['postalCode'],
		],
		"documents"=> [
			[
				"type"=> "CPF",
				"value"=> $_POST['CPF'],
			]
			
		]
	],
	"paymentMethod"=> [
		"type"=> "CREDITCARD",
		"creditCard"=> [
			"token"=> '940bc27ed5694bf2b9303bf7abe7888f',
			"holder"=> [
				"name"=> $_POST['cc-nome'],
				"birthDate"=> $_POST['birthDate'],
				"documents"=> [
					[
						"type"=> "CPF",
						"value"=> $_POST['CPF'],
					]
				],
				"phone"=> [
					"areaCode"=> $_POST['areaCode'],
					"number"=> $_POST['telNumber'],
				],
				"billingAddress"=> [
					"street"=> $_POST['street'],
					"number"=> $_POST['casaNumber'],
					"complement"=> $_POST['complement'],
					"district"=> $_POST['district'],
					"city"=> $_POST['city'],
					"state"=> $_POST['state'],
					"country"=> $_POST['country'],
					"postalCode"=> $_POST['postalCode'],
				]
			]
		]
	],
];	

$PagBank->getAdesao($data);

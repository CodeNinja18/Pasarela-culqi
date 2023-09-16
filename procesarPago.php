<?php
// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/culqi-php/lib/culqi-php';

// Configurar tu API Key y autenticación
$SECRET_KEY = "sk_test_jasd6939ujn62g26";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
    array(
      "amount" => 1000,
      "currency_code" => "PEN",
      "description" => "Venta de prueba",
      "email" => $_POST["email"],
      "source_id" => $_POST["token"]
    )
);



echo "exitoso";

//Respuesta
//print_r($charge);
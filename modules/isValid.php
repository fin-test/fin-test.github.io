<?php

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$phone = urldecode($input['msisdn']);
$msisdn = $input['msisdn'];
$userName = 'abcmob';
$password = 'kAgZ7dDe';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://nlp.nth.ch:8788/api/v1/hlr/?username=$userName&password=$password&msisdn=004$msisdn",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
   echo isValidNumber($response);
}
function isValidNumber ($data) {
    $responseJSON = json_decode($data, TRUE);
    $jsonData = (object) array(
        'phoneOperator' => $responseJSON['result']['operator'],
        'status' => $responseJSON['result']['status'],
        'statusText' => $responseJSON['result']['statusText']
    );
    return json_encode($jsonData);
}
<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>"https://innovativemusic.desk.com/api/v2/cases/1892",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic c2NvdHRAaW5ub3ZhdGl2ZW11c2ljLmNvbS5hdTpWaW5uaWJlcmczIQ==",
    "cache-control: no-cache",
    "postman-token: c76ece86-cfe5-6bb1-33c2-3ed259e348ee"
  ),
));

$response = curl_exec($curl);
/*$json = json_decode($response, true);*/


$err = curl_error($curl);
curl_close($curl);
/*print_r($response);*/

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>


</body>
</html>
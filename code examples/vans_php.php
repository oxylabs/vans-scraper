<?php

$params = [
    'source' => 'universal_ecommerce',
    'url' => 'https://www.vans.ca/en-ca/categories/sale-c5410?f=gender,women&gad_source=1&gclid=cjwkcaiaungubhakeiwagid4auzyymbv7pagm7evcvelpcwxj9iaurxiyfu5skvbpwyrcj2n2q08ahocyjqqavd_bwe',
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>
<?php

require('jeeb_client.php');

$jeebClient = new JeebClient('PWJWH6IDVKL7HNBF5JMQL2SOAI2XBNPQASKWB2CVASVC4OXAUXVQ');

$data = array();
$data['orderNo'] = "SAMPLE_ORDER_NO"; // Order No
$data['value'] = 0.00123456; // Value in BTC
$data['callbackUrl'] = 'https://webhook.site/e7332614-160f-4d45-9422-a53f67c250d5'; // Callback URL (this is just an example)
$data['webhookUrl'] = 'https://webhook.site/e7332614-160f-4d45-9422-a53f67c250d5'; // Webhook URL (this is just an example)
$data['expiration'] = 15; // Expands default expiration time of payment. should be between 15 to 2880 (mins)
$data['coins'] = 'tbtc/tltc'; // Defines the payable currencies which users can use
$data['language'] = 'auto'; // Payment area's language
$data['allowReject'] = false; // Allows payments to be refunded
$data['allowTestNet'] = true; // Allows testnets to get processed

$result = $jeebClient->issue($data);

print('Payment issuance result= ' . $result['token']);

?>
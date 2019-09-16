<?php

require('jeeb_client.php');

$jeebClient = new JeebClient('PWJWH6IDVKL7HNBF5JMQL2SOAI2XBNPQASKWB2CVASVC4OXAUXVQ');

$data = array();
$data['token'] = "MYSOCUPQMZLAY432AL26CXUDRLXWNEP7OP7U2EM5ZSEYWILFF35JSHJVN7S6Z2G4KHYG2ZEMNM7FDHLS56JNIGQRIWD2UZ6LU5CRP3Q4PEIXD4AGBM"; // Payment token

$result = $jeebClient->status($data);

print('Payment status result= ' . $result['stateId']);

?>
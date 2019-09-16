<?php

require('jeeb_client.php');

$jeebClient = new JeebClient('PWJWH6IDVKL7HNBF5JMQL2SOAI2XBNPQASKWB2CVASVC4OXAUXVQ');
$amount = 100000;
$baseCurrency = 'irr';
$targetCurrency = 'btc';
$convertedAmount = $jeebClient->convert($amount, $baseCurrency, $targetCurrency);

print('Conversion result= ' . $amount . $baseCurrency . ' equals to ' . $convertedAmount . $targetCurrency . PHP_EOL);

?>
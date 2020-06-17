<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \AllDigitalRewards\ChannelAdvisor\Client(
    "REFRESH_TOKEN",
    "APPLICATION_ID",
    "SHARED_SECRET",
    123456789
);

//B72731-9EBE7
$request = $client->bulkProductRequestStatus('B72731-9EBE7');
print_r($request);

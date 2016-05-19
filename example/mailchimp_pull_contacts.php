<?php

use Bridge\Integration\Mailchimp\MailchimpIntegration;
use Bridge\Contact\Bridge\MailChimpContactBridge;
use Bridge\Core\Configuration;

require_once(__DIR__ . '/../vendor/autoload.php');

$integration = new MailChimpIntegration();
$integration->configure();

$key = getenv('BRIDGE_MAILCHIMP_APIKEY');
if (!$key) {
    throw new RuntimeException("Please set environment variable BRIDGE_MAILCHIMP_APIKEY");
}
$config = [
    'api-key' => $key
];

$configuration = new Configuration($integration, $config);

$bridge = new MailChimpContactBridge($configuration);

// load contact from db
//$bridge->pushContact($contact);

$contacts = $bridge->pullContacts();
print_r($contacts); // This should output an array of Bridge\Contact\Model\Contact objects
exit("Done\n");

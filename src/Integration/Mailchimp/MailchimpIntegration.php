<?php

namespace Bridge\Integration\Mailchimp;

use Bridge\Core\Setting;
use Bridge\Core\Configuration;
use Bridge\Core\BaseIntegration;
use \Mailchimp;

class MailchimpIntegration extends BaseIntegration
{

    public function configure()
    {
        $this->setName('Mailchimp');
        $this->setDescription('Cool integration with mailchimp');
        $this->setImageUrl('https://www.customerthermometer.com/img/icon-mailchimp-mobile.png');
        $this->addSetting(
            new Setting(
                'api-key',
                'API Key',
                'The mailchimp API key'
            )
        );
    }
    
    public function getClient(Configuration $configuration)
    {
        if (!$configuration->validate()) {
            throw new RuntimeException("Invalid configuration");
        }
        $client = new Mailchimp(
            $configuration->getKey('api-key')
        );
        return $client;
    }
}

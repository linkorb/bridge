<?php

namespace Bridge\Contact\Bridge;

use Bridge\Contact\Model\Contact;
use Bridge\Contact\Contract\ContactPushContract;
use Bridge\Contact\Contract\ContactPullContract;
use Bridge\Core\Configuration;
use Bridge\Integration\Mailchimp\MailchimpIntegration;

class MailchimpContactBridge implements ContactPushContract, ContactPullContract
{
    protected $integration;
    protected $client;
    
    public function __construct(Configuration $configuration)
    {
        $this->integration = new MailchimpIntegration();
        $this->client = $this->integration->getClient($configuration);
        
    }
    
    public function pushContact(Contact $contact)
    {
        // create or update $contact in mailchimp
    }

    /**
     * $contacts is an array of Contact objects
     */
    public function pushContacts($list)
    {
        // create or update $contact in mailchimp
    }
    
    /**
     * returns one Contact object
     */
    public function pullContact($key)
    {
        // pull one Contact object by key
    }

    /**
     * returns array of Contact objects
     */
    public function pullContacts()
    {
        $lists = $this->client->lists->getList();
        //TODO: this code should use the list to fetch contact details/members
        // instantiate an array of Contact objects and return it
        return $lists;
        
    }
}

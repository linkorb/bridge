<?php

namespace Bridge\Contact\Contract;

use Bridge\Contact\Model\Contact;

interface ContactPushContract
{
    public function pushContact(Contact $contact);
    public function pushContacts($contacts);
}

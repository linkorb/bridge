<?php

namespace Bridge\Contact\Contract;

use Bridge\Contact\Model\Contact;

interface ContactPullContract
{
    public function pullContact($key);
    public function pullContacts();
}

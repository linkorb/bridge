<?php

namespace Bridge\Contact\Writer;

class ContactWriter
{
    public function writeJson($filename, $data)
    {
        // implement this
    }
    
    public function serializeOne(Contact $contact)
    {
        $data = [];
        $data['firstname'] = $contact->getFirstName();
        $data['lastname'] = $contact->getLastName();
        // etc
        
        return $data;
    }

    public function serializeList($contacts)
    {
        $data = [];
        foreach ($contacts as $contact) {
            $data[] = $this->serializeOne($data);
        }
        return $data;
    }
}

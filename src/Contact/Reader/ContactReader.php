<?php

namespace Bridge\Contact\Reader;

class ContactReader
{
    public function loadJson($filename)
    {
        $json = file_get_contents($filename);
        $data = json_decode($json, true);
        return $this->loadArray($data);
    }
    
    public function loadArray($data)
    {
        $contacts = [];
        foreach ($data as $contactData) {
            $contact = new Contact();
            $contact->setFirstName($contactData['firstname']);
            $contact->setFirstName($contactData['lastname']);
            $contacts[] = $contact;
        }
        return $contacts;
    }
}

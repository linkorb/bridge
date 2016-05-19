<?php

namespace Bridge\Contact\Model;

// This should be a new simple external library that we'll use in Radvance too
use LinkORB\AutoAccessor\AccessorTrait;

class Contact
{
    use AccessorTrait;
    
    protected $remoteKey; // Name of the property that is the remote key
    protected function $firstName;
    protected function $lastName;
    protected function $email;
    
    protected $properties[]; // Arbitrary key/values like color, car, etc
    
}

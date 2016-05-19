<?php

namespace Bridge\Core;

class Setting
{
    protected $key; // unique key used for reading the setting by code
    protected $label; // UI label;
    protected $description; // UI description;
    protected $default; // Default value, like a base URL for most APIs
    protected $options = []; // Array of key/value options used to generate a dropdown
    
    public function __construct($key, $label, $description = null, $default = null)
    {
        $this->setKey($key);
        $this->setLabel($label);
        $this->setDescription($description);
        $this->setDefault($default);
    }
    
    public function getKey()
    {
        return $this->key;
    }
    
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
    
    public function getLabel()
    {
        return $this->label;
    }
    
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    public function getDefault()
    {
        return $this->default;
    }
    
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }
    
    
    public function getOptions()
    {
        return $this->options;
    }
    
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }
}

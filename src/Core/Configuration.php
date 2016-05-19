<?php

namespace Bridge\Core;

use RuntimeException;

class Configuration
{
    protected $config;
    protected $integration;
    
    public function __construct($integration, $config)
    {
        $this->integration = $integration;
        $this->config = $config;
        $this->validate();
    }

    public function setKey($key, $value)
    {
        if (!$this->hasSetting($key)) {
            throw new RuntimeException("SetKey: No such setting on this integration: " . $key);
        }
        $this->config[$key] = $value;
    }

    public function hasKey($key)
    {
        return isset($this->config[$key]);
    }

    public function getKey($key)
    {
        if (!$this->integration->hasSetting($key)) {
            throw new RuntimeException("GetKey: No such setting on this integration: " . $key);
        }
        $setting = $this->integration->getSetting($key);
        
        if (!$this->hasKey($key)) {
            return $setting->getDefault();
        }

        return $this->config[$key];
    }

    public function validate()
    {
        // TODO: loop over $this->config key/value array, and validate against $this->integration->settings
        return true;
    }
}

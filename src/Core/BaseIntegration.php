<?php

namespace Bridge\Core;

abstract class BaseIntegration
{
    protected $name; // Unique key of the integration
    protected $description; // User interface description
    protected $imageUrl; // URL to a nice logo for the integration
    protected $config; // Configuration key/values
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    protected $settings = [];
    
    public function addSetting(Setting $setting)
    {
        $this->settings[$setting->getKey()] = $setting;
    }
    
    public function getSettings()
    {
        return $this->settings;
    }
    
    public function hasSetting($key)
    {
        return isset($this->settings[$key]);
    }
    
    public function getSetting($key)
    {
        if (!$this->hasSetting($key)) {
            throw new RuntimeException("No such setting on this integration: " . $key);
        }
        return $this->settings[$key];
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
    
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
}

<?php

namespace Symfony\Config\Jose\KeysConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class P12Config 
{
    private $isPublic;
    private $tags;
    private $path;
    private $password;
    private $additionalValues;
    private $_usedProperties = [];
    
    /**
     * If true, the service will be public, else private.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function isPublic($value): static
    {
        $this->_usedProperties['isPublic'] = true;
        $this->isPublic = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function tags(string $name, mixed $value): static
    {
        $this->_usedProperties['tags'] = true;
        $this->tags[$name] = $value;
    
        return $this;
    }
    
    /**
     * Path of the key file.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * Password used to decrypt the key (optional).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function additionalValues(string $key, mixed $value): static
    {
        $this->_usedProperties['additionalValues'] = true;
        $this->additionalValues[$key] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('is_public', $value)) {
            $this->_usedProperties['isPublic'] = true;
            $this->isPublic = $value['is_public'];
            unset($value['is_public']);
        }
    
        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
        }
    
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (array_key_exists('additional_values', $value)) {
            $this->_usedProperties['additionalValues'] = true;
            $this->additionalValues = $value['additional_values'];
            unset($value['additional_values']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['isPublic'])) {
            $output['is_public'] = $this->isPublic;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['additionalValues'])) {
            $output['additional_values'] = $this->additionalValues;
        }
    
        return $output;
    }

}

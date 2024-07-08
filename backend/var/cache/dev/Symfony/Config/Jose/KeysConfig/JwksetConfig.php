<?php

namespace Symfony\Config\Jose\KeysConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JwksetConfig 
{
    private $isPublic;
    private $tags;
    private $keySet;
    private $index;
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
     * The key set service.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keySet($value): static
    {
        $this->_usedProperties['keySet'] = true;
        $this->keySet = $value;
    
        return $this;
    }
    
    /**
     * The index of the key in the key set.
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function index(mixed $value): static
    {
        $this->_usedProperties['index'] = true;
        $this->index = $value;
    
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
    
        if (array_key_exists('key_set', $value)) {
            $this->_usedProperties['keySet'] = true;
            $this->keySet = $value['key_set'];
            unset($value['key_set']);
        }
    
        if (array_key_exists('index', $value)) {
            $this->_usedProperties['index'] = true;
            $this->index = $value['index'];
            unset($value['index']);
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
        if (isset($this->_usedProperties['keySet'])) {
            $output['key_set'] = $this->keySet;
        }
        if (isset($this->_usedProperties['index'])) {
            $output['index'] = $this->index;
        }
    
        return $output;
    }

}

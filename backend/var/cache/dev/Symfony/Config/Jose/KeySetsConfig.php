<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KeySetsConfig'.\DIRECTORY_SEPARATOR.'JwksetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeySetsConfig'.\DIRECTORY_SEPARATOR.'JkuConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeySetsConfig'.\DIRECTORY_SEPARATOR.'X5uConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KeySetsConfig 
{
    private $jwkset;
    private $jku;
    private $x5u;
    private $_usedProperties = [];
    
    public function jwkset(array $value = []): \Symfony\Config\Jose\KeySetsConfig\JwksetConfig
    {
        if (null === $this->jwkset) {
            $this->_usedProperties['jwkset'] = true;
            $this->jwkset = new \Symfony\Config\Jose\KeySetsConfig\JwksetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwkset()" has already been initialized. You cannot pass values the second time you call jwkset().');
        }
    
        return $this->jwkset;
    }
    
    public function jku(array $value = []): \Symfony\Config\Jose\KeySetsConfig\JkuConfig
    {
        if (null === $this->jku) {
            $this->_usedProperties['jku'] = true;
            $this->jku = new \Symfony\Config\Jose\KeySetsConfig\JkuConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jku()" has already been initialized. You cannot pass values the second time you call jku().');
        }
    
        return $this->jku;
    }
    
    public function x5u(array $value = []): \Symfony\Config\Jose\KeySetsConfig\X5uConfig
    {
        if (null === $this->x5u) {
            $this->_usedProperties['x5u'] = true;
            $this->x5u = new \Symfony\Config\Jose\KeySetsConfig\X5uConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "x5u()" has already been initialized. You cannot pass values the second time you call x5u().');
        }
    
        return $this->x5u;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('jwkset', $value)) {
            $this->_usedProperties['jwkset'] = true;
            $this->jwkset = new \Symfony\Config\Jose\KeySetsConfig\JwksetConfig($value['jwkset']);
            unset($value['jwkset']);
        }
    
        if (array_key_exists('jku', $value)) {
            $this->_usedProperties['jku'] = true;
            $this->jku = new \Symfony\Config\Jose\KeySetsConfig\JkuConfig($value['jku']);
            unset($value['jku']);
        }
    
        if (array_key_exists('x5u', $value)) {
            $this->_usedProperties['x5u'] = true;
            $this->x5u = new \Symfony\Config\Jose\KeySetsConfig\X5uConfig($value['x5u']);
            unset($value['x5u']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jwkset'])) {
            $output['jwkset'] = $this->jwkset->toArray();
        }
        if (isset($this->_usedProperties['jku'])) {
            $output['jku'] = $this->jku->toArray();
        }
        if (isset($this->_usedProperties['x5u'])) {
            $output['x5u'] = $this->x5u->toArray();
        }
    
        return $output;
    }

}

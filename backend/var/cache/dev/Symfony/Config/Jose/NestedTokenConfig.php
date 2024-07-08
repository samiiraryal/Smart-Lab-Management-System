<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NestedToken'.\DIRECTORY_SEPARATOR.'LoadersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NestedToken'.\DIRECTORY_SEPARATOR.'BuildersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NestedTokenConfig 
{
    private $loaders;
    private $builders;
    private $_usedProperties = [];
    
    public function loaders(string $name, array $value = []): \Symfony\Config\Jose\NestedToken\LoadersConfig
    {
        if (!isset($this->loaders[$name])) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = new \Symfony\Config\Jose\NestedToken\LoadersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "loaders()" has already been initialized. You cannot pass values the second time you call loaders().');
        }
    
        return $this->loaders[$name];
    }
    
    public function builders(string $name, array $value = []): \Symfony\Config\Jose\NestedToken\BuildersConfig
    {
        if (!isset($this->builders[$name])) {
            $this->_usedProperties['builders'] = true;
            $this->builders[$name] = new \Symfony\Config\Jose\NestedToken\BuildersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "builders()" has already been initialized. You cannot pass values the second time you call builders().');
        }
    
        return $this->builders[$name];
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('loaders', $value)) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders = array_map(fn ($v) => new \Symfony\Config\Jose\NestedToken\LoadersConfig($v), $value['loaders']);
            unset($value['loaders']);
        }
    
        if (array_key_exists('builders', $value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders = array_map(fn ($v) => new \Symfony\Config\Jose\NestedToken\BuildersConfig($v), $value['builders']);
            unset($value['builders']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['loaders'])) {
            $output['loaders'] = array_map(fn ($v) => $v->toArray(), $this->loaders);
        }
        if (isset($this->_usedProperties['builders'])) {
            $output['builders'] = array_map(fn ($v) => $v->toArray(), $this->builders);
        }
    
        return $output;
    }

}

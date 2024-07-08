<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioCors'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioCors'.\DIRECTORY_SEPARATOR.'PathsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NelmioCorsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaults;
    private $paths;
    private $_usedProperties = [];
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
    /**
     * @default {"allow_credentials":false,"allow_origin":[],"allow_headers":[],"allow_methods":[],"allow_private_network":false,"expose_headers":[],"max_age":0,"hosts":[],"origin_regex":false,"forced_allow_origin_value":null,"skip_same_as_origin":true}
    */
    public function defaults(array $value = []): \Symfony\Config\NelmioCors\DefaultsConfig
    {
        if (null === $this->defaults) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\NelmioCors\DefaultsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }
<<<<<<< HEAD

        return $this->defaults;
    }

=======
    
        return $this->defaults;
    }
    
>>>>>>> origin/sandesh
    public function paths(string $path, array $value = []): \Symfony\Config\NelmioCors\PathsConfig
    {
        if (!isset($this->paths[$path])) {
            $this->_usedProperties['paths'] = true;
            $this->paths[$path] = new \Symfony\Config\NelmioCors\PathsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paths()" has already been initialized. You cannot pass values the second time you call paths().');
        }
<<<<<<< HEAD

        return $this->paths[$path];
    }

=======
    
        return $this->paths[$path];
    }
    
>>>>>>> origin/sandesh
    public function getExtensionAlias(): string
    {
        return 'nelmio_cors';
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
    public function __construct(array $value = [])
    {
        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = new \Symfony\Config\NelmioCors\DefaultsConfig($value['defaults']);
            unset($value['defaults']);
        }
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
        if (array_key_exists('paths', $value)) {
            $this->_usedProperties['paths'] = true;
            $this->paths = array_map(fn ($v) => new \Symfony\Config\NelmioCors\PathsConfig($v), $value['paths']);
            unset($value['paths']);
        }
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults->toArray();
        }
        if (isset($this->_usedProperties['paths'])) {
            $output['paths'] = array_map(fn ($v) => $v->toArray(), $this->paths);
        }
<<<<<<< HEAD

=======
    
>>>>>>> origin/sandesh
        return $output;
    }

}

<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Jws'.\DIRECTORY_SEPARATOR.'BuildersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jws'.\DIRECTORY_SEPARATOR.'VerifiersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jws'.\DIRECTORY_SEPARATOR.'SerializersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jws'.\DIRECTORY_SEPARATOR.'LoadersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JwsConfig 
{
    private $builders;
    private $verifiers;
    private $serializers;
    private $loaders;
    private $_usedProperties = [];

    public function builders(string $name, array $value = []): \Symfony\Config\Jose\Jws\BuildersConfig
    {
        if (!isset($this->builders[$name])) {
            $this->_usedProperties['builders'] = true;
            $this->builders[$name] = new \Symfony\Config\Jose\Jws\BuildersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "builders()" has already been initialized. You cannot pass values the second time you call builders().');
        }

        return $this->builders[$name];
    }

    public function verifiers(string $name, array $value = []): \Symfony\Config\Jose\Jws\VerifiersConfig
    {
        if (!isset($this->verifiers[$name])) {
            $this->_usedProperties['verifiers'] = true;
            $this->verifiers[$name] = new \Symfony\Config\Jose\Jws\VerifiersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "verifiers()" has already been initialized. You cannot pass values the second time you call verifiers().');
        }

        return $this->verifiers[$name];
    }

    public function serializers(string $name, array $value = []): \Symfony\Config\Jose\Jws\SerializersConfig
    {
        if (!isset($this->serializers[$name])) {
            $this->_usedProperties['serializers'] = true;
            $this->serializers[$name] = new \Symfony\Config\Jose\Jws\SerializersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serializers()" has already been initialized. You cannot pass values the second time you call serializers().');
        }

        return $this->serializers[$name];
    }

    public function loaders(string $name, array $value = []): \Symfony\Config\Jose\Jws\LoadersConfig
    {
        if (!isset($this->loaders[$name])) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = new \Symfony\Config\Jose\Jws\LoadersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "loaders()" has already been initialized. You cannot pass values the second time you call loaders().');
        }

        return $this->loaders[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('builders', $value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders = array_map(fn ($v) => new \Symfony\Config\Jose\Jws\BuildersConfig($v), $value['builders']);
            unset($value['builders']);
        }

        if (array_key_exists('verifiers', $value)) {
            $this->_usedProperties['verifiers'] = true;
            $this->verifiers = array_map(fn ($v) => new \Symfony\Config\Jose\Jws\VerifiersConfig($v), $value['verifiers']);
            unset($value['verifiers']);
        }

        if (array_key_exists('serializers', $value)) {
            $this->_usedProperties['serializers'] = true;
            $this->serializers = array_map(fn ($v) => new \Symfony\Config\Jose\Jws\SerializersConfig($v), $value['serializers']);
            unset($value['serializers']);
        }

        if (array_key_exists('loaders', $value)) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders = array_map(fn ($v) => new \Symfony\Config\Jose\Jws\LoadersConfig($v), $value['loaders']);
            unset($value['loaders']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['builders'])) {
            $output['builders'] = array_map(fn ($v) => $v->toArray(), $this->builders);
        }
        if (isset($this->_usedProperties['verifiers'])) {
            $output['verifiers'] = array_map(fn ($v) => $v->toArray(), $this->verifiers);
        }
        if (isset($this->_usedProperties['serializers'])) {
            $output['serializers'] = array_map(fn ($v) => $v->toArray(), $this->serializers);
        }
        if (isset($this->_usedProperties['loaders'])) {
            $output['loaders'] = array_map(fn ($v) => $v->toArray(), $this->loaders);
        }

        return $output;
    }

}

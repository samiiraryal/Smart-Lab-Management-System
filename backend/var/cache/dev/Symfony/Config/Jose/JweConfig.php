<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Jwe'.\DIRECTORY_SEPARATOR.'BuildersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jwe'.\DIRECTORY_SEPARATOR.'DecryptersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jwe'.\DIRECTORY_SEPARATOR.'SerializersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jwe'.\DIRECTORY_SEPARATOR.'LoadersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JweConfig 
{
    private $builders;
    private $decrypters;
    private $serializers;
    private $loaders;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Jose\Jwe\BuildersConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\Jwe\BuildersConfig : static)
     */
    public function builders(string $name, mixed $value = []): \Symfony\Config\Jose\Jwe\BuildersConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders[$name] = $value;

            return $this;
        }

        if (!isset($this->builders[$name]) || !$this->builders[$name] instanceof \Symfony\Config\Jose\Jwe\BuildersConfig) {
            $this->_usedProperties['builders'] = true;
            $this->builders[$name] = new \Symfony\Config\Jose\Jwe\BuildersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "builders()" has already been initialized. You cannot pass values the second time you call builders().');
        }

        return $this->builders[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Jose\Jwe\DecryptersConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\Jwe\DecryptersConfig : static)
     */
    public function decrypters(string $name, mixed $value = []): \Symfony\Config\Jose\Jwe\DecryptersConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['decrypters'] = true;
            $this->decrypters[$name] = $value;

            return $this;
        }

        if (!isset($this->decrypters[$name]) || !$this->decrypters[$name] instanceof \Symfony\Config\Jose\Jwe\DecryptersConfig) {
            $this->_usedProperties['decrypters'] = true;
            $this->decrypters[$name] = new \Symfony\Config\Jose\Jwe\DecryptersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "decrypters()" has already been initialized. You cannot pass values the second time you call decrypters().');
        }

        return $this->decrypters[$name];
    }

    public function serializers(string $name, array $value = []): \Symfony\Config\Jose\Jwe\SerializersConfig
    {
        if (!isset($this->serializers[$name])) {
            $this->_usedProperties['serializers'] = true;
            $this->serializers[$name] = new \Symfony\Config\Jose\Jwe\SerializersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serializers()" has already been initialized. You cannot pass values the second time you call serializers().');
        }

        return $this->serializers[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Jose\Jwe\LoadersConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\Jwe\LoadersConfig : static)
     */
    public function loaders(string $name, mixed $value = []): \Symfony\Config\Jose\Jwe\LoadersConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = $value;

            return $this;
        }

        if (!isset($this->loaders[$name]) || !$this->loaders[$name] instanceof \Symfony\Config\Jose\Jwe\LoadersConfig) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = new \Symfony\Config\Jose\Jwe\LoadersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "loaders()" has already been initialized. You cannot pass values the second time you call loaders().');
        }

        return $this->loaders[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('builders', $value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Jose\Jwe\BuildersConfig($v) : $v, $value['builders']);
            unset($value['builders']);
        }

        if (array_key_exists('decrypters', $value)) {
            $this->_usedProperties['decrypters'] = true;
            $this->decrypters = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Jose\Jwe\DecryptersConfig($v) : $v, $value['decrypters']);
            unset($value['decrypters']);
        }

        if (array_key_exists('serializers', $value)) {
            $this->_usedProperties['serializers'] = true;
            $this->serializers = array_map(fn ($v) => new \Symfony\Config\Jose\Jwe\SerializersConfig($v), $value['serializers']);
            unset($value['serializers']);
        }

        if (array_key_exists('loaders', $value)) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Jose\Jwe\LoadersConfig($v) : $v, $value['loaders']);
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
            $output['builders'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Jose\Jwe\BuildersConfig ? $v->toArray() : $v, $this->builders);
        }
        if (isset($this->_usedProperties['decrypters'])) {
            $output['decrypters'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Jose\Jwe\DecryptersConfig ? $v->toArray() : $v, $this->decrypters);
        }
        if (isset($this->_usedProperties['serializers'])) {
            $output['serializers'] = array_map(fn ($v) => $v->toArray(), $this->serializers);
        }
        if (isset($this->_usedProperties['loaders'])) {
            $output['loaders'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Jose\Jwe\LoadersConfig ? $v->toArray() : $v, $this->loaders);
        }

        return $output;
    }

}

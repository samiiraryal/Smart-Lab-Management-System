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

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Jose\NestedToken\LoadersConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\NestedToken\LoadersConfig : static)
     */
    public function loaders(string $name, mixed $value = []): \Symfony\Config\Jose\NestedToken\LoadersConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = $value;

            return $this;
        }

        if (!isset($this->loaders[$name]) || !$this->loaders[$name] instanceof \Symfony\Config\Jose\NestedToken\LoadersConfig) {
            $this->_usedProperties['loaders'] = true;
            $this->loaders[$name] = new \Symfony\Config\Jose\NestedToken\LoadersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "loaders()" has already been initialized. You cannot pass values the second time you call loaders().');
        }

        return $this->loaders[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\Jose\NestedToken\BuildersConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\NestedToken\BuildersConfig : static)
     */
    public function builders(string $name, mixed $value = []): \Symfony\Config\Jose\NestedToken\BuildersConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders[$name] = $value;

            return $this;
        }

        if (!isset($this->builders[$name]) || !$this->builders[$name] instanceof \Symfony\Config\Jose\NestedToken\BuildersConfig) {
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
            $this->loaders = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Jose\NestedToken\LoadersConfig($v) : $v, $value['loaders']);
            unset($value['loaders']);
        }

        if (array_key_exists('builders', $value)) {
            $this->_usedProperties['builders'] = true;
            $this->builders = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Jose\NestedToken\BuildersConfig($v) : $v, $value['builders']);
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
            $output['loaders'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Jose\NestedToken\LoadersConfig ? $v->toArray() : $v, $this->loaders);
        }
        if (isset($this->_usedProperties['builders'])) {
            $output['builders'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Jose\NestedToken\BuildersConfig ? $v->toArray() : $v, $this->builders);
        }

        return $output;
    }

}

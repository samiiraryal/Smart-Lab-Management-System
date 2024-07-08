<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Checkers'.\DIRECTORY_SEPARATOR.'ClaimsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Checkers'.\DIRECTORY_SEPARATOR.'HeadersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CheckersConfig 
{
    private $claims;
    private $headers;
    private $_usedProperties = [];
    
    public function claims(string $name, array $value = []): \Symfony\Config\Jose\Checkers\ClaimsConfig
    {
        if (!isset($this->claims[$name])) {
            $this->_usedProperties['claims'] = true;
            $this->claims[$name] = new \Symfony\Config\Jose\Checkers\ClaimsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "claims()" has already been initialized. You cannot pass values the second time you call claims().');
        }
    
        return $this->claims[$name];
    }
    
    public function headers(string $name, array $value = []): \Symfony\Config\Jose\Checkers\HeadersConfig
    {
        if (!isset($this->headers[$name])) {
            $this->_usedProperties['headers'] = true;
            $this->headers[$name] = new \Symfony\Config\Jose\Checkers\HeadersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "headers()" has already been initialized. You cannot pass values the second time you call headers().');
        }
    
        return $this->headers[$name];
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('claims', $value)) {
            $this->_usedProperties['claims'] = true;
            $this->claims = array_map(fn ($v) => new \Symfony\Config\Jose\Checkers\ClaimsConfig($v), $value['claims']);
            unset($value['claims']);
        }
    
        if (array_key_exists('headers', $value)) {
            $this->_usedProperties['headers'] = true;
            $this->headers = array_map(fn ($v) => new \Symfony\Config\Jose\Checkers\HeadersConfig($v), $value['headers']);
            unset($value['headers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['claims'])) {
            $output['claims'] = array_map(fn ($v) => $v->toArray(), $this->claims);
        }
        if (isset($this->_usedProperties['headers'])) {
            $output['headers'] = array_map(fn ($v) => $v->toArray(), $this->headers);
        }
    
        return $output;
    }

}

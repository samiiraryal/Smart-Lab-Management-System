<?php

namespace Symfony\Config\Jose;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'FileConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'P12Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'CertificateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'ValuesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'SecretConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'JwkConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'X5cConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KeysConfig'.\DIRECTORY_SEPARATOR.'JwksetConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KeysConfig 
{
    private $file;
    private $p12;
    private $certificate;
    private $values;
    private $secret;
    private $jwk;
    private $x5c;
    private $jwkset;
    private $_usedProperties = [];
    
    public function file(array $value = []): \Symfony\Config\Jose\KeysConfig\FileConfig
    {
        if (null === $this->file) {
            $this->_usedProperties['file'] = true;
            $this->file = new \Symfony\Config\Jose\KeysConfig\FileConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "file()" has already been initialized. You cannot pass values the second time you call file().');
        }
    
        return $this->file;
    }
    
    public function p12(array $value = []): \Symfony\Config\Jose\KeysConfig\P12Config
    {
        if (null === $this->p12) {
            $this->_usedProperties['p12'] = true;
            $this->p12 = new \Symfony\Config\Jose\KeysConfig\P12Config($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "p12()" has already been initialized. You cannot pass values the second time you call p12().');
        }
    
        return $this->p12;
    }
    
    public function certificate(array $value = []): \Symfony\Config\Jose\KeysConfig\CertificateConfig
    {
        if (null === $this->certificate) {
            $this->_usedProperties['certificate'] = true;
            $this->certificate = new \Symfony\Config\Jose\KeysConfig\CertificateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "certificate()" has already been initialized. You cannot pass values the second time you call certificate().');
        }
    
        return $this->certificate;
    }
    
    public function values(array $value = []): \Symfony\Config\Jose\KeysConfig\ValuesConfig
    {
        if (null === $this->values) {
            $this->_usedProperties['values'] = true;
            $this->values = new \Symfony\Config\Jose\KeysConfig\ValuesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "values()" has already been initialized. You cannot pass values the second time you call values().');
        }
    
        return $this->values;
    }
    
    public function secret(array $value = []): \Symfony\Config\Jose\KeysConfig\SecretConfig
    {
        if (null === $this->secret) {
            $this->_usedProperties['secret'] = true;
            $this->secret = new \Symfony\Config\Jose\KeysConfig\SecretConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "secret()" has already been initialized. You cannot pass values the second time you call secret().');
        }
    
        return $this->secret;
    }
    
    public function jwk(array $value = []): \Symfony\Config\Jose\KeysConfig\JwkConfig
    {
        if (null === $this->jwk) {
            $this->_usedProperties['jwk'] = true;
            $this->jwk = new \Symfony\Config\Jose\KeysConfig\JwkConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwk()" has already been initialized. You cannot pass values the second time you call jwk().');
        }
    
        return $this->jwk;
    }
    
    public function x5c(array $value = []): \Symfony\Config\Jose\KeysConfig\X5cConfig
    {
        if (null === $this->x5c) {
            $this->_usedProperties['x5c'] = true;
            $this->x5c = new \Symfony\Config\Jose\KeysConfig\X5cConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "x5c()" has already been initialized. You cannot pass values the second time you call x5c().');
        }
    
        return $this->x5c;
    }
    
    public function jwkset(array $value = []): \Symfony\Config\Jose\KeysConfig\JwksetConfig
    {
        if (null === $this->jwkset) {
            $this->_usedProperties['jwkset'] = true;
            $this->jwkset = new \Symfony\Config\Jose\KeysConfig\JwksetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwkset()" has already been initialized. You cannot pass values the second time you call jwkset().');
        }
    
        return $this->jwkset;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('file', $value)) {
            $this->_usedProperties['file'] = true;
            $this->file = new \Symfony\Config\Jose\KeysConfig\FileConfig($value['file']);
            unset($value['file']);
        }
    
        if (array_key_exists('p12', $value)) {
            $this->_usedProperties['p12'] = true;
            $this->p12 = new \Symfony\Config\Jose\KeysConfig\P12Config($value['p12']);
            unset($value['p12']);
        }
    
        if (array_key_exists('certificate', $value)) {
            $this->_usedProperties['certificate'] = true;
            $this->certificate = new \Symfony\Config\Jose\KeysConfig\CertificateConfig($value['certificate']);
            unset($value['certificate']);
        }
    
        if (array_key_exists('values', $value)) {
            $this->_usedProperties['values'] = true;
            $this->values = new \Symfony\Config\Jose\KeysConfig\ValuesConfig($value['values']);
            unset($value['values']);
        }
    
        if (array_key_exists('secret', $value)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = new \Symfony\Config\Jose\KeysConfig\SecretConfig($value['secret']);
            unset($value['secret']);
        }
    
        if (array_key_exists('jwk', $value)) {
            $this->_usedProperties['jwk'] = true;
            $this->jwk = new \Symfony\Config\Jose\KeysConfig\JwkConfig($value['jwk']);
            unset($value['jwk']);
        }
    
        if (array_key_exists('x5c', $value)) {
            $this->_usedProperties['x5c'] = true;
            $this->x5c = new \Symfony\Config\Jose\KeysConfig\X5cConfig($value['x5c']);
            unset($value['x5c']);
        }
    
        if (array_key_exists('jwkset', $value)) {
            $this->_usedProperties['jwkset'] = true;
            $this->jwkset = new \Symfony\Config\Jose\KeysConfig\JwksetConfig($value['jwkset']);
            unset($value['jwkset']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['file'])) {
            $output['file'] = $this->file->toArray();
        }
        if (isset($this->_usedProperties['p12'])) {
            $output['p12'] = $this->p12->toArray();
        }
        if (isset($this->_usedProperties['certificate'])) {
            $output['certificate'] = $this->certificate->toArray();
        }
        if (isset($this->_usedProperties['values'])) {
            $output['values'] = $this->values->toArray();
        }
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret->toArray();
        }
        if (isset($this->_usedProperties['jwk'])) {
            $output['jwk'] = $this->jwk->toArray();
        }
        if (isset($this->_usedProperties['x5c'])) {
            $output['x5c'] = $this->x5c->toArray();
        }
        if (isset($this->_usedProperties['jwkset'])) {
            $output['jwkset'] = $this->jwkset->toArray();
        }
    
        return $output;
    }

}

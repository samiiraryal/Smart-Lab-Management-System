<?php

namespace Symfony\Config\Jose\NestedToken;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoadersConfig 
{
    private $isPublic;
    private $signatureAlgorithms;
    private $encryptionAlgorithms;
    private $jwsSerializers;
    private $jweSerializers;
    private $jwsHeaderCheckers;
    private $jweHeaderCheckers;
    private $tags;
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
    public function signatureAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['signatureAlgorithms'] = true;
        $this->signatureAlgorithms[$name] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function encryptionAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['encryptionAlgorithms'] = true;
        $this->encryptionAlgorithms[$name] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function jwsSerializers(string $name, mixed $value): static
    {
        $this->_usedProperties['jwsSerializers'] = true;
        $this->jwsSerializers[$name] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function jweSerializers(string $name, mixed $value): static
    {
        $this->_usedProperties['jweSerializers'] = true;
        $this->jweSerializers[$name] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function jwsHeaderCheckers(string $name, mixed $value): static
    {
        $this->_usedProperties['jwsHeaderCheckers'] = true;
        $this->jwsHeaderCheckers[$name] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function jweHeaderCheckers(string $name, mixed $value): static
    {
        $this->_usedProperties['jweHeaderCheckers'] = true;
        $this->jweHeaderCheckers[$name] = $value;
    
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
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('is_public', $value)) {
            $this->_usedProperties['isPublic'] = true;
            $this->isPublic = $value['is_public'];
            unset($value['is_public']);
        }
    
        if (array_key_exists('signature_algorithms', $value)) {
            $this->_usedProperties['signatureAlgorithms'] = true;
            $this->signatureAlgorithms = $value['signature_algorithms'];
            unset($value['signature_algorithms']);
        }
    
        if (array_key_exists('encryption_algorithms', $value)) {
            $this->_usedProperties['encryptionAlgorithms'] = true;
            $this->encryptionAlgorithms = $value['encryption_algorithms'];
            unset($value['encryption_algorithms']);
        }
    
        if (array_key_exists('jws_serializers', $value)) {
            $this->_usedProperties['jwsSerializers'] = true;
            $this->jwsSerializers = $value['jws_serializers'];
            unset($value['jws_serializers']);
        }
    
        if (array_key_exists('jwe_serializers', $value)) {
            $this->_usedProperties['jweSerializers'] = true;
            $this->jweSerializers = $value['jwe_serializers'];
            unset($value['jwe_serializers']);
        }
    
        if (array_key_exists('jws_header_checkers', $value)) {
            $this->_usedProperties['jwsHeaderCheckers'] = true;
            $this->jwsHeaderCheckers = $value['jws_header_checkers'];
            unset($value['jws_header_checkers']);
        }
    
        if (array_key_exists('jwe_header_checkers', $value)) {
            $this->_usedProperties['jweHeaderCheckers'] = true;
            $this->jweHeaderCheckers = $value['jwe_header_checkers'];
            unset($value['jwe_header_checkers']);
        }
    
        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
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
        if (isset($this->_usedProperties['signatureAlgorithms'])) {
            $output['signature_algorithms'] = $this->signatureAlgorithms;
        }
        if (isset($this->_usedProperties['encryptionAlgorithms'])) {
            $output['encryption_algorithms'] = $this->encryptionAlgorithms;
        }
        if (isset($this->_usedProperties['jwsSerializers'])) {
            $output['jws_serializers'] = $this->jwsSerializers;
        }
        if (isset($this->_usedProperties['jweSerializers'])) {
            $output['jwe_serializers'] = $this->jweSerializers;
        }
        if (isset($this->_usedProperties['jwsHeaderCheckers'])) {
            $output['jws_header_checkers'] = $this->jwsHeaderCheckers;
        }
        if (isset($this->_usedProperties['jweHeaderCheckers'])) {
            $output['jwe_header_checkers'] = $this->jweHeaderCheckers;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
    
        return $output;
    }

}

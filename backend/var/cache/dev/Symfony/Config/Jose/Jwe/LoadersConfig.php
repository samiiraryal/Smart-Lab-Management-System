<?php

namespace Symfony\Config\Jose\Jwe;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoadersConfig 
{
    private $isPublic;
    private $encryptionAlgorithms;
    private $keyEncryptionAlgorithms;
    private $contentEncryptionAlgorithms;
    private $compressionMethods;
    private $serializers;
    private $headerCheckers;
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
    public function encryptionAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['encryptionAlgorithms'] = true;
        $this->encryptionAlgorithms[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function keyEncryptionAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['keyEncryptionAlgorithms'] = true;
        $this->keyEncryptionAlgorithms[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function contentEncryptionAlgorithms(string $name, mixed $value): static
    {
        $this->_usedProperties['contentEncryptionAlgorithms'] = true;
        $this->contentEncryptionAlgorithms[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function compressionMethods(string $name, mixed $value): static
    {
        $this->_usedProperties['compressionMethods'] = true;
        $this->compressionMethods[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function serializers(string $name, mixed $value): static
    {
        $this->_usedProperties['serializers'] = true;
        $this->serializers[$name] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function headerCheckers(string $name, mixed $value): static
    {
        $this->_usedProperties['headerCheckers'] = true;
        $this->headerCheckers[$name] = $value;

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

        if (array_key_exists('encryption_algorithms', $value)) {
            $this->_usedProperties['encryptionAlgorithms'] = true;
            $this->encryptionAlgorithms = $value['encryption_algorithms'];
            unset($value['encryption_algorithms']);
        }

        if (array_key_exists('key_encryption_algorithms', $value)) {
            $this->_usedProperties['keyEncryptionAlgorithms'] = true;
            $this->keyEncryptionAlgorithms = $value['key_encryption_algorithms'];
            unset($value['key_encryption_algorithms']);
        }

        if (array_key_exists('content_encryption_algorithms', $value)) {
            $this->_usedProperties['contentEncryptionAlgorithms'] = true;
            $this->contentEncryptionAlgorithms = $value['content_encryption_algorithms'];
            unset($value['content_encryption_algorithms']);
        }

        if (array_key_exists('compression_methods', $value)) {
            $this->_usedProperties['compressionMethods'] = true;
            $this->compressionMethods = $value['compression_methods'];
            unset($value['compression_methods']);
        }

        if (array_key_exists('serializers', $value)) {
            $this->_usedProperties['serializers'] = true;
            $this->serializers = $value['serializers'];
            unset($value['serializers']);
        }

        if (array_key_exists('header_checkers', $value)) {
            $this->_usedProperties['headerCheckers'] = true;
            $this->headerCheckers = $value['header_checkers'];
            unset($value['header_checkers']);
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
        if (isset($this->_usedProperties['encryptionAlgorithms'])) {
            $output['encryption_algorithms'] = $this->encryptionAlgorithms;
        }
        if (isset($this->_usedProperties['keyEncryptionAlgorithms'])) {
            $output['key_encryption_algorithms'] = $this->keyEncryptionAlgorithms;
        }
        if (isset($this->_usedProperties['contentEncryptionAlgorithms'])) {
            $output['content_encryption_algorithms'] = $this->contentEncryptionAlgorithms;
        }
        if (isset($this->_usedProperties['compressionMethods'])) {
            $output['compression_methods'] = $this->compressionMethods;
        }
        if (isset($this->_usedProperties['serializers'])) {
            $output['serializers'] = $this->serializers;
        }
        if (isset($this->_usedProperties['headerCheckers'])) {
            $output['header_checkers'] = $this->headerCheckers;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }

        return $output;
    }

}

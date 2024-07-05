<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'CheckersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'JwsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'JweConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'NestedTokenConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'KeySetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'KeysConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'JwkUrisConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Jose'.\DIRECTORY_SEPARATOR.'JkuFactoryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JoseConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $clock;
    private $checkers;
    private $jws;
    private $jwe;
    private $nestedToken;
    private $keySets;
    private $keys;
    private $jwkUris;
    private $jkuFactory;
    private $_usedProperties = [];

    /**
     * PSR-20 clock
     * @default 'jose.internal_clock'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clock($value): static
    {
        $this->_usedProperties['clock'] = true;
        $this->clock = $value;

        return $this;
    }

    /**
     * @default {"claims":[],"headers":[]}
    */
    public function checkers(array $value = []): \Symfony\Config\Jose\CheckersConfig
    {
        if (null === $this->checkers) {
            $this->_usedProperties['checkers'] = true;
            $this->checkers = new \Symfony\Config\Jose\CheckersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "checkers()" has already been initialized. You cannot pass values the second time you call checkers().');
        }

        return $this->checkers;
    }

    /**
     * @default {"builders":[],"verifiers":[],"serializers":[],"loaders":[]}
    */
    public function jws(array $value = []): \Symfony\Config\Jose\JwsConfig
    {
        if (null === $this->jws) {
            $this->_usedProperties['jws'] = true;
            $this->jws = new \Symfony\Config\Jose\JwsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jws()" has already been initialized. You cannot pass values the second time you call jws().');
        }

        return $this->jws;
    }

    /**
     * @default {"builders":[],"decrypters":[],"serializers":[],"loaders":[]}
    */
    public function jwe(array $value = []): \Symfony\Config\Jose\JweConfig
    {
        if (null === $this->jwe) {
            $this->_usedProperties['jwe'] = true;
            $this->jwe = new \Symfony\Config\Jose\JweConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwe()" has already been initialized. You cannot pass values the second time you call jwe().');
        }

        return $this->jwe;
    }

    public function nestedToken(array $value = []): \Symfony\Config\Jose\NestedTokenConfig
    {
        if (null === $this->nestedToken) {
            $this->_usedProperties['nestedToken'] = true;
            $this->nestedToken = new \Symfony\Config\Jose\NestedTokenConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "nestedToken()" has already been initialized. You cannot pass values the second time you call nestedToken().');
        }

        return $this->nestedToken;
    }

    public function keySets(string $name, array $value = []): \Symfony\Config\Jose\KeySetsConfig
    {
        if (!isset($this->keySets[$name])) {
            $this->_usedProperties['keySets'] = true;
            $this->keySets[$name] = new \Symfony\Config\Jose\KeySetsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "keySets()" has already been initialized. You cannot pass values the second time you call keySets().');
        }

        return $this->keySets[$name];
    }

    public function keys(string $name, array $value = []): \Symfony\Config\Jose\KeysConfig
    {
        if (!isset($this->keys[$name])) {
            $this->_usedProperties['keys'] = true;
            $this->keys[$name] = new \Symfony\Config\Jose\KeysConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "keys()" has already been initialized. You cannot pass values the second time you call keys().');
        }

        return $this->keys[$name];
    }

    public function jwkUris(string $name, array $value = []): \Symfony\Config\Jose\JwkUrisConfig
    {
        if (!isset($this->jwkUris[$name])) {
            $this->_usedProperties['jwkUris'] = true;
            $this->jwkUris[$name] = new \Symfony\Config\Jose\JwkUrisConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwkUris()" has already been initialized. You cannot pass values the second time you call jwkUris().');
        }

        return $this->jwkUris[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"client":null}
     * @return \Symfony\Config\Jose\JkuFactoryConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Jose\JkuFactoryConfig : static)
     */
    public function jkuFactory(array $value = []): \Symfony\Config\Jose\JkuFactoryConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['jkuFactory'] = true;
            $this->jkuFactory = $value;

            return $this;
        }

        if (!$this->jkuFactory instanceof \Symfony\Config\Jose\JkuFactoryConfig) {
            $this->_usedProperties['jkuFactory'] = true;
            $this->jkuFactory = new \Symfony\Config\Jose\JkuFactoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jkuFactory()" has already been initialized. You cannot pass values the second time you call jkuFactory().');
        }

        return $this->jkuFactory;
    }

    public function getExtensionAlias(): string
    {
        return 'jose';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('clock', $value)) {
            $this->_usedProperties['clock'] = true;
            $this->clock = $value['clock'];
            unset($value['clock']);
        }

        if (array_key_exists('checkers', $value)) {
            $this->_usedProperties['checkers'] = true;
            $this->checkers = new \Symfony\Config\Jose\CheckersConfig($value['checkers']);
            unset($value['checkers']);
        }

        if (array_key_exists('jws', $value)) {
            $this->_usedProperties['jws'] = true;
            $this->jws = new \Symfony\Config\Jose\JwsConfig($value['jws']);
            unset($value['jws']);
        }

        if (array_key_exists('jwe', $value)) {
            $this->_usedProperties['jwe'] = true;
            $this->jwe = new \Symfony\Config\Jose\JweConfig($value['jwe']);
            unset($value['jwe']);
        }

        if (array_key_exists('nested_token', $value)) {
            $this->_usedProperties['nestedToken'] = true;
            $this->nestedToken = new \Symfony\Config\Jose\NestedTokenConfig($value['nested_token']);
            unset($value['nested_token']);
        }

        if (array_key_exists('key_sets', $value)) {
            $this->_usedProperties['keySets'] = true;
            $this->keySets = array_map(fn ($v) => new \Symfony\Config\Jose\KeySetsConfig($v), $value['key_sets']);
            unset($value['key_sets']);
        }

        if (array_key_exists('keys', $value)) {
            $this->_usedProperties['keys'] = true;
            $this->keys = array_map(fn ($v) => new \Symfony\Config\Jose\KeysConfig($v), $value['keys']);
            unset($value['keys']);
        }

        if (array_key_exists('jwk_uris', $value)) {
            $this->_usedProperties['jwkUris'] = true;
            $this->jwkUris = array_map(fn ($v) => new \Symfony\Config\Jose\JwkUrisConfig($v), $value['jwk_uris']);
            unset($value['jwk_uris']);
        }

        if (array_key_exists('jku_factory', $value)) {
            $this->_usedProperties['jkuFactory'] = true;
            $this->jkuFactory = \is_array($value['jku_factory']) ? new \Symfony\Config\Jose\JkuFactoryConfig($value['jku_factory']) : $value['jku_factory'];
            unset($value['jku_factory']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['clock'])) {
            $output['clock'] = $this->clock;
        }
        if (isset($this->_usedProperties['checkers'])) {
            $output['checkers'] = $this->checkers->toArray();
        }
        if (isset($this->_usedProperties['jws'])) {
            $output['jws'] = $this->jws->toArray();
        }
        if (isset($this->_usedProperties['jwe'])) {
            $output['jwe'] = $this->jwe->toArray();
        }
        if (isset($this->_usedProperties['nestedToken'])) {
            $output['nested_token'] = $this->nestedToken->toArray();
        }
        if (isset($this->_usedProperties['keySets'])) {
            $output['key_sets'] = array_map(fn ($v) => $v->toArray(), $this->keySets);
        }
        if (isset($this->_usedProperties['keys'])) {
            $output['keys'] = array_map(fn ($v) => $v->toArray(), $this->keys);
        }
        if (isset($this->_usedProperties['jwkUris'])) {
            $output['jwk_uris'] = array_map(fn ($v) => $v->toArray(), $this->jwkUris);
        }
        if (isset($this->_usedProperties['jkuFactory'])) {
            $output['jku_factory'] = $this->jkuFactory instanceof \Symfony\Config\Jose\JkuFactoryConfig ? $this->jkuFactory->toArray() : $this->jkuFactory;
        }

        return $output;
    }

}

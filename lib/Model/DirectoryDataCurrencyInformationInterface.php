<?php
/**
 * DirectoryDataCurrencyInformationInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;

/**
 * DirectoryDataCurrencyInformationInterface Class Doc Comment
 *
 * @category    Class
 * @description Currency Information interface.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DirectoryDataCurrencyInformationInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'directory-data-currency-information-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseCurrencyCode' => 'string',
        'baseCurrencySymbol' => 'string',
        'defaultDisplayCurrencyCode' => 'string',
        'defaultDisplayCurrencySymbol' => 'string',
        'availableCurrencyCodes' => 'string[]',
        'exchangeRates' => '\SpringImport\Swagger\Magento2\Client\Model\DirectoryDataExchangeRateInterface[]',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\DirectoryDataCurrencyInformationExtensionInterface'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'baseCurrencyCode' => 'base_currency_code',
        'baseCurrencySymbol' => 'base_currency_symbol',
        'defaultDisplayCurrencyCode' => 'default_display_currency_code',
        'defaultDisplayCurrencySymbol' => 'default_display_currency_symbol',
        'availableCurrencyCodes' => 'available_currency_codes',
        'exchangeRates' => 'exchange_rates',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'baseCurrencyCode' => 'setBaseCurrencyCode',
        'baseCurrencySymbol' => 'setBaseCurrencySymbol',
        'defaultDisplayCurrencyCode' => 'setDefaultDisplayCurrencyCode',
        'defaultDisplayCurrencySymbol' => 'setDefaultDisplayCurrencySymbol',
        'availableCurrencyCodes' => 'setAvailableCurrencyCodes',
        'exchangeRates' => 'setExchangeRates',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'baseCurrencyCode' => 'getBaseCurrencyCode',
        'baseCurrencySymbol' => 'getBaseCurrencySymbol',
        'defaultDisplayCurrencyCode' => 'getDefaultDisplayCurrencyCode',
        'defaultDisplayCurrencySymbol' => 'getDefaultDisplayCurrencySymbol',
        'availableCurrencyCodes' => 'getAvailableCurrencyCodes',
        'exchangeRates' => 'getExchangeRates',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['baseCurrencyCode'] = isset($data['baseCurrencyCode']) ? $data['baseCurrencyCode'] : null;
        $this->container['baseCurrencySymbol'] = isset($data['baseCurrencySymbol']) ? $data['baseCurrencySymbol'] : null;
        $this->container['defaultDisplayCurrencyCode'] = isset($data['defaultDisplayCurrencyCode']) ? $data['defaultDisplayCurrencyCode'] : null;
        $this->container['defaultDisplayCurrencySymbol'] = isset($data['defaultDisplayCurrencySymbol']) ? $data['defaultDisplayCurrencySymbol'] : null;
        $this->container['availableCurrencyCodes'] = isset($data['availableCurrencyCodes']) ? $data['availableCurrencyCodes'] : null;
        $this->container['exchangeRates'] = isset($data['exchangeRates']) ? $data['exchangeRates'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['baseCurrencyCode'] === null) {
            $invalid_properties[] = "'baseCurrencyCode' can't be null";
        }
        if ($this->container['baseCurrencySymbol'] === null) {
            $invalid_properties[] = "'baseCurrencySymbol' can't be null";
        }
        if ($this->container['defaultDisplayCurrencyCode'] === null) {
            $invalid_properties[] = "'defaultDisplayCurrencyCode' can't be null";
        }
        if ($this->container['defaultDisplayCurrencySymbol'] === null) {
            $invalid_properties[] = "'defaultDisplayCurrencySymbol' can't be null";
        }
        if ($this->container['availableCurrencyCodes'] === null) {
            $invalid_properties[] = "'availableCurrencyCodes' can't be null";
        }
        if ($this->container['exchangeRates'] === null) {
            $invalid_properties[] = "'exchangeRates' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['baseCurrencyCode'] === null) {
            return false;
        }
        if ($this->container['baseCurrencySymbol'] === null) {
            return false;
        }
        if ($this->container['defaultDisplayCurrencyCode'] === null) {
            return false;
        }
        if ($this->container['defaultDisplayCurrencySymbol'] === null) {
            return false;
        }
        if ($this->container['availableCurrencyCodes'] === null) {
            return false;
        }
        if ($this->container['exchangeRates'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets baseCurrencyCode
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['baseCurrencyCode'];
    }

    /**
     * Sets baseCurrencyCode
     * @param string $baseCurrencyCode The base currency code for the store.
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        $this->container['baseCurrencyCode'] = $baseCurrencyCode;

        return $this;
    }

    /**
     * Gets baseCurrencySymbol
     * @return string
     */
    public function getBaseCurrencySymbol()
    {
        return $this->container['baseCurrencySymbol'];
    }

    /**
     * Sets baseCurrencySymbol
     * @param string $baseCurrencySymbol The currency symbol of the base currency for the store.
     * @return $this
     */
    public function setBaseCurrencySymbol($baseCurrencySymbol)
    {
        $this->container['baseCurrencySymbol'] = $baseCurrencySymbol;

        return $this;
    }

    /**
     * Gets defaultDisplayCurrencyCode
     * @return string
     */
    public function getDefaultDisplayCurrencyCode()
    {
        return $this->container['defaultDisplayCurrencyCode'];
    }

    /**
     * Sets defaultDisplayCurrencyCode
     * @param string $defaultDisplayCurrencyCode The default display currency code for the store.
     * @return $this
     */
    public function setDefaultDisplayCurrencyCode($defaultDisplayCurrencyCode)
    {
        $this->container['defaultDisplayCurrencyCode'] = $defaultDisplayCurrencyCode;

        return $this;
    }

    /**
     * Gets defaultDisplayCurrencySymbol
     * @return string
     */
    public function getDefaultDisplayCurrencySymbol()
    {
        return $this->container['defaultDisplayCurrencySymbol'];
    }

    /**
     * Sets defaultDisplayCurrencySymbol
     * @param string $defaultDisplayCurrencySymbol The currency symbol of the default display currency for the store.
     * @return $this
     */
    public function setDefaultDisplayCurrencySymbol($defaultDisplayCurrencySymbol)
    {
        $this->container['defaultDisplayCurrencySymbol'] = $defaultDisplayCurrencySymbol;

        return $this;
    }

    /**
     * Gets availableCurrencyCodes
     * @return string[]
     */
    public function getAvailableCurrencyCodes()
    {
        return $this->container['availableCurrencyCodes'];
    }

    /**
     * Sets availableCurrencyCodes
     * @param string[] $availableCurrencyCodes The list of allowed currency codes for the store.
     * @return $this
     */
    public function setAvailableCurrencyCodes($availableCurrencyCodes)
    {
        $this->container['availableCurrencyCodes'] = $availableCurrencyCodes;

        return $this;
    }

    /**
     * Gets exchangeRates
     * @return \SpringImport\Swagger\Magento2\Client\Model\DirectoryDataExchangeRateInterface[]
     */
    public function getExchangeRates()
    {
        return $this->container['exchangeRates'];
    }

    /**
     * Sets exchangeRates
     * @param \SpringImport\Swagger\Magento2\Client\Model\DirectoryDataExchangeRateInterface[] $exchangeRates The list of exchange rate information for the store.
     * @return $this
     */
    public function setExchangeRates($exchangeRates)
    {
        $this->container['exchangeRates'] = $exchangeRates;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\DirectoryDataCurrencyInformationExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\DirectoryDataCurrencyInformationExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



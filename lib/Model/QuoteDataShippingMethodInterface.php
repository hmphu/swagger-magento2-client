<?php
/**
 * QuoteDataShippingMethodInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * QuoteDataShippingMethodInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface ShippingMethodInterface
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataShippingMethodInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-shipping-method-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'carrier_code' => 'string',
        'method_code' => 'string',
        'carrier_title' => 'string',
        'method_title' => 'string',
        'amount' => 'float',
        'base_amount' => 'float',
        'available' => 'bool',
        'extension_attributes' => '\Swagger\Client\Model\QuoteDataShippingMethodExtensionInterface',
        'error_message' => 'string',
        'price_excl_tax' => 'float',
        'price_incl_tax' => 'float'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'carrier_code' => 'carrierCode',
        'method_code' => 'methodCode',
        'carrier_title' => 'carrierTitle',
        'method_title' => 'methodTitle',
        'amount' => 'amount',
        'base_amount' => 'baseAmount',
        'available' => 'available',
        'extension_attributes' => 'extensionAttributes',
        'error_message' => 'errorMessage',
        'price_excl_tax' => 'priceExclTax',
        'price_incl_tax' => 'priceInclTax'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'carrier_code' => 'setCarrierCode',
        'method_code' => 'setMethodCode',
        'carrier_title' => 'setCarrierTitle',
        'method_title' => 'setMethodTitle',
        'amount' => 'setAmount',
        'base_amount' => 'setBaseAmount',
        'available' => 'setAvailable',
        'extension_attributes' => 'setExtensionAttributes',
        'error_message' => 'setErrorMessage',
        'price_excl_tax' => 'setPriceExclTax',
        'price_incl_tax' => 'setPriceInclTax'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'carrier_code' => 'getCarrierCode',
        'method_code' => 'getMethodCode',
        'carrier_title' => 'getCarrierTitle',
        'method_title' => 'getMethodTitle',
        'amount' => 'getAmount',
        'base_amount' => 'getBaseAmount',
        'available' => 'getAvailable',
        'extension_attributes' => 'getExtensionAttributes',
        'error_message' => 'getErrorMessage',
        'price_excl_tax' => 'getPriceExclTax',
        'price_incl_tax' => 'getPriceInclTax'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['method_code'] = isset($data['method_code']) ? $data['method_code'] : null;
        $this->container['carrier_title'] = isset($data['carrier_title']) ? $data['carrier_title'] : null;
        $this->container['method_title'] = isset($data['method_title']) ? $data['method_title'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['base_amount'] = isset($data['base_amount']) ? $data['base_amount'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['price_excl_tax'] = isset($data['price_excl_tax']) ? $data['price_excl_tax'] : null;
        $this->container['price_incl_tax'] = isset($data['price_incl_tax']) ? $data['price_incl_tax'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['carrier_code'] === null) {
            $invalid_properties[] = "'carrier_code' can't be null";
        }
        if ($this->container['method_code'] === null) {
            $invalid_properties[] = "'method_code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['base_amount'] === null) {
            $invalid_properties[] = "'base_amount' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalid_properties[] = "'available' can't be null";
        }
        if ($this->container['error_message'] === null) {
            $invalid_properties[] = "'error_message' can't be null";
        }
        if ($this->container['price_excl_tax'] === null) {
            $invalid_properties[] = "'price_excl_tax' can't be null";
        }
        if ($this->container['price_incl_tax'] === null) {
            $invalid_properties[] = "'price_incl_tax' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['carrier_code'] === null) {
            return false;
        }
        if ($this->container['method_code'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['base_amount'] === null) {
            return false;
        }
        if ($this->container['available'] === null) {
            return false;
        }
        if ($this->container['error_message'] === null) {
            return false;
        }
        if ($this->container['price_excl_tax'] === null) {
            return false;
        }
        if ($this->container['price_incl_tax'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets carrier_code
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     * @param string $carrier_code Shipping carrier code.
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets method_code
     * @return string
     */
    public function getMethodCode()
    {
        return $this->container['method_code'];
    }

    /**
     * Sets method_code
     * @param string $method_code Shipping method code.
     * @return $this
     */
    public function setMethodCode($method_code)
    {
        $this->container['method_code'] = $method_code;

        return $this;
    }

    /**
     * Gets carrier_title
     * @return string
     */
    public function getCarrierTitle()
    {
        return $this->container['carrier_title'];
    }

    /**
     * Sets carrier_title
     * @param string $carrier_title Shipping carrier title. Otherwise, null.
     * @return $this
     */
    public function setCarrierTitle($carrier_title)
    {
        $this->container['carrier_title'] = $carrier_title;

        return $this;
    }

    /**
     * Gets method_title
     * @return string
     */
    public function getMethodTitle()
    {
        return $this->container['method_title'];
    }

    /**
     * Sets method_title
     * @param string $method_title Shipping method title. Otherwise, null.
     * @return $this
     */
    public function setMethodTitle($method_title)
    {
        $this->container['method_title'] = $method_title;

        return $this;
    }

    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount Shipping amount in store currency.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets base_amount
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->container['base_amount'];
    }

    /**
     * Sets base_amount
     * @param float $base_amount Shipping amount in base currency.
     * @return $this
     */
    public function setBaseAmount($base_amount)
    {
        $this->container['base_amount'] = $base_amount;

        return $this;
    }

    /**
     * Gets available
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     * @param bool $available The value of the availability flag for the current shipping method.
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\QuoteDataShippingMethodExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\QuoteDataShippingMethodExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message Shipping Error message.
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets price_excl_tax
     * @return float
     */
    public function getPriceExclTax()
    {
        return $this->container['price_excl_tax'];
    }

    /**
     * Sets price_excl_tax
     * @param float $price_excl_tax Shipping price excl tax.
     * @return $this
     */
    public function setPriceExclTax($price_excl_tax)
    {
        $this->container['price_excl_tax'] = $price_excl_tax;

        return $this;
    }

    /**
     * Gets price_incl_tax
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->container['price_incl_tax'];
    }

    /**
     * Sets price_incl_tax
     * @param float $price_incl_tax Shipping price incl tax.
     * @return $this
     */
    public function setPriceInclTax($price_incl_tax)
    {
        $this->container['price_incl_tax'] = $price_incl_tax;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

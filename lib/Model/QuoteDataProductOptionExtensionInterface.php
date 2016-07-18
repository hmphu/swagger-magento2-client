<?php
/**
 * QuoteDataProductOptionExtensionInterface
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
 * QuoteDataProductOptionExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Quote\\Api\\Data\\ProductOptionInterface
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataProductOptionExtensionInterface implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-product-option-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'custom_options' => '\Swagger\Client\Model\CatalogDataCustomOptionInterface[]',
        'bundle_options' => '\Swagger\Client\Model\BundleDataBundleOptionInterface[]',
        'downloadable_option' => '\Swagger\Client\Model\DownloadableDataDownloadableOptionInterface',
        'configurable_item_options' => '\Swagger\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[]'
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
        'custom_options' => 'customOptions',
        'bundle_options' => 'bundleOptions',
        'downloadable_option' => 'downloadableOption',
        'configurable_item_options' => 'configurableItemOptions'
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
        'custom_options' => 'setCustomOptions',
        'bundle_options' => 'setBundleOptions',
        'downloadable_option' => 'setDownloadableOption',
        'configurable_item_options' => 'setConfigurableItemOptions'
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
        'custom_options' => 'getCustomOptions',
        'bundle_options' => 'getBundleOptions',
        'downloadable_option' => 'getDownloadableOption',
        'configurable_item_options' => 'getConfigurableItemOptions'
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
        $this->container['custom_options'] = isset($data['custom_options']) ? $data['custom_options'] : null;
        $this->container['bundle_options'] = isset($data['bundle_options']) ? $data['bundle_options'] : null;
        $this->container['downloadable_option'] = isset($data['downloadable_option']) ? $data['downloadable_option'] : null;
        $this->container['configurable_item_options'] = isset($data['configurable_item_options']) ? $data['configurable_item_options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets custom_options
     * @return \Swagger\Client\Model\CatalogDataCustomOptionInterface[]
     */
    public function getCustomOptions()
    {
        return $this->container['custom_options'];
    }

    /**
     * Sets custom_options
     * @param \Swagger\Client\Model\CatalogDataCustomOptionInterface[] $custom_options
     * @return $this
     */
    public function setCustomOptions($custom_options)
    {
        $this->container['custom_options'] = $custom_options;

        return $this;
    }

    /**
     * Gets bundle_options
     * @return \Swagger\Client\Model\BundleDataBundleOptionInterface[]
     */
    public function getBundleOptions()
    {
        return $this->container['bundle_options'];
    }

    /**
     * Sets bundle_options
     * @param \Swagger\Client\Model\BundleDataBundleOptionInterface[] $bundle_options
     * @return $this
     */
    public function setBundleOptions($bundle_options)
    {
        $this->container['bundle_options'] = $bundle_options;

        return $this;
    }

    /**
     * Gets downloadable_option
     * @return \Swagger\Client\Model\DownloadableDataDownloadableOptionInterface
     */
    public function getDownloadableOption()
    {
        return $this->container['downloadable_option'];
    }

    /**
     * Sets downloadable_option
     * @param \Swagger\Client\Model\DownloadableDataDownloadableOptionInterface $downloadable_option
     * @return $this
     */
    public function setDownloadableOption($downloadable_option)
    {
        $this->container['downloadable_option'] = $downloadable_option;

        return $this;
    }

    /**
     * Gets configurable_item_options
     * @return \Swagger\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[]
     */
    public function getConfigurableItemOptions()
    {
        return $this->container['configurable_item_options'];
    }

    /**
     * Sets configurable_item_options
     * @param \Swagger\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[] $configurable_item_options
     * @return $this
     */
    public function setConfigurableItemOptions($configurable_item_options)
    {
        $this->container['configurable_item_options'] = $configurable_item_options;

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

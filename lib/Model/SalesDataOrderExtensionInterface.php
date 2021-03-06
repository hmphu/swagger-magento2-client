<?php
/**
 * SalesDataOrderExtensionInterface
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
 * SalesDataOrderExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Sales\\Api\\Data\\OrderInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataOrderExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-order-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shippingAssignments' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShippingAssignmentInterface[]',
        'appliedTaxes' => '\SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsAppliedTaxInterface[]',
        'itemAppliedTaxes' => '\SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsItemInterface[]',
        'convertingFromQuote' => 'bool',
        'baseCustomerBalanceAmount' => 'float',
        'customerBalanceAmount' => 'float',
        'giftMessage' => '\SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface',
        'gwId' => 'string',
        'gwAllowGiftReceipt' => 'string',
        'gwAddCard' => 'string',
        'gwPrice' => 'string',
        'gwBasePrice' => 'string',
        'gwItemsPrice' => 'string',
        'gwItemsBasePrice' => 'string',
        'gwCardPrice' => 'string',
        'gwCardBasePrice' => 'string',
        'gwBaseTaxAmount' => 'string',
        'gwTaxAmount' => 'string',
        'gwItemsBaseTaxAmount' => 'string',
        'gwItemsTaxAmount' => 'string',
        'gwCardBaseTaxAmount' => 'string',
        'gwCardTaxAmount' => 'string',
        'gwPriceInclTax' => 'string',
        'gwBasePriceInclTax' => 'string',
        'gwCardPriceInclTax' => 'string',
        'gwCardBasePriceInclTax' => 'string',
        'gwItemsPriceInclTax' => 'string',
        'gwItemsBasePriceInclTax' => 'string'
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
        'shippingAssignments' => 'shipping_assignments',
        'appliedTaxes' => 'applied_taxes',
        'itemAppliedTaxes' => 'item_applied_taxes',
        'convertingFromQuote' => 'converting_from_quote',
        'baseCustomerBalanceAmount' => 'base_customer_balance_amount',
        'customerBalanceAmount' => 'customer_balance_amount',
        'giftMessage' => 'gift_message',
        'gwId' => 'gw_id',
        'gwAllowGiftReceipt' => 'gw_allow_gift_receipt',
        'gwAddCard' => 'gw_add_card',
        'gwPrice' => 'gw_price',
        'gwBasePrice' => 'gw_base_price',
        'gwItemsPrice' => 'gw_items_price',
        'gwItemsBasePrice' => 'gw_items_base_price',
        'gwCardPrice' => 'gw_card_price',
        'gwCardBasePrice' => 'gw_card_base_price',
        'gwBaseTaxAmount' => 'gw_base_tax_amount',
        'gwTaxAmount' => 'gw_tax_amount',
        'gwItemsBaseTaxAmount' => 'gw_items_base_tax_amount',
        'gwItemsTaxAmount' => 'gw_items_tax_amount',
        'gwCardBaseTaxAmount' => 'gw_card_base_tax_amount',
        'gwCardTaxAmount' => 'gw_card_tax_amount',
        'gwPriceInclTax' => 'gw_price_incl_tax',
        'gwBasePriceInclTax' => 'gw_base_price_incl_tax',
        'gwCardPriceInclTax' => 'gw_card_price_incl_tax',
        'gwCardBasePriceInclTax' => 'gw_card_base_price_incl_tax',
        'gwItemsPriceInclTax' => 'gw_items_price_incl_tax',
        'gwItemsBasePriceInclTax' => 'gw_items_base_price_incl_tax'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'shippingAssignments' => 'setShippingAssignments',
        'appliedTaxes' => 'setAppliedTaxes',
        'itemAppliedTaxes' => 'setItemAppliedTaxes',
        'convertingFromQuote' => 'setConvertingFromQuote',
        'baseCustomerBalanceAmount' => 'setBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'setCustomerBalanceAmount',
        'giftMessage' => 'setGiftMessage',
        'gwId' => 'setGwId',
        'gwAllowGiftReceipt' => 'setGwAllowGiftReceipt',
        'gwAddCard' => 'setGwAddCard',
        'gwPrice' => 'setGwPrice',
        'gwBasePrice' => 'setGwBasePrice',
        'gwItemsPrice' => 'setGwItemsPrice',
        'gwItemsBasePrice' => 'setGwItemsBasePrice',
        'gwCardPrice' => 'setGwCardPrice',
        'gwCardBasePrice' => 'setGwCardBasePrice',
        'gwBaseTaxAmount' => 'setGwBaseTaxAmount',
        'gwTaxAmount' => 'setGwTaxAmount',
        'gwItemsBaseTaxAmount' => 'setGwItemsBaseTaxAmount',
        'gwItemsTaxAmount' => 'setGwItemsTaxAmount',
        'gwCardBaseTaxAmount' => 'setGwCardBaseTaxAmount',
        'gwCardTaxAmount' => 'setGwCardTaxAmount',
        'gwPriceInclTax' => 'setGwPriceInclTax',
        'gwBasePriceInclTax' => 'setGwBasePriceInclTax',
        'gwCardPriceInclTax' => 'setGwCardPriceInclTax',
        'gwCardBasePriceInclTax' => 'setGwCardBasePriceInclTax',
        'gwItemsPriceInclTax' => 'setGwItemsPriceInclTax',
        'gwItemsBasePriceInclTax' => 'setGwItemsBasePriceInclTax'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'shippingAssignments' => 'getShippingAssignments',
        'appliedTaxes' => 'getAppliedTaxes',
        'itemAppliedTaxes' => 'getItemAppliedTaxes',
        'convertingFromQuote' => 'getConvertingFromQuote',
        'baseCustomerBalanceAmount' => 'getBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'getCustomerBalanceAmount',
        'giftMessage' => 'getGiftMessage',
        'gwId' => 'getGwId',
        'gwAllowGiftReceipt' => 'getGwAllowGiftReceipt',
        'gwAddCard' => 'getGwAddCard',
        'gwPrice' => 'getGwPrice',
        'gwBasePrice' => 'getGwBasePrice',
        'gwItemsPrice' => 'getGwItemsPrice',
        'gwItemsBasePrice' => 'getGwItemsBasePrice',
        'gwCardPrice' => 'getGwCardPrice',
        'gwCardBasePrice' => 'getGwCardBasePrice',
        'gwBaseTaxAmount' => 'getGwBaseTaxAmount',
        'gwTaxAmount' => 'getGwTaxAmount',
        'gwItemsBaseTaxAmount' => 'getGwItemsBaseTaxAmount',
        'gwItemsTaxAmount' => 'getGwItemsTaxAmount',
        'gwCardBaseTaxAmount' => 'getGwCardBaseTaxAmount',
        'gwCardTaxAmount' => 'getGwCardTaxAmount',
        'gwPriceInclTax' => 'getGwPriceInclTax',
        'gwBasePriceInclTax' => 'getGwBasePriceInclTax',
        'gwCardPriceInclTax' => 'getGwCardPriceInclTax',
        'gwCardBasePriceInclTax' => 'getGwCardBasePriceInclTax',
        'gwItemsPriceInclTax' => 'getGwItemsPriceInclTax',
        'gwItemsBasePriceInclTax' => 'getGwItemsBasePriceInclTax'
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
        $this->container['shippingAssignments'] = isset($data['shippingAssignments']) ? $data['shippingAssignments'] : null;
        $this->container['appliedTaxes'] = isset($data['appliedTaxes']) ? $data['appliedTaxes'] : null;
        $this->container['itemAppliedTaxes'] = isset($data['itemAppliedTaxes']) ? $data['itemAppliedTaxes'] : null;
        $this->container['convertingFromQuote'] = isset($data['convertingFromQuote']) ? $data['convertingFromQuote'] : null;
        $this->container['baseCustomerBalanceAmount'] = isset($data['baseCustomerBalanceAmount']) ? $data['baseCustomerBalanceAmount'] : null;
        $this->container['customerBalanceAmount'] = isset($data['customerBalanceAmount']) ? $data['customerBalanceAmount'] : null;
        $this->container['giftMessage'] = isset($data['giftMessage']) ? $data['giftMessage'] : null;
        $this->container['gwId'] = isset($data['gwId']) ? $data['gwId'] : null;
        $this->container['gwAllowGiftReceipt'] = isset($data['gwAllowGiftReceipt']) ? $data['gwAllowGiftReceipt'] : null;
        $this->container['gwAddCard'] = isset($data['gwAddCard']) ? $data['gwAddCard'] : null;
        $this->container['gwPrice'] = isset($data['gwPrice']) ? $data['gwPrice'] : null;
        $this->container['gwBasePrice'] = isset($data['gwBasePrice']) ? $data['gwBasePrice'] : null;
        $this->container['gwItemsPrice'] = isset($data['gwItemsPrice']) ? $data['gwItemsPrice'] : null;
        $this->container['gwItemsBasePrice'] = isset($data['gwItemsBasePrice']) ? $data['gwItemsBasePrice'] : null;
        $this->container['gwCardPrice'] = isset($data['gwCardPrice']) ? $data['gwCardPrice'] : null;
        $this->container['gwCardBasePrice'] = isset($data['gwCardBasePrice']) ? $data['gwCardBasePrice'] : null;
        $this->container['gwBaseTaxAmount'] = isset($data['gwBaseTaxAmount']) ? $data['gwBaseTaxAmount'] : null;
        $this->container['gwTaxAmount'] = isset($data['gwTaxAmount']) ? $data['gwTaxAmount'] : null;
        $this->container['gwItemsBaseTaxAmount'] = isset($data['gwItemsBaseTaxAmount']) ? $data['gwItemsBaseTaxAmount'] : null;
        $this->container['gwItemsTaxAmount'] = isset($data['gwItemsTaxAmount']) ? $data['gwItemsTaxAmount'] : null;
        $this->container['gwCardBaseTaxAmount'] = isset($data['gwCardBaseTaxAmount']) ? $data['gwCardBaseTaxAmount'] : null;
        $this->container['gwCardTaxAmount'] = isset($data['gwCardTaxAmount']) ? $data['gwCardTaxAmount'] : null;
        $this->container['gwPriceInclTax'] = isset($data['gwPriceInclTax']) ? $data['gwPriceInclTax'] : null;
        $this->container['gwBasePriceInclTax'] = isset($data['gwBasePriceInclTax']) ? $data['gwBasePriceInclTax'] : null;
        $this->container['gwCardPriceInclTax'] = isset($data['gwCardPriceInclTax']) ? $data['gwCardPriceInclTax'] : null;
        $this->container['gwCardBasePriceInclTax'] = isset($data['gwCardBasePriceInclTax']) ? $data['gwCardBasePriceInclTax'] : null;
        $this->container['gwItemsPriceInclTax'] = isset($data['gwItemsPriceInclTax']) ? $data['gwItemsPriceInclTax'] : null;
        $this->container['gwItemsBasePriceInclTax'] = isset($data['gwItemsBasePriceInclTax']) ? $data['gwItemsBasePriceInclTax'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets shippingAssignments
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShippingAssignmentInterface[]
     */
    public function getShippingAssignments()
    {
        return $this->container['shippingAssignments'];
    }

    /**
     * Sets shippingAssignments
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->container['shippingAssignments'] = $shippingAssignments;

        return $this;
    }

    /**
     * Gets appliedTaxes
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsAppliedTaxInterface[]
     */
    public function getAppliedTaxes()
    {
        return $this->container['appliedTaxes'];
    }

    /**
     * Sets appliedTaxes
     * @param \SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes)
    {
        $this->container['appliedTaxes'] = $appliedTaxes;

        return $this;
    }

    /**
     * Gets itemAppliedTaxes
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsItemInterface[]
     */
    public function getItemAppliedTaxes()
    {
        return $this->container['itemAppliedTaxes'];
    }

    /**
     * Sets itemAppliedTaxes
     * @param \SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes)
    {
        $this->container['itemAppliedTaxes'] = $itemAppliedTaxes;

        return $this;
    }

    /**
     * Gets convertingFromQuote
     * @return bool
     */
    public function getConvertingFromQuote()
    {
        return $this->container['convertingFromQuote'];
    }

    /**
     * Sets convertingFromQuote
     * @param bool $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote)
    {
        $this->container['convertingFromQuote'] = $convertingFromQuote;

        return $this;
    }

    /**
     * Gets baseCustomerBalanceAmount
     * @return float
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->container['baseCustomerBalanceAmount'];
    }

    /**
     * Sets baseCustomerBalanceAmount
     * @param float $baseCustomerBalanceAmount
     * @return $this
     */
    public function setBaseCustomerBalanceAmount($baseCustomerBalanceAmount)
    {
        $this->container['baseCustomerBalanceAmount'] = $baseCustomerBalanceAmount;

        return $this;
    }

    /**
     * Gets customerBalanceAmount
     * @return float
     */
    public function getCustomerBalanceAmount()
    {
        return $this->container['customerBalanceAmount'];
    }

    /**
     * Sets customerBalanceAmount
     * @param float $customerBalanceAmount
     * @return $this
     */
    public function setCustomerBalanceAmount($customerBalanceAmount)
    {
        $this->container['customerBalanceAmount'] = $customerBalanceAmount;

        return $this;
    }

    /**
     * Gets giftMessage
     * @return \SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface
     */
    public function getGiftMessage()
    {
        return $this->container['giftMessage'];
    }

    /**
     * Sets giftMessage
     * @param \SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage($giftMessage)
    {
        $this->container['giftMessage'] = $giftMessage;

        return $this;
    }

    /**
     * Gets gwId
     * @return string
     */
    public function getGwId()
    {
        return $this->container['gwId'];
    }

    /**
     * Sets gwId
     * @param string $gwId
     * @return $this
     */
    public function setGwId($gwId)
    {
        $this->container['gwId'] = $gwId;

        return $this;
    }

    /**
     * Gets gwAllowGiftReceipt
     * @return string
     */
    public function getGwAllowGiftReceipt()
    {
        return $this->container['gwAllowGiftReceipt'];
    }

    /**
     * Sets gwAllowGiftReceipt
     * @param string $gwAllowGiftReceipt
     * @return $this
     */
    public function setGwAllowGiftReceipt($gwAllowGiftReceipt)
    {
        $this->container['gwAllowGiftReceipt'] = $gwAllowGiftReceipt;

        return $this;
    }

    /**
     * Gets gwAddCard
     * @return string
     */
    public function getGwAddCard()
    {
        return $this->container['gwAddCard'];
    }

    /**
     * Sets gwAddCard
     * @param string $gwAddCard
     * @return $this
     */
    public function setGwAddCard($gwAddCard)
    {
        $this->container['gwAddCard'] = $gwAddCard;

        return $this;
    }

    /**
     * Gets gwPrice
     * @return string
     */
    public function getGwPrice()
    {
        return $this->container['gwPrice'];
    }

    /**
     * Sets gwPrice
     * @param string $gwPrice
     * @return $this
     */
    public function setGwPrice($gwPrice)
    {
        $this->container['gwPrice'] = $gwPrice;

        return $this;
    }

    /**
     * Gets gwBasePrice
     * @return string
     */
    public function getGwBasePrice()
    {
        return $this->container['gwBasePrice'];
    }

    /**
     * Sets gwBasePrice
     * @param string $gwBasePrice
     * @return $this
     */
    public function setGwBasePrice($gwBasePrice)
    {
        $this->container['gwBasePrice'] = $gwBasePrice;

        return $this;
    }

    /**
     * Gets gwItemsPrice
     * @return string
     */
    public function getGwItemsPrice()
    {
        return $this->container['gwItemsPrice'];
    }

    /**
     * Sets gwItemsPrice
     * @param string $gwItemsPrice
     * @return $this
     */
    public function setGwItemsPrice($gwItemsPrice)
    {
        $this->container['gwItemsPrice'] = $gwItemsPrice;

        return $this;
    }

    /**
     * Gets gwItemsBasePrice
     * @return string
     */
    public function getGwItemsBasePrice()
    {
        return $this->container['gwItemsBasePrice'];
    }

    /**
     * Sets gwItemsBasePrice
     * @param string $gwItemsBasePrice
     * @return $this
     */
    public function setGwItemsBasePrice($gwItemsBasePrice)
    {
        $this->container['gwItemsBasePrice'] = $gwItemsBasePrice;

        return $this;
    }

    /**
     * Gets gwCardPrice
     * @return string
     */
    public function getGwCardPrice()
    {
        return $this->container['gwCardPrice'];
    }

    /**
     * Sets gwCardPrice
     * @param string $gwCardPrice
     * @return $this
     */
    public function setGwCardPrice($gwCardPrice)
    {
        $this->container['gwCardPrice'] = $gwCardPrice;

        return $this;
    }

    /**
     * Gets gwCardBasePrice
     * @return string
     */
    public function getGwCardBasePrice()
    {
        return $this->container['gwCardBasePrice'];
    }

    /**
     * Sets gwCardBasePrice
     * @param string $gwCardBasePrice
     * @return $this
     */
    public function setGwCardBasePrice($gwCardBasePrice)
    {
        $this->container['gwCardBasePrice'] = $gwCardBasePrice;

        return $this;
    }

    /**
     * Gets gwBaseTaxAmount
     * @return string
     */
    public function getGwBaseTaxAmount()
    {
        return $this->container['gwBaseTaxAmount'];
    }

    /**
     * Sets gwBaseTaxAmount
     * @param string $gwBaseTaxAmount
     * @return $this
     */
    public function setGwBaseTaxAmount($gwBaseTaxAmount)
    {
        $this->container['gwBaseTaxAmount'] = $gwBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwTaxAmount
     * @return string
     */
    public function getGwTaxAmount()
    {
        return $this->container['gwTaxAmount'];
    }

    /**
     * Sets gwTaxAmount
     * @param string $gwTaxAmount
     * @return $this
     */
    public function setGwTaxAmount($gwTaxAmount)
    {
        $this->container['gwTaxAmount'] = $gwTaxAmount;

        return $this;
    }

    /**
     * Gets gwItemsBaseTaxAmount
     * @return string
     */
    public function getGwItemsBaseTaxAmount()
    {
        return $this->container['gwItemsBaseTaxAmount'];
    }

    /**
     * Sets gwItemsBaseTaxAmount
     * @param string $gwItemsBaseTaxAmount
     * @return $this
     */
    public function setGwItemsBaseTaxAmount($gwItemsBaseTaxAmount)
    {
        $this->container['gwItemsBaseTaxAmount'] = $gwItemsBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwItemsTaxAmount
     * @return string
     */
    public function getGwItemsTaxAmount()
    {
        return $this->container['gwItemsTaxAmount'];
    }

    /**
     * Sets gwItemsTaxAmount
     * @param string $gwItemsTaxAmount
     * @return $this
     */
    public function setGwItemsTaxAmount($gwItemsTaxAmount)
    {
        $this->container['gwItemsTaxAmount'] = $gwItemsTaxAmount;

        return $this;
    }

    /**
     * Gets gwCardBaseTaxAmount
     * @return string
     */
    public function getGwCardBaseTaxAmount()
    {
        return $this->container['gwCardBaseTaxAmount'];
    }

    /**
     * Sets gwCardBaseTaxAmount
     * @param string $gwCardBaseTaxAmount
     * @return $this
     */
    public function setGwCardBaseTaxAmount($gwCardBaseTaxAmount)
    {
        $this->container['gwCardBaseTaxAmount'] = $gwCardBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwCardTaxAmount
     * @return string
     */
    public function getGwCardTaxAmount()
    {
        return $this->container['gwCardTaxAmount'];
    }

    /**
     * Sets gwCardTaxAmount
     * @param string $gwCardTaxAmount
     * @return $this
     */
    public function setGwCardTaxAmount($gwCardTaxAmount)
    {
        $this->container['gwCardTaxAmount'] = $gwCardTaxAmount;

        return $this;
    }

    /**
     * Gets gwPriceInclTax
     * @return string
     */
    public function getGwPriceInclTax()
    {
        return $this->container['gwPriceInclTax'];
    }

    /**
     * Sets gwPriceInclTax
     * @param string $gwPriceInclTax
     * @return $this
     */
    public function setGwPriceInclTax($gwPriceInclTax)
    {
        $this->container['gwPriceInclTax'] = $gwPriceInclTax;

        return $this;
    }

    /**
     * Gets gwBasePriceInclTax
     * @return string
     */
    public function getGwBasePriceInclTax()
    {
        return $this->container['gwBasePriceInclTax'];
    }

    /**
     * Sets gwBasePriceInclTax
     * @param string $gwBasePriceInclTax
     * @return $this
     */
    public function setGwBasePriceInclTax($gwBasePriceInclTax)
    {
        $this->container['gwBasePriceInclTax'] = $gwBasePriceInclTax;

        return $this;
    }

    /**
     * Gets gwCardPriceInclTax
     * @return string
     */
    public function getGwCardPriceInclTax()
    {
        return $this->container['gwCardPriceInclTax'];
    }

    /**
     * Sets gwCardPriceInclTax
     * @param string $gwCardPriceInclTax
     * @return $this
     */
    public function setGwCardPriceInclTax($gwCardPriceInclTax)
    {
        $this->container['gwCardPriceInclTax'] = $gwCardPriceInclTax;

        return $this;
    }

    /**
     * Gets gwCardBasePriceInclTax
     * @return string
     */
    public function getGwCardBasePriceInclTax()
    {
        return $this->container['gwCardBasePriceInclTax'];
    }

    /**
     * Sets gwCardBasePriceInclTax
     * @param string $gwCardBasePriceInclTax
     * @return $this
     */
    public function setGwCardBasePriceInclTax($gwCardBasePriceInclTax)
    {
        $this->container['gwCardBasePriceInclTax'] = $gwCardBasePriceInclTax;

        return $this;
    }

    /**
     * Gets gwItemsPriceInclTax
     * @return string
     */
    public function getGwItemsPriceInclTax()
    {
        return $this->container['gwItemsPriceInclTax'];
    }

    /**
     * Sets gwItemsPriceInclTax
     * @param string $gwItemsPriceInclTax
     * @return $this
     */
    public function setGwItemsPriceInclTax($gwItemsPriceInclTax)
    {
        $this->container['gwItemsPriceInclTax'] = $gwItemsPriceInclTax;

        return $this;
    }

    /**
     * Gets gwItemsBasePriceInclTax
     * @return string
     */
    public function getGwItemsBasePriceInclTax()
    {
        return $this->container['gwItemsBasePriceInclTax'];
    }

    /**
     * Sets gwItemsBasePriceInclTax
     * @param string $gwItemsBasePriceInclTax
     * @return $this
     */
    public function setGwItemsBasePriceInclTax($gwItemsBasePriceInclTax)
    {
        $this->container['gwItemsBasePriceInclTax'] = $gwItemsBasePriceInclTax;

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



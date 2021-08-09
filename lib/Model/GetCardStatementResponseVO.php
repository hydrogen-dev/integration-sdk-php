<?php
/**
 * GetCardStatementResponseVO
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Integration API
 *
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.3.1
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\integration\Model;

use \ArrayAccess;
use \com\hydrogen\integration\ObjectSerializer;

/**
 * GetCardStatementResponseVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCardStatementResponseVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetCardStatementResponseVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => 'string',
        'ending_balance' => 'double',
        'first_name' => 'string',
        'initial_balance' => 'double',
        'last_name' => 'string',
        'message' => 'string',
        'nucleus_card_id' => 'string',
        'period_fees' => 'double',
        'transactions' => 'object[]',
        'vendor_name' => 'string',
        'vendor_response' => 'object',
        'ytd_fees' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'ending_balance' => 'double',
        'first_name' => null,
        'initial_balance' => 'double',
        'last_name' => null,
        'message' => null,
        'nucleus_card_id' => 'uuid',
        'period_fees' => 'double',
        'transactions' => null,
        'vendor_name' => null,
        'vendor_response' => null,
        'ytd_fees' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'currency_code' => 'currency_code',
        'ending_balance' => 'ending_balance',
        'first_name' => 'first_name',
        'initial_balance' => 'initial_balance',
        'last_name' => 'last_name',
        'message' => 'message',
        'nucleus_card_id' => 'nucleus_card_id',
        'period_fees' => 'period_fees',
        'transactions' => 'transactions',
        'vendor_name' => 'vendor_name',
        'vendor_response' => 'vendor_response',
        'ytd_fees' => 'ytd_fees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'ending_balance' => 'setEndingBalance',
        'first_name' => 'setFirstName',
        'initial_balance' => 'setInitialBalance',
        'last_name' => 'setLastName',
        'message' => 'setMessage',
        'nucleus_card_id' => 'setNucleusCardId',
        'period_fees' => 'setPeriodFees',
        'transactions' => 'setTransactions',
        'vendor_name' => 'setVendorName',
        'vendor_response' => 'setVendorResponse',
        'ytd_fees' => 'setYtdFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'ending_balance' => 'getEndingBalance',
        'first_name' => 'getFirstName',
        'initial_balance' => 'getInitialBalance',
        'last_name' => 'getLastName',
        'message' => 'getMessage',
        'nucleus_card_id' => 'getNucleusCardId',
        'period_fees' => 'getPeriodFees',
        'transactions' => 'getTransactions',
        'vendor_name' => 'getVendorName',
        'vendor_response' => 'getVendorResponse',
        'ytd_fees' => 'getYtdFees'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['ending_balance'] = isset($data['ending_balance']) ? $data['ending_balance'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['initial_balance'] = isset($data['initial_balance']) ? $data['initial_balance'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nucleus_card_id'] = isset($data['nucleus_card_id']) ? $data['nucleus_card_id'] : null;
        $this->container['period_fees'] = isset($data['period_fees']) ? $data['period_fees'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['vendor_name'] = isset($data['vendor_name']) ? $data['vendor_name'] : null;
        $this->container['vendor_response'] = isset($data['vendor_response']) ? $data['vendor_response'] : null;
        $this->container['ytd_fees'] = isset($data['ytd_fees']) ? $data['ytd_fees'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets ending_balance
     *
     * @return double
     */
    public function getEndingBalance()
    {
        return $this->container['ending_balance'];
    }

    /**
     * Sets ending_balance
     *
     * @param double $ending_balance ending_balance
     *
     * @return $this
     */
    public function setEndingBalance($ending_balance)
    {
        $this->container['ending_balance'] = $ending_balance;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets initial_balance
     *
     * @return double
     */
    public function getInitialBalance()
    {
        return $this->container['initial_balance'];
    }

    /**
     * Sets initial_balance
     *
     * @param double $initial_balance initial_balance
     *
     * @return $this
     */
    public function setInitialBalance($initial_balance)
    {
        $this->container['initial_balance'] = $initial_balance;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets nucleus_card_id
     *
     * @return string
     */
    public function getNucleusCardId()
    {
        return $this->container['nucleus_card_id'];
    }

    /**
     * Sets nucleus_card_id
     *
     * @param string $nucleus_card_id nucleus_card_id
     *
     * @return $this
     */
    public function setNucleusCardId($nucleus_card_id)
    {
        $this->container['nucleus_card_id'] = $nucleus_card_id;

        return $this;
    }

    /**
     * Gets period_fees
     *
     * @return double
     */
    public function getPeriodFees()
    {
        return $this->container['period_fees'];
    }

    /**
     * Sets period_fees
     *
     * @param double $period_fees period_fees
     *
     * @return $this
     */
    public function setPeriodFees($period_fees)
    {
        $this->container['period_fees'] = $period_fees;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return object[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param object[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets vendor_name
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->container['vendor_name'];
    }

    /**
     * Sets vendor_name
     *
     * @param string $vendor_name vendor_name
     *
     * @return $this
     */
    public function setVendorName($vendor_name)
    {
        $this->container['vendor_name'] = $vendor_name;

        return $this;
    }

    /**
     * Gets vendor_response
     *
     * @return object
     */
    public function getVendorResponse()
    {
        return $this->container['vendor_response'];
    }

    /**
     * Sets vendor_response
     *
     * @param object $vendor_response vendor_response
     *
     * @return $this
     */
    public function setVendorResponse($vendor_response)
    {
        $this->container['vendor_response'] = $vendor_response;

        return $this;
    }

    /**
     * Gets ytd_fees
     *
     * @return double
     */
    public function getYtdFees()
    {
        return $this->container['ytd_fees'];
    }

    /**
     * Sets ytd_fees
     *
     * @param double $ytd_fees ytd_fees
     *
     * @return $this
     */
    public function setYtdFees($ytd_fees)
    {
        $this->container['ytd_fees'] = $ytd_fees;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



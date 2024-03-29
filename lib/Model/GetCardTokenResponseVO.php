<?php
/**
 * GetCardTokenResponseVO
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
 * GetCardTokenResponseVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCardTokenResponseVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetCardTokenResponseVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'nucleus_card_id' => 'string',
        'pan_reference' => 'string',
        'status' => 'string',
        'token_reference' => 'string',
        'vendor_name' => 'string',
        'vendor_response' => 'object',
        'wallet' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'nucleus_card_id' => 'uuid',
        'pan_reference' => null,
        'status' => null,
        'token_reference' => null,
        'vendor_name' => null,
        'vendor_response' => null,
        'wallet' => null
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
        'message' => 'message',
        'nucleus_card_id' => 'nucleus_card_id',
        'pan_reference' => 'pan_reference',
        'status' => 'status',
        'token_reference' => 'token_reference',
        'vendor_name' => 'vendor_name',
        'vendor_response' => 'vendor_response',
        'wallet' => 'wallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'nucleus_card_id' => 'setNucleusCardId',
        'pan_reference' => 'setPanReference',
        'status' => 'setStatus',
        'token_reference' => 'setTokenReference',
        'vendor_name' => 'setVendorName',
        'vendor_response' => 'setVendorResponse',
        'wallet' => 'setWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'nucleus_card_id' => 'getNucleusCardId',
        'pan_reference' => 'getPanReference',
        'status' => 'getStatus',
        'token_reference' => 'getTokenReference',
        'vendor_name' => 'getVendorName',
        'vendor_response' => 'getVendorResponse',
        'wallet' => 'getWallet'
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

    const WALLET_GOOGLE = 'google';
    const WALLET_APPLE = 'apple';
    const WALLET_SAMSUNG = 'samsung';
    const WALLET_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWalletAllowableValues()
    {
        return [
            self::WALLET_GOOGLE,
            self::WALLET_APPLE,
            self::WALLET_SAMSUNG,
            self::WALLET_OTHER,
        ];
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nucleus_card_id'] = isset($data['nucleus_card_id']) ? $data['nucleus_card_id'] : null;
        $this->container['pan_reference'] = isset($data['pan_reference']) ? $data['pan_reference'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['token_reference'] = isset($data['token_reference']) ? $data['token_reference'] : null;
        $this->container['vendor_name'] = isset($data['vendor_name']) ? $data['vendor_name'] : null;
        $this->container['vendor_response'] = isset($data['vendor_response']) ? $data['vendor_response'] : null;
        $this->container['wallet'] = isset($data['wallet']) ? $data['wallet'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWalletAllowableValues();
        if (!is_null($this->container['wallet']) && !in_array($this->container['wallet'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wallet', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets pan_reference
     *
     * @return string
     */
    public function getPanReference()
    {
        return $this->container['pan_reference'];
    }

    /**
     * Sets pan_reference
     *
     * @param string $pan_reference pan_reference
     *
     * @return $this
     */
    public function setPanReference($pan_reference)
    {
        $this->container['pan_reference'] = $pan_reference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets token_reference
     *
     * @return string
     */
    public function getTokenReference()
    {
        return $this->container['token_reference'];
    }

    /**
     * Sets token_reference
     *
     * @param string $token_reference token_reference
     *
     * @return $this
     */
    public function setTokenReference($token_reference)
    {
        $this->container['token_reference'] = $token_reference;

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
     * Gets wallet
     *
     * @return string
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param string $wallet wallet
     *
     * @return $this
     */
    public function setWallet($wallet)
    {
        $allowedValues = $this->getWalletAllowableValues();
        if (!is_null($wallet) && !in_array($wallet, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'wallet', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wallet'] = $wallet;

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



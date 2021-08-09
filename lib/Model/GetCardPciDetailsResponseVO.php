<?php
/**
 * GetCardPciDetailsResponseVO
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
 * GetCardPciDetailsResponseVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCardPciDetailsResponseVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetCardPciDetailsResponseVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cvv' => 'string',
        'expiry_date' => 'string',
        'message' => 'string',
        'nucleus_card_id' => 'string',
        'pan' => 'string',
        'vendor_name' => 'string',
        'vendor_response' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cvv' => null,
        'expiry_date' => null,
        'message' => null,
        'nucleus_card_id' => 'uuid',
        'pan' => null,
        'vendor_name' => null,
        'vendor_response' => null
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
        'cvv' => 'cvv',
        'expiry_date' => 'expiry_date',
        'message' => 'message',
        'nucleus_card_id' => 'nucleus_card_id',
        'pan' => 'pan',
        'vendor_name' => 'vendor_name',
        'vendor_response' => 'vendor_response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cvv' => 'setCvv',
        'expiry_date' => 'setExpiryDate',
        'message' => 'setMessage',
        'nucleus_card_id' => 'setNucleusCardId',
        'pan' => 'setPan',
        'vendor_name' => 'setVendorName',
        'vendor_response' => 'setVendorResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cvv' => 'getCvv',
        'expiry_date' => 'getExpiryDate',
        'message' => 'getMessage',
        'nucleus_card_id' => 'getNucleusCardId',
        'pan' => 'getPan',
        'vendor_name' => 'getVendorName',
        'vendor_response' => 'getVendorResponse'
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
        $this->container['cvv'] = isset($data['cvv']) ? $data['cvv'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nucleus_card_id'] = isset($data['nucleus_card_id']) ? $data['nucleus_card_id'] : null;
        $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
        $this->container['vendor_name'] = isset($data['vendor_name']) ? $data['vendor_name'] : null;
        $this->container['vendor_response'] = isset($data['vendor_response']) ? $data['vendor_response'] : null;
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
     * Gets cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->container['cvv'];
    }

    /**
     * Sets cvv
     *
     * @param string $cvv cvv
     *
     * @return $this
     */
    public function setCvv($cvv)
    {
        $this->container['cvv'] = $cvv;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date expiry_date
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

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
     * Gets pan
     *
     * @return string
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     *
     * @param string $pan pan
     *
     * @return $this
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

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



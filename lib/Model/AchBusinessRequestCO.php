<?php
/**
 * AchBusinessRequestCO
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
 * AchBusinessRequestCO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AchBusinessRequestCO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AchBusinessRequestCO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kyc_required' => 'bool',
        'nucleus_business_id' => 'string',
        'vendor_request' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kyc_required' => null,
        'nucleus_business_id' => 'uuid',
        'vendor_request' => null
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
        'kyc_required' => 'kyc_required',
        'nucleus_business_id' => 'nucleus_business_id',
        'vendor_request' => 'vendor_request'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kyc_required' => 'setKycRequired',
        'nucleus_business_id' => 'setNucleusBusinessId',
        'vendor_request' => 'setVendorRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kyc_required' => 'getKycRequired',
        'nucleus_business_id' => 'getNucleusBusinessId',
        'vendor_request' => 'getVendorRequest'
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
        $this->container['kyc_required'] = isset($data['kyc_required']) ? $data['kyc_required'] : null;
        $this->container['nucleus_business_id'] = isset($data['nucleus_business_id']) ? $data['nucleus_business_id'] : null;
        $this->container['vendor_request'] = isset($data['vendor_request']) ? $data['vendor_request'] : null;
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
     * Gets kyc_required
     *
     * @return bool
     */
    public function getKycRequired()
    {
        return $this->container['kyc_required'];
    }

    /**
     * Sets kyc_required
     *
     * @param bool $kyc_required kyc_required
     *
     * @return $this
     */
    public function setKycRequired($kyc_required)
    {
        $this->container['kyc_required'] = $kyc_required;

        return $this;
    }

    /**
     * Gets nucleus_business_id
     *
     * @return string
     */
    public function getNucleusBusinessId()
    {
        return $this->container['nucleus_business_id'];
    }

    /**
     * Sets nucleus_business_id
     *
     * @param string $nucleus_business_id nucleus_business_id
     *
     * @return $this
     */
    public function setNucleusBusinessId($nucleus_business_id)
    {
        $this->container['nucleus_business_id'] = $nucleus_business_id;

        return $this;
    }

    /**
     * Gets vendor_request
     *
     * @return object
     */
    public function getVendorRequest()
    {
        return $this->container['vendor_request'];
    }

    /**
     * Sets vendor_request
     *
     * @param object $vendor_request vendor_request
     *
     * @return $this
     */
    public function setVendorRequest($vendor_request)
    {
        $this->container['vendor_request'] = $vendor_request;

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



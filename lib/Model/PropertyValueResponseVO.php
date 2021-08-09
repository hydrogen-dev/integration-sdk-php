<?php
/**
 * PropertyValueResponseVO
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
 * PropertyValueResponseVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyValueResponseVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyValueResponseVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration_type' => 'string',
        'nucleus_business_id' => 'string',
        'nucleus_client_id' => 'string',
        'product' => 'string',
        'vendor_name' => 'string',
        'vendor_response' => '\com\hydrogen\integration\Model\ZillowPropertyVendorResponseVO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration_type' => null,
        'nucleus_business_id' => 'uuid',
        'nucleus_client_id' => 'uuid',
        'product' => null,
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
        'integration_type' => 'integration_type',
        'nucleus_business_id' => 'nucleus_business_id',
        'nucleus_client_id' => 'nucleus_client_id',
        'product' => 'product',
        'vendor_name' => 'vendor_name',
        'vendor_response' => 'vendor_response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_type' => 'setIntegrationType',
        'nucleus_business_id' => 'setNucleusBusinessId',
        'nucleus_client_id' => 'setNucleusClientId',
        'product' => 'setProduct',
        'vendor_name' => 'setVendorName',
        'vendor_response' => 'setVendorResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_type' => 'getIntegrationType',
        'nucleus_business_id' => 'getNucleusBusinessId',
        'nucleus_client_id' => 'getNucleusClientId',
        'product' => 'getProduct',
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
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['nucleus_business_id'] = isset($data['nucleus_business_id']) ? $data['nucleus_business_id'] : null;
        $this->container['nucleus_client_id'] = isset($data['nucleus_client_id']) ? $data['nucleus_client_id'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
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
     * Gets integration_type
     *
     * @return string
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param string $integration_type integration_type
     *
     * @return $this
     */
    public function setIntegrationType($integration_type)
    {
        $this->container['integration_type'] = $integration_type;

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
     * Gets nucleus_client_id
     *
     * @return string
     */
    public function getNucleusClientId()
    {
        return $this->container['nucleus_client_id'];
    }

    /**
     * Sets nucleus_client_id
     *
     * @param string $nucleus_client_id nucleus_client_id
     *
     * @return $this
     */
    public function setNucleusClientId($nucleus_client_id)
    {
        $this->container['nucleus_client_id'] = $nucleus_client_id;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * @return \com\hydrogen\integration\Model\ZillowPropertyVendorResponseVO
     */
    public function getVendorResponse()
    {
        return $this->container['vendor_response'];
    }

    /**
     * Sets vendor_response
     *
     * @param \com\hydrogen\integration\Model\ZillowPropertyVendorResponseVO $vendor_response vendor_response
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



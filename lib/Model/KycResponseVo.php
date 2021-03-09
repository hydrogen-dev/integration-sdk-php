<?php
/**
 * KycResponseVo
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
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
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
 * KycResponseVo Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KycResponseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KycResponseVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_date' => '\DateTime',
        'kyc_status' => 'string',
        'kyc_type' => 'string',
        'nucleus_business_id' => 'string',
        'nucleus_client_id' => 'string',
        'nucleus_document_id' => 'string',
        'product' => 'string',
        'update_date' => '\DateTime',
        'vendor_name' => 'string',
        'vendor_request_data' => '\com\hydrogen\integration\Model\KycVendorRequestDataVO',
        'vendor_response' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_date' => 'date-time',
        'kyc_status' => null,
        'kyc_type' => null,
        'nucleus_business_id' => 'uuid',
        'nucleus_client_id' => 'uuid',
        'nucleus_document_id' => 'uuid',
        'product' => null,
        'update_date' => 'date-time',
        'vendor_name' => null,
        'vendor_request_data' => null,
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
        'create_date' => 'create_date',
        'kyc_status' => 'kyc_status',
        'kyc_type' => 'kyc_type',
        'nucleus_business_id' => 'nucleus_business_id',
        'nucleus_client_id' => 'nucleus_client_id',
        'nucleus_document_id' => 'nucleus_document_id',
        'product' => 'product',
        'update_date' => 'update_date',
        'vendor_name' => 'vendor_name',
        'vendor_request_data' => 'vendor_request_data',
        'vendor_response' => 'vendor_response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_date' => 'setCreateDate',
        'kyc_status' => 'setKycStatus',
        'kyc_type' => 'setKycType',
        'nucleus_business_id' => 'setNucleusBusinessId',
        'nucleus_client_id' => 'setNucleusClientId',
        'nucleus_document_id' => 'setNucleusDocumentId',
        'product' => 'setProduct',
        'update_date' => 'setUpdateDate',
        'vendor_name' => 'setVendorName',
        'vendor_request_data' => 'setVendorRequestData',
        'vendor_response' => 'setVendorResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_date' => 'getCreateDate',
        'kyc_status' => 'getKycStatus',
        'kyc_type' => 'getKycType',
        'nucleus_business_id' => 'getNucleusBusinessId',
        'nucleus_client_id' => 'getNucleusClientId',
        'nucleus_document_id' => 'getNucleusDocumentId',
        'product' => 'getProduct',
        'update_date' => 'getUpdateDate',
        'vendor_name' => 'getVendorName',
        'vendor_request_data' => 'getVendorRequestData',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['kyc_status'] = isset($data['kyc_status']) ? $data['kyc_status'] : null;
        $this->container['kyc_type'] = isset($data['kyc_type']) ? $data['kyc_type'] : null;
        $this->container['nucleus_business_id'] = isset($data['nucleus_business_id']) ? $data['nucleus_business_id'] : null;
        $this->container['nucleus_client_id'] = isset($data['nucleus_client_id']) ? $data['nucleus_client_id'] : null;
        $this->container['nucleus_document_id'] = isset($data['nucleus_document_id']) ? $data['nucleus_document_id'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['vendor_name'] = isset($data['vendor_name']) ? $data['vendor_name'] : null;
        $this->container['vendor_request_data'] = isset($data['vendor_request_data']) ? $data['vendor_request_data'] : null;
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
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets kyc_status
     *
     * @return string
     */
    public function getKycStatus()
    {
        return $this->container['kyc_status'];
    }

    /**
     * Sets kyc_status
     *
     * @param string $kyc_status kyc_status
     *
     * @return $this
     */
    public function setKycStatus($kyc_status)
    {
        $this->container['kyc_status'] = $kyc_status;

        return $this;
    }

    /**
     * Gets kyc_type
     *
     * @return string
     */
    public function getKycType()
    {
        return $this->container['kyc_type'];
    }

    /**
     * Sets kyc_type
     *
     * @param string $kyc_type kyc_type
     *
     * @return $this
     */
    public function setKycType($kyc_type)
    {
        $this->container['kyc_type'] = $kyc_type;

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
     * Gets nucleus_document_id
     *
     * @return string
     */
    public function getNucleusDocumentId()
    {
        return $this->container['nucleus_document_id'];
    }

    /**
     * Sets nucleus_document_id
     *
     * @param string $nucleus_document_id nucleus_document_id
     *
     * @return $this
     */
    public function setNucleusDocumentId($nucleus_document_id)
    {
        $this->container['nucleus_document_id'] = $nucleus_document_id;

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
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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
     * Gets vendor_request_data
     *
     * @return \com\hydrogen\integration\Model\KycVendorRequestDataVO
     */
    public function getVendorRequestData()
    {
        return $this->container['vendor_request_data'];
    }

    /**
     * Sets vendor_request_data
     *
     * @param \com\hydrogen\integration\Model\KycVendorRequestDataVO $vendor_request_data vendor_request_data
     *
     * @return $this
     */
    public function setVendorRequestData($vendor_request_data)
    {
        $this->container['vendor_request_data'] = $vendor_request_data;

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



<?php
/**
 * BusinessVendorRequestDataVO
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
 * BusinessVendorRequestDataVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessVendorRequestDataVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessVendorRequestDataVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_addresses' => '\com\hydrogen\integration\Model\BusinessAddress[]',
        'dba_name' => 'string',
        'email' => 'string',
        'identification_number' => 'string',
        'identification_number_type' => 'string',
        'incorporation_date' => '\DateTime',
        'incorporation_state' => 'string',
        'is_public' => 'bool',
        'legal_name' => 'string',
        'legal_structure' => 'string',
        'metadata' => 'map[string,string]',
        'owners' => '\com\hydrogen\integration\Model\Ownership[]',
        'phone_number' => 'string',
        'ticker' => 'string',
        'website' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_addresses' => null,
        'dba_name' => null,
        'email' => null,
        'identification_number' => null,
        'identification_number_type' => null,
        'incorporation_date' => 'date',
        'incorporation_state' => null,
        'is_public' => null,
        'legal_name' => null,
        'legal_structure' => null,
        'metadata' => null,
        'owners' => null,
        'phone_number' => null,
        'ticker' => null,
        'website' => null
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
        'business_addresses' => 'business_addresses',
        'dba_name' => 'dba_name',
        'email' => 'email',
        'identification_number' => 'identification_number',
        'identification_number_type' => 'identification_number_type',
        'incorporation_date' => 'incorporation_date',
        'incorporation_state' => 'incorporation_state',
        'is_public' => 'is_public',
        'legal_name' => 'legal_name',
        'legal_structure' => 'legal_structure',
        'metadata' => 'metadata',
        'owners' => 'owners',
        'phone_number' => 'phone_number',
        'ticker' => 'ticker',
        'website' => 'website'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_addresses' => 'setBusinessAddresses',
        'dba_name' => 'setDbaName',
        'email' => 'setEmail',
        'identification_number' => 'setIdentificationNumber',
        'identification_number_type' => 'setIdentificationNumberType',
        'incorporation_date' => 'setIncorporationDate',
        'incorporation_state' => 'setIncorporationState',
        'is_public' => 'setIsPublic',
        'legal_name' => 'setLegalName',
        'legal_structure' => 'setLegalStructure',
        'metadata' => 'setMetadata',
        'owners' => 'setOwners',
        'phone_number' => 'setPhoneNumber',
        'ticker' => 'setTicker',
        'website' => 'setWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_addresses' => 'getBusinessAddresses',
        'dba_name' => 'getDbaName',
        'email' => 'getEmail',
        'identification_number' => 'getIdentificationNumber',
        'identification_number_type' => 'getIdentificationNumberType',
        'incorporation_date' => 'getIncorporationDate',
        'incorporation_state' => 'getIncorporationState',
        'is_public' => 'getIsPublic',
        'legal_name' => 'getLegalName',
        'legal_structure' => 'getLegalStructure',
        'metadata' => 'getMetadata',
        'owners' => 'getOwners',
        'phone_number' => 'getPhoneNumber',
        'ticker' => 'getTicker',
        'website' => 'getWebsite'
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
        $this->container['business_addresses'] = isset($data['business_addresses']) ? $data['business_addresses'] : null;
        $this->container['dba_name'] = isset($data['dba_name']) ? $data['dba_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['identification_number_type'] = isset($data['identification_number_type']) ? $data['identification_number_type'] : null;
        $this->container['incorporation_date'] = isset($data['incorporation_date']) ? $data['incorporation_date'] : null;
        $this->container['incorporation_state'] = isset($data['incorporation_state']) ? $data['incorporation_state'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['legal_structure'] = isset($data['legal_structure']) ? $data['legal_structure'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
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
     * Gets business_addresses
     *
     * @return \com\hydrogen\integration\Model\BusinessAddress[]
     */
    public function getBusinessAddresses()
    {
        return $this->container['business_addresses'];
    }

    /**
     * Sets business_addresses
     *
     * @param \com\hydrogen\integration\Model\BusinessAddress[] $business_addresses business_addresses
     *
     * @return $this
     */
    public function setBusinessAddresses($business_addresses)
    {
        $this->container['business_addresses'] = $business_addresses;

        return $this;
    }

    /**
     * Gets dba_name
     *
     * @return string
     */
    public function getDbaName()
    {
        return $this->container['dba_name'];
    }

    /**
     * Sets dba_name
     *
     * @param string $dba_name dba_name
     *
     * @return $this
     */
    public function setDbaName($dba_name)
    {
        $this->container['dba_name'] = $dba_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets identification_number
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->container['identification_number'];
    }

    /**
     * Sets identification_number
     *
     * @param string $identification_number identification_number
     *
     * @return $this
     */
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;

        return $this;
    }

    /**
     * Gets identification_number_type
     *
     * @return string
     */
    public function getIdentificationNumberType()
    {
        return $this->container['identification_number_type'];
    }

    /**
     * Sets identification_number_type
     *
     * @param string $identification_number_type identification_number_type
     *
     * @return $this
     */
    public function setIdentificationNumberType($identification_number_type)
    {
        $this->container['identification_number_type'] = $identification_number_type;

        return $this;
    }

    /**
     * Gets incorporation_date
     *
     * @return \DateTime
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param \DateTime $incorporation_date incorporation_date
     *
     * @return $this
     */
    public function setIncorporationDate($incorporation_date)
    {
        $this->container['incorporation_date'] = $incorporation_date;

        return $this;
    }

    /**
     * Gets incorporation_state
     *
     * @return string
     */
    public function getIncorporationState()
    {
        return $this->container['incorporation_state'];
    }

    /**
     * Sets incorporation_state
     *
     * @param string $incorporation_state incorporation_state
     *
     * @return $this
     */
    public function setIncorporationState($incorporation_state)
    {
        $this->container['incorporation_state'] = $incorporation_state;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public is_public
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string $legal_name legal_name
     *
     * @return $this
     */
    public function setLegalName($legal_name)
    {
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets legal_structure
     *
     * @return string
     */
    public function getLegalStructure()
    {
        return $this->container['legal_structure'];
    }

    /**
     * Sets legal_structure
     *
     * @param string $legal_structure legal_structure
     *
     * @return $this
     */
    public function setLegalStructure($legal_structure)
    {
        $this->container['legal_structure'] = $legal_structure;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets owners
     *
     * @return \com\hydrogen\integration\Model\Ownership[]
     */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
     * Sets owners
     *
     * @param \com\hydrogen\integration\Model\Ownership[] $owners owners
     *
     * @return $this
     */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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



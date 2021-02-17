<?php
/**
 * Identification
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
 * Identification Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Identification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Identification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_of_issue' => 'string',
        'doc_number' => 'string',
        'doc_type' => 'string',
        'expiry_date' => '\DateTime',
        'issue_date' => '\DateTime',
        'issuing_authority' => 'string',
        'state_of_issue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_of_issue' => null,
        'doc_number' => null,
        'doc_type' => null,
        'expiry_date' => 'date',
        'issue_date' => 'date',
        'issuing_authority' => null,
        'state_of_issue' => null
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
        'country_of_issue' => 'country_of_issue',
        'doc_number' => 'doc_number',
        'doc_type' => 'doc_type',
        'expiry_date' => 'expiry_date',
        'issue_date' => 'issue_date',
        'issuing_authority' => 'issuing_authority',
        'state_of_issue' => 'state_of_issue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_of_issue' => 'setCountryOfIssue',
        'doc_number' => 'setDocNumber',
        'doc_type' => 'setDocType',
        'expiry_date' => 'setExpiryDate',
        'issue_date' => 'setIssueDate',
        'issuing_authority' => 'setIssuingAuthority',
        'state_of_issue' => 'setStateOfIssue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_of_issue' => 'getCountryOfIssue',
        'doc_number' => 'getDocNumber',
        'doc_type' => 'getDocType',
        'expiry_date' => 'getExpiryDate',
        'issue_date' => 'getIssueDate',
        'issuing_authority' => 'getIssuingAuthority',
        'state_of_issue' => 'getStateOfIssue'
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
        $this->container['country_of_issue'] = isset($data['country_of_issue']) ? $data['country_of_issue'] : null;
        $this->container['doc_number'] = isset($data['doc_number']) ? $data['doc_number'] : null;
        $this->container['doc_type'] = isset($data['doc_type']) ? $data['doc_type'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['issuing_authority'] = isset($data['issuing_authority']) ? $data['issuing_authority'] : null;
        $this->container['state_of_issue'] = isset($data['state_of_issue']) ? $data['state_of_issue'] : null;
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
     * Gets country_of_issue
     *
     * @return string
     */
    public function getCountryOfIssue()
    {
        return $this->container['country_of_issue'];
    }

    /**
     * Sets country_of_issue
     *
     * @param string $country_of_issue country_of_issue
     *
     * @return $this
     */
    public function setCountryOfIssue($country_of_issue)
    {
        $this->container['country_of_issue'] = $country_of_issue;

        return $this;
    }

    /**
     * Gets doc_number
     *
     * @return string
     */
    public function getDocNumber()
    {
        return $this->container['doc_number'];
    }

    /**
     * Sets doc_number
     *
     * @param string $doc_number doc_number
     *
     * @return $this
     */
    public function setDocNumber($doc_number)
    {
        $this->container['doc_number'] = $doc_number;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param string $doc_type doc_type
     *
     * @return $this
     */
    public function setDocType($doc_type)
    {
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date expiry_date
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date issue_date
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets issuing_authority
     *
     * @return string
     */
    public function getIssuingAuthority()
    {
        return $this->container['issuing_authority'];
    }

    /**
     * Sets issuing_authority
     *
     * @param string $issuing_authority issuing_authority
     *
     * @return $this
     */
    public function setIssuingAuthority($issuing_authority)
    {
        $this->container['issuing_authority'] = $issuing_authority;

        return $this;
    }

    /**
     * Gets state_of_issue
     *
     * @return string
     */
    public function getStateOfIssue()
    {
        return $this->container['state_of_issue'];
    }

    /**
     * Sets state_of_issue
     *
     * @param string $state_of_issue state_of_issue
     *
     * @return $this
     */
    public function setStateOfIssue($state_of_issue)
    {
        $this->container['state_of_issue'] = $state_of_issue;

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


<?php
/**
 * AccountingFinalResponseVO
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
 * AccountingFinalResponseVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountingFinalResponseVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountingFinalResponseVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration_type' => 'string',
        'message' => 'string',
        'nucleus_contacts' => '\com\hydrogen\integration\Model\AccountingCustomerResponseVO[]',
        'nucleus_customer_revenues' => '\com\hydrogen\integration\Model\AccountingCustomerRevenueResponseVO[]',
        'nucleus_financial_statement' => '\com\hydrogen\integration\Model\AccountingStatsResponseVO',
        'nucleus_invoice_payments' => '\com\hydrogen\integration\Model\AccountingInvoicePaymentResponseVO[]',
        'nucleus_invoices' => '\com\hydrogen\integration\Model\AccountingInvoiceResponseVO[]',
        'vendor_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration_type' => null,
        'message' => null,
        'nucleus_contacts' => null,
        'nucleus_customer_revenues' => null,
        'nucleus_financial_statement' => null,
        'nucleus_invoice_payments' => null,
        'nucleus_invoices' => null,
        'vendor_name' => null
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
        'message' => 'message',
        'nucleus_contacts' => 'nucleus_contacts',
        'nucleus_customer_revenues' => 'nucleus_customer_revenues',
        'nucleus_financial_statement' => 'nucleus_financial_statement',
        'nucleus_invoice_payments' => 'nucleus_invoice_payments',
        'nucleus_invoices' => 'nucleus_invoices',
        'vendor_name' => 'vendor_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_type' => 'setIntegrationType',
        'message' => 'setMessage',
        'nucleus_contacts' => 'setNucleusContacts',
        'nucleus_customer_revenues' => 'setNucleusCustomerRevenues',
        'nucleus_financial_statement' => 'setNucleusFinancialStatement',
        'nucleus_invoice_payments' => 'setNucleusInvoicePayments',
        'nucleus_invoices' => 'setNucleusInvoices',
        'vendor_name' => 'setVendorName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_type' => 'getIntegrationType',
        'message' => 'getMessage',
        'nucleus_contacts' => 'getNucleusContacts',
        'nucleus_customer_revenues' => 'getNucleusCustomerRevenues',
        'nucleus_financial_statement' => 'getNucleusFinancialStatement',
        'nucleus_invoice_payments' => 'getNucleusInvoicePayments',
        'nucleus_invoices' => 'getNucleusInvoices',
        'vendor_name' => 'getVendorName'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nucleus_contacts'] = isset($data['nucleus_contacts']) ? $data['nucleus_contacts'] : null;
        $this->container['nucleus_customer_revenues'] = isset($data['nucleus_customer_revenues']) ? $data['nucleus_customer_revenues'] : null;
        $this->container['nucleus_financial_statement'] = isset($data['nucleus_financial_statement']) ? $data['nucleus_financial_statement'] : null;
        $this->container['nucleus_invoice_payments'] = isset($data['nucleus_invoice_payments']) ? $data['nucleus_invoice_payments'] : null;
        $this->container['nucleus_invoices'] = isset($data['nucleus_invoices']) ? $data['nucleus_invoices'] : null;
        $this->container['vendor_name'] = isset($data['vendor_name']) ? $data['vendor_name'] : null;
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
     * Gets nucleus_contacts
     *
     * @return \com\hydrogen\integration\Model\AccountingCustomerResponseVO[]
     */
    public function getNucleusContacts()
    {
        return $this->container['nucleus_contacts'];
    }

    /**
     * Sets nucleus_contacts
     *
     * @param \com\hydrogen\integration\Model\AccountingCustomerResponseVO[] $nucleus_contacts nucleus_contacts
     *
     * @return $this
     */
    public function setNucleusContacts($nucleus_contacts)
    {
        $this->container['nucleus_contacts'] = $nucleus_contacts;

        return $this;
    }

    /**
     * Gets nucleus_customer_revenues
     *
     * @return \com\hydrogen\integration\Model\AccountingCustomerRevenueResponseVO[]
     */
    public function getNucleusCustomerRevenues()
    {
        return $this->container['nucleus_customer_revenues'];
    }

    /**
     * Sets nucleus_customer_revenues
     *
     * @param \com\hydrogen\integration\Model\AccountingCustomerRevenueResponseVO[] $nucleus_customer_revenues nucleus_customer_revenues
     *
     * @return $this
     */
    public function setNucleusCustomerRevenues($nucleus_customer_revenues)
    {
        $this->container['nucleus_customer_revenues'] = $nucleus_customer_revenues;

        return $this;
    }

    /**
     * Gets nucleus_financial_statement
     *
     * @return \com\hydrogen\integration\Model\AccountingStatsResponseVO
     */
    public function getNucleusFinancialStatement()
    {
        return $this->container['nucleus_financial_statement'];
    }

    /**
     * Sets nucleus_financial_statement
     *
     * @param \com\hydrogen\integration\Model\AccountingStatsResponseVO $nucleus_financial_statement nucleus_financial_statement
     *
     * @return $this
     */
    public function setNucleusFinancialStatement($nucleus_financial_statement)
    {
        $this->container['nucleus_financial_statement'] = $nucleus_financial_statement;

        return $this;
    }

    /**
     * Gets nucleus_invoice_payments
     *
     * @return \com\hydrogen\integration\Model\AccountingInvoicePaymentResponseVO[]
     */
    public function getNucleusInvoicePayments()
    {
        return $this->container['nucleus_invoice_payments'];
    }

    /**
     * Sets nucleus_invoice_payments
     *
     * @param \com\hydrogen\integration\Model\AccountingInvoicePaymentResponseVO[] $nucleus_invoice_payments nucleus_invoice_payments
     *
     * @return $this
     */
    public function setNucleusInvoicePayments($nucleus_invoice_payments)
    {
        $this->container['nucleus_invoice_payments'] = $nucleus_invoice_payments;

        return $this;
    }

    /**
     * Gets nucleus_invoices
     *
     * @return \com\hydrogen\integration\Model\AccountingInvoiceResponseVO[]
     */
    public function getNucleusInvoices()
    {
        return $this->container['nucleus_invoices'];
    }

    /**
     * Sets nucleus_invoices
     *
     * @param \com\hydrogen\integration\Model\AccountingInvoiceResponseVO[] $nucleus_invoices nucleus_invoices
     *
     * @return $this
     */
    public function setNucleusInvoices($nucleus_invoices)
    {
        $this->container['nucleus_invoices'] = $nucleus_invoices;

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



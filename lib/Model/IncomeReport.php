<?php
/**
 * IncomeReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Credit Profile
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: OpenAPI3.2.0.52
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IncomeReport Class Doc Comment
 *
 * @category Class
 * @description Income Report Response fetched from VOIE Source
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncomeReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'incomeReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_id' => 'string',
        'report_type' => 'string',
        'report_generated_date' => 'string',
        'requestor' => '\OpenAPI\Client\Model\IncomeReportRequestor',
        'consumer_pii' => '\OpenAPI\Client\Model\IncomeConsumerPii'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'report_id' => null,
        'report_type' => null,
        'report_generated_date' => null,
        'requestor' => null,
        'consumer_pii' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'report_id' => 'reportId',
        'report_type' => 'reportType',
        'report_generated_date' => 'reportGeneratedDate',
        'requestor' => 'requestor',
        'consumer_pii' => 'consumerPii'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_id' => 'setReportId',
        'report_type' => 'setReportType',
        'report_generated_date' => 'setReportGeneratedDate',
        'requestor' => 'setRequestor',
        'consumer_pii' => 'setConsumerPii'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_id' => 'getReportId',
        'report_type' => 'getReportType',
        'report_generated_date' => 'getReportGeneratedDate',
        'requestor' => 'getRequestor',
        'consumer_pii' => 'getConsumerPii'
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
        return self::$openAPIModelName;
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
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['report_generated_date'] = isset($data['report_generated_date']) ? $data['report_generated_date'] : null;
        $this->container['requestor'] = isset($data['requestor']) ? $data['requestor'] : null;
        $this->container['consumer_pii'] = isset($data['consumer_pii']) ? $data['consumer_pii'] : null;
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
     * Gets report_id
     *
     * @return string|null
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param string|null $report_id report_id
     *
     * @return $this
     */
    public function setReportId($report_id)
    {
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type report_type
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets report_generated_date
     *
     * @return string|null
     */
    public function getReportGeneratedDate()
    {
        return $this->container['report_generated_date'];
    }

    /**
     * Sets report_generated_date
     *
     * @param string|null $report_generated_date report_generated_date
     *
     * @return $this
     */
    public function setReportGeneratedDate($report_generated_date)
    {
        $this->container['report_generated_date'] = $report_generated_date;

        return $this;
    }

    /**
     * Gets requestor
     *
     * @return \OpenAPI\Client\Model\IncomeReportRequestor|null
     */
    public function getRequestor()
    {
        return $this->container['requestor'];
    }

    /**
     * Sets requestor
     *
     * @param \OpenAPI\Client\Model\IncomeReportRequestor|null $requestor requestor
     *
     * @return $this
     */
    public function setRequestor($requestor)
    {
        $this->container['requestor'] = $requestor;

        return $this;
    }

    /**
     * Gets consumer_pii
     *
     * @return \OpenAPI\Client\Model\IncomeConsumerPii|null
     */
    public function getConsumerPii()
    {
        return $this->container['consumer_pii'];
    }

    /**
     * Sets consumer_pii
     *
     * @param \OpenAPI\Client\Model\IncomeConsumerPii|null $consumer_pii consumer_pii
     *
     * @return $this
     */
    public function setConsumerPii($consumer_pii)
    {
        $this->container['consumer_pii'] = $consumer_pii;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



<?php
/**
 * PublicRecordRespDaas
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
 * PublicRecordRespDaas Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PublicRecordRespDaas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'publicRecordRespDaas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjustment_percent' => 'string',
        'amount' => 'string',
        'bankruptcy_asset_amount' => 'string',
        'bankruptcy_voluntary_indicator' => 'string',
        'book_page_sequence' => 'string',
        'consumer_comment' => 'string',
        'court_code' => 'string',
        'court_name' => 'string',
        'dispute_flag' => 'string',
        'ecoa' => 'string',
        'ecoa_text' => 'string',
        'evaluation' => 'string',
        'evaluation_text' => 'string',
        'filing_date' => 'string',
        'plaintiff_name' => 'string',
        'reference_number' => 'string',
        'repayment_percent' => 'string',
        'status' => 'string',
        'status_text' => 'string',
        'status_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'adjustment_percent' => null,
        'amount' => null,
        'bankruptcy_asset_amount' => null,
        'bankruptcy_voluntary_indicator' => null,
        'book_page_sequence' => null,
        'consumer_comment' => null,
        'court_code' => null,
        'court_name' => null,
        'dispute_flag' => null,
        'ecoa' => null,
        'ecoa_text' => null,
        'evaluation' => null,
        'evaluation_text' => null,
        'filing_date' => null,
        'plaintiff_name' => null,
        'reference_number' => null,
        'repayment_percent' => null,
        'status' => null,
        'status_text' => null,
        'status_date' => null
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
        'adjustment_percent' => 'adjustmentPercent',
        'amount' => 'amount',
        'bankruptcy_asset_amount' => 'bankruptcyAssetAmount',
        'bankruptcy_voluntary_indicator' => 'bankruptcyVoluntaryIndicator',
        'book_page_sequence' => 'bookPageSequence',
        'consumer_comment' => 'consumerComment',
        'court_code' => 'courtCode',
        'court_name' => 'courtName',
        'dispute_flag' => 'disputeFlag',
        'ecoa' => 'ecoa',
        'ecoa_text' => 'ecoaText',
        'evaluation' => 'evaluation',
        'evaluation_text' => 'evaluationText',
        'filing_date' => 'filingDate',
        'plaintiff_name' => 'plaintiffName',
        'reference_number' => 'referenceNumber',
        'repayment_percent' => 'repaymentPercent',
        'status' => 'status',
        'status_text' => 'statusText',
        'status_date' => 'statusDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment_percent' => 'setAdjustmentPercent',
        'amount' => 'setAmount',
        'bankruptcy_asset_amount' => 'setBankruptcyAssetAmount',
        'bankruptcy_voluntary_indicator' => 'setBankruptcyVoluntaryIndicator',
        'book_page_sequence' => 'setBookPageSequence',
        'consumer_comment' => 'setConsumerComment',
        'court_code' => 'setCourtCode',
        'court_name' => 'setCourtName',
        'dispute_flag' => 'setDisputeFlag',
        'ecoa' => 'setEcoa',
        'ecoa_text' => 'setEcoaText',
        'evaluation' => 'setEvaluation',
        'evaluation_text' => 'setEvaluationText',
        'filing_date' => 'setFilingDate',
        'plaintiff_name' => 'setPlaintiffName',
        'reference_number' => 'setReferenceNumber',
        'repayment_percent' => 'setRepaymentPercent',
        'status' => 'setStatus',
        'status_text' => 'setStatusText',
        'status_date' => 'setStatusDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment_percent' => 'getAdjustmentPercent',
        'amount' => 'getAmount',
        'bankruptcy_asset_amount' => 'getBankruptcyAssetAmount',
        'bankruptcy_voluntary_indicator' => 'getBankruptcyVoluntaryIndicator',
        'book_page_sequence' => 'getBookPageSequence',
        'consumer_comment' => 'getConsumerComment',
        'court_code' => 'getCourtCode',
        'court_name' => 'getCourtName',
        'dispute_flag' => 'getDisputeFlag',
        'ecoa' => 'getEcoa',
        'ecoa_text' => 'getEcoaText',
        'evaluation' => 'getEvaluation',
        'evaluation_text' => 'getEvaluationText',
        'filing_date' => 'getFilingDate',
        'plaintiff_name' => 'getPlaintiffName',
        'reference_number' => 'getReferenceNumber',
        'repayment_percent' => 'getRepaymentPercent',
        'status' => 'getStatus',
        'status_text' => 'getStatusText',
        'status_date' => 'getStatusDate'
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
        $this->container['adjustment_percent'] = isset($data['adjustment_percent']) ? $data['adjustment_percent'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bankruptcy_asset_amount'] = isset($data['bankruptcy_asset_amount']) ? $data['bankruptcy_asset_amount'] : null;
        $this->container['bankruptcy_voluntary_indicator'] = isset($data['bankruptcy_voluntary_indicator']) ? $data['bankruptcy_voluntary_indicator'] : null;
        $this->container['book_page_sequence'] = isset($data['book_page_sequence']) ? $data['book_page_sequence'] : null;
        $this->container['consumer_comment'] = isset($data['consumer_comment']) ? $data['consumer_comment'] : null;
        $this->container['court_code'] = isset($data['court_code']) ? $data['court_code'] : null;
        $this->container['court_name'] = isset($data['court_name']) ? $data['court_name'] : null;
        $this->container['dispute_flag'] = isset($data['dispute_flag']) ? $data['dispute_flag'] : null;
        $this->container['ecoa'] = isset($data['ecoa']) ? $data['ecoa'] : null;
        $this->container['ecoa_text'] = isset($data['ecoa_text']) ? $data['ecoa_text'] : null;
        $this->container['evaluation'] = isset($data['evaluation']) ? $data['evaluation'] : null;
        $this->container['evaluation_text'] = isset($data['evaluation_text']) ? $data['evaluation_text'] : null;
        $this->container['filing_date'] = isset($data['filing_date']) ? $data['filing_date'] : null;
        $this->container['plaintiff_name'] = isset($data['plaintiff_name']) ? $data['plaintiff_name'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['repayment_percent'] = isset($data['repayment_percent']) ? $data['repayment_percent'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['status_date'] = isset($data['status_date']) ? $data['status_date'] : null;
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
     * Gets adjustment_percent
     *
     * @return string|null
     */
    public function getAdjustmentPercent()
    {
        return $this->container['adjustment_percent'];
    }

    /**
     * Sets adjustment_percent
     *
     * @param string|null $adjustment_percent For BK Chapter 13 Only.
     *
     * @return $this
     */
    public function setAdjustmentPercent($adjustment_percent)
    {
        $this->container['adjustment_percent'] = $adjustment_percent;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount Full rounded dollar amount or rounded amount.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bankruptcy_asset_amount
     *
     * @return string|null
     */
    public function getBankruptcyAssetAmount()
    {
        return $this->container['bankruptcy_asset_amount'];
    }

    /**
     * Sets bankruptcy_asset_amount
     *
     * @param string|null $bankruptcy_asset_amount Full dollar amount for Bankruptcies.
     *
     * @return $this
     */
    public function setBankruptcyAssetAmount($bankruptcy_asset_amount)
    {
        $this->container['bankruptcy_asset_amount'] = $bankruptcy_asset_amount;

        return $this;
    }

    /**
     * Gets bankruptcy_voluntary_indicator
     *
     * @return string|null
     */
    public function getBankruptcyVoluntaryIndicator()
    {
        return $this->container['bankruptcy_voluntary_indicator'];
    }

    /**
     * Sets bankruptcy_voluntary_indicator
     *
     * @param string|null $bankruptcy_voluntary_indicator Bankruptcy Voluntary Indicator
     *
     * @return $this
     */
    public function setBankruptcyVoluntaryIndicator($bankruptcy_voluntary_indicator)
    {
        $this->container['bankruptcy_voluntary_indicator'] = $bankruptcy_voluntary_indicator;

        return $this;
    }

    /**
     * Gets book_page_sequence
     *
     * @return string|null
     */
    public function getBookPageSequence()
    {
        return $this->container['book_page_sequence'];
    }

    /**
     * Sets book_page_sequence
     *
     * @param string|null $book_page_sequence Book, page and sequence number.
     *
     * @return $this
     */
    public function setBookPageSequence($book_page_sequence)
    {
        $this->container['book_page_sequence'] = $book_page_sequence;

        return $this;
    }

    /**
     * Gets consumer_comment
     *
     * @return string|null
     */
    public function getConsumerComment()
    {
        return $this->container['consumer_comment'];
    }

    /**
     * Sets consumer_comment
     *
     * @param string|null $consumer_comment Public Record Comment Text (Free Form).
     *
     * @return $this
     */
    public function setConsumerComment($consumer_comment)
    {
        $this->container['consumer_comment'] = $consumer_comment;

        return $this;
    }

    /**
     * Gets court_code
     *
     * @return string|null
     */
    public function getCourtCode()
    {
        return $this->container['court_code'];
    }

    /**
     * Sets court_code
     *
     * @param string|null $court_code Seven-digit code unique to each court.
     *
     * @return $this
     */
    public function setCourtCode($court_code)
    {
        $this->container['court_code'] = $court_code;

        return $this;
    }

    /**
     * Gets court_name
     *
     * @return string|null
     */
    public function getCourtName()
    {
        return $this->container['court_name'];
    }

    /**
     * Sets court_name
     *
     * @param string|null $court_name Court name
     *
     * @return $this
     */
    public function setCourtName($court_name)
    {
        $this->container['court_name'] = $court_name;

        return $this;
    }

    /**
     * Gets dispute_flag
     *
     * @return string|null
     */
    public function getDisputeFlag()
    {
        return $this->container['dispute_flag'];
    }

    /**
     * Sets dispute_flag
     *
     * @param string|null $dispute_flag Indicates a dispute.
     *
     * @return $this
     */
    public function setDisputeFlag($dispute_flag)
    {
        $this->container['dispute_flag'] = $dispute_flag;

        return $this;
    }

    /**
     * Gets ecoa
     *
     * @return string|null
     */
    public function getEcoa()
    {
        return $this->container['ecoa'];
    }

    /**
     * Sets ecoa
     *
     * @param string|null $ecoa ecoa
     *
     * @return $this
     */
    public function setEcoa($ecoa)
    {
        $this->container['ecoa'] = $ecoa;

        return $this;
    }

    /**
     * Gets ecoa_text
     *
     * @return string|null
     */
    public function getEcoaText()
    {
        return $this->container['ecoa_text'];
    }

    /**
     * Sets ecoa_text
     *
     * @param string|null $ecoa_text Verbose mapping for ecoa
     *
     * @return $this
     */
    public function setEcoaText($ecoa_text)
    {
        $this->container['ecoa_text'] = $ecoa_text;

        return $this;
    }

    /**
     * Gets evaluation
     *
     * @return string|null
     */
    public function getEvaluation()
    {
        return $this->container['evaluation'];
    }

    /**
     * Sets evaluation
     *
     * @param string|null $evaluation N (constant) = negative
     *
     * @return $this
     */
    public function setEvaluation($evaluation)
    {
        $this->container['evaluation'] = $evaluation;

        return $this;
    }

    /**
     * Gets evaluation_text
     *
     * @return string|null
     */
    public function getEvaluationText()
    {
        return $this->container['evaluation_text'];
    }

    /**
     * Sets evaluation_text
     *
     * @param string|null $evaluation_text Verbose mapping for evaluation
     *
     * @return $this
     */
    public function setEvaluationText($evaluation_text)
    {
        $this->container['evaluation_text'] = $evaluation_text;

        return $this;
    }

    /**
     * Gets filing_date
     *
     * @return string|null
     */
    public function getFilingDate()
    {
        return $this->container['filing_date'];
    }

    /**
     * Sets filing_date
     *
     * @param string|null $filing_date Original filing date Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setFilingDate($filing_date)
    {
        $this->container['filing_date'] = $filing_date;

        return $this;
    }

    /**
     * Gets plaintiff_name
     *
     * @return string|null
     */
    public function getPlaintiffName()
    {
        return $this->container['plaintiff_name'];
    }

    /**
     * Sets plaintiff_name
     *
     * @param string|null $plaintiff_name Plaintiff Name
     *
     * @return $this
     */
    public function setPlaintiffName($plaintiff_name)
    {
        $this->container['plaintiff_name'] = $plaintiff_name;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Contains docket number or certificate ID.
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets repayment_percent
     *
     * @return string|null
     */
    public function getRepaymentPercent()
    {
        return $this->container['repayment_percent'];
    }

    /**
     * Sets repayment_percent
     *
     * @param string|null $repayment_percent For BK Chapter 13 Only
     *
     * @return $this
     */
    public function setRepaymentPercent($repayment_percent)
    {
        $this->container['repayment_percent'] = $repayment_percent;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Public Record Status Codes.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_text
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     *
     * @param string|null $status_text Verbose mapping for status
     *
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets status_date
     *
     * @return string|null
     */
    public function getStatusDate()
    {
        return $this->container['status_date'];
    }

    /**
     * Sets status_date
     *
     * @param string|null $status_date Date of court action associated with status. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setStatusDate($status_date)
    {
        $this->container['status_date'] = $status_date;

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


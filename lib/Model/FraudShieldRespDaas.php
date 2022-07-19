<?php
/**
 * FraudShieldRespDaas
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
 * FraudShieldRespDaas Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudShieldRespDaas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fraudShieldRespDaas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_count' => 'string',
        'address_date' => 'string',
        'address_error_code' => 'string',
        'address_error_code_text' => 'string',
        'date_of_birth' => 'string',
        'date_of_death' => 'string',
        'fraud_shield_indicators' => '\OpenAPI\Client\Model\FraudShieldIndicators',
        'sic' => 'string',
        'sic_text' => 'string',
        'social_count' => 'string',
        'social_date' => 'string',
        'social_error_code' => 'string',
        'social_error_code_text' => 'string',
        'ssn_first_possible_issuance_year' => 'string',
        'ssn_last_possible_issuance_year' => 'string',
        'text' => 'string',
        'type' => 'string',
        'type_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address_count' => null,
        'address_date' => null,
        'address_error_code' => null,
        'address_error_code_text' => null,
        'date_of_birth' => null,
        'date_of_death' => null,
        'fraud_shield_indicators' => null,
        'sic' => null,
        'sic_text' => null,
        'social_count' => null,
        'social_date' => null,
        'social_error_code' => null,
        'social_error_code_text' => null,
        'ssn_first_possible_issuance_year' => null,
        'ssn_last_possible_issuance_year' => null,
        'text' => null,
        'type' => null,
        'type_text' => null
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
        'address_count' => 'addressCount',
        'address_date' => 'addressDate',
        'address_error_code' => 'addressErrorCode',
        'address_error_code_text' => 'addressErrorCodeText',
        'date_of_birth' => 'dateOfBirth',
        'date_of_death' => 'dateOfDeath',
        'fraud_shield_indicators' => 'fraudShieldIndicators',
        'sic' => 'sic',
        'sic_text' => 'sicText',
        'social_count' => 'socialCount',
        'social_date' => 'socialDate',
        'social_error_code' => 'socialErrorCode',
        'social_error_code_text' => 'socialErrorCodeText',
        'ssn_first_possible_issuance_year' => 'ssnFirstPossibleIssuanceYear',
        'ssn_last_possible_issuance_year' => 'ssnLastPossibleIssuanceYear',
        'text' => 'text',
        'type' => 'type',
        'type_text' => 'typeText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_count' => 'setAddressCount',
        'address_date' => 'setAddressDate',
        'address_error_code' => 'setAddressErrorCode',
        'address_error_code_text' => 'setAddressErrorCodeText',
        'date_of_birth' => 'setDateOfBirth',
        'date_of_death' => 'setDateOfDeath',
        'fraud_shield_indicators' => 'setFraudShieldIndicators',
        'sic' => 'setSic',
        'sic_text' => 'setSicText',
        'social_count' => 'setSocialCount',
        'social_date' => 'setSocialDate',
        'social_error_code' => 'setSocialErrorCode',
        'social_error_code_text' => 'setSocialErrorCodeText',
        'ssn_first_possible_issuance_year' => 'setSsnFirstPossibleIssuanceYear',
        'ssn_last_possible_issuance_year' => 'setSsnLastPossibleIssuanceYear',
        'text' => 'setText',
        'type' => 'setType',
        'type_text' => 'setTypeText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_count' => 'getAddressCount',
        'address_date' => 'getAddressDate',
        'address_error_code' => 'getAddressErrorCode',
        'address_error_code_text' => 'getAddressErrorCodeText',
        'date_of_birth' => 'getDateOfBirth',
        'date_of_death' => 'getDateOfDeath',
        'fraud_shield_indicators' => 'getFraudShieldIndicators',
        'sic' => 'getSic',
        'sic_text' => 'getSicText',
        'social_count' => 'getSocialCount',
        'social_date' => 'getSocialDate',
        'social_error_code' => 'getSocialErrorCode',
        'social_error_code_text' => 'getSocialErrorCodeText',
        'ssn_first_possible_issuance_year' => 'getSsnFirstPossibleIssuanceYear',
        'ssn_last_possible_issuance_year' => 'getSsnLastPossibleIssuanceYear',
        'text' => 'getText',
        'type' => 'getType',
        'type_text' => 'getTypeText'
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
        $this->container['address_count'] = isset($data['address_count']) ? $data['address_count'] : null;
        $this->container['address_date'] = isset($data['address_date']) ? $data['address_date'] : null;
        $this->container['address_error_code'] = isset($data['address_error_code']) ? $data['address_error_code'] : null;
        $this->container['address_error_code_text'] = isset($data['address_error_code_text']) ? $data['address_error_code_text'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['date_of_death'] = isset($data['date_of_death']) ? $data['date_of_death'] : null;
        $this->container['fraud_shield_indicators'] = isset($data['fraud_shield_indicators']) ? $data['fraud_shield_indicators'] : null;
        $this->container['sic'] = isset($data['sic']) ? $data['sic'] : null;
        $this->container['sic_text'] = isset($data['sic_text']) ? $data['sic_text'] : null;
        $this->container['social_count'] = isset($data['social_count']) ? $data['social_count'] : null;
        $this->container['social_date'] = isset($data['social_date']) ? $data['social_date'] : null;
        $this->container['social_error_code'] = isset($data['social_error_code']) ? $data['social_error_code'] : null;
        $this->container['social_error_code_text'] = isset($data['social_error_code_text']) ? $data['social_error_code_text'] : null;
        $this->container['ssn_first_possible_issuance_year'] = isset($data['ssn_first_possible_issuance_year']) ? $data['ssn_first_possible_issuance_year'] : null;
        $this->container['ssn_last_possible_issuance_year'] = isset($data['ssn_last_possible_issuance_year']) ? $data['ssn_last_possible_issuance_year'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_text'] = isset($data['type_text']) ? $data['type_text'] : null;
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
     * Gets address_count
     *
     * @return string|null
     */
    public function getAddressCount()
    {
        return $this->container['address_count'];
    }

    /**
     * Sets address_count
     *
     * @param string|null $address_count Number of times the address was used in the last 90-120 days
     *
     * @return $this
     */
    public function setAddressCount($address_count)
    {
        $this->container['address_count'] = $address_count;

        return $this;
    }

    /**
     * Gets address_date
     *
     * @return string|null
     */
    public function getAddressDate()
    {
        return $this->container['address_date'];
    }

    /**
     * Sets address_date
     *
     * @param string|null $address_date Format = MMDDCCYY. Date when address counter accumulation started.
     *
     * @return $this
     */
    public function setAddressDate($address_date)
    {
        $this->container['address_date'] = $address_date;

        return $this;
    }

    /**
     * Gets address_error_code
     *
     * @return string|null
     */
    public function getAddressErrorCode()
    {
        return $this->container['address_error_code'];
    }

    /**
     * Sets address_error_code
     *
     * @param string|null $address_error_code Address Error Code if applicable.
     *
     * @return $this
     */
    public function setAddressErrorCode($address_error_code)
    {
        $this->container['address_error_code'] = $address_error_code;

        return $this;
    }

    /**
     * Gets address_error_code_text
     *
     * @return string|null
     */
    public function getAddressErrorCodeText()
    {
        return $this->container['address_error_code_text'];
    }

    /**
     * Sets address_error_code_text
     *
     * @param string|null $address_error_code_text Verbose mapping for addressErrorCode
     *
     * @return $this
     */
    public function setAddressErrorCodeText($address_error_code_text)
    {
        $this->container['address_error_code_text'] = $address_error_code_text;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth Format = MMDDCCYY
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets date_of_death
     *
     * @return string|null
     */
    public function getDateOfDeath()
    {
        return $this->container['date_of_death'];
    }

    /**
     * Sets date_of_death
     *
     * @param string|null $date_of_death Format = MMDDCCYY
     *
     * @return $this
     */
    public function setDateOfDeath($date_of_death)
    {
        $this->container['date_of_death'] = $date_of_death;

        return $this;
    }

    /**
     * Gets fraud_shield_indicators
     *
     * @return \OpenAPI\Client\Model\FraudShieldIndicators|null
     */
    public function getFraudShieldIndicators()
    {
        return $this->container['fraud_shield_indicators'];
    }

    /**
     * Sets fraud_shield_indicators
     *
     * @param \OpenAPI\Client\Model\FraudShieldIndicators|null $fraud_shield_indicators fraud_shield_indicators
     *
     * @return $this
     */
    public function setFraudShieldIndicators($fraud_shield_indicators)
    {
        $this->container['fraud_shield_indicators'] = $fraud_shield_indicators;

        return $this;
    }

    /**
     * Gets sic
     *
     * @return string|null
     */
    public function getSic()
    {
        return $this->container['sic'];
    }

    /**
     * Sets sic
     *
     * @param string|null $sic Group Identifiers if applicable.
     *
     * @return $this
     */
    public function setSic($sic)
    {
        $this->container['sic'] = $sic;

        return $this;
    }

    /**
     * Gets sic_text
     *
     * @return string|null
     */
    public function getSicText()
    {
        return $this->container['sic_text'];
    }

    /**
     * Sets sic_text
     *
     * @param string|null $sic_text Verbose mapping for sic
     *
     * @return $this
     */
    public function setSicText($sic_text)
    {
        $this->container['sic_text'] = $sic_text;

        return $this;
    }

    /**
     * Gets social_count
     *
     * @return string|null
     */
    public function getSocialCount()
    {
        return $this->container['social_count'];
    }

    /**
     * Sets social_count
     *
     * @param string|null $social_count Number of times the social was used in the last 90-120 days.
     *
     * @return $this
     */
    public function setSocialCount($social_count)
    {
        $this->container['social_count'] = $social_count;

        return $this;
    }

    /**
     * Gets social_date
     *
     * @return string|null
     */
    public function getSocialDate()
    {
        return $this->container['social_date'];
    }

    /**
     * Sets social_date
     *
     * @param string|null $social_date Date posted when social counter accumulation started. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setSocialDate($social_date)
    {
        $this->container['social_date'] = $social_date;

        return $this;
    }

    /**
     * Gets social_error_code
     *
     * @return string|null
     */
    public function getSocialErrorCode()
    {
        return $this->container['social_error_code'];
    }

    /**
     * Sets social_error_code
     *
     * @param string|null $social_error_code Social error code if applicable.
     *
     * @return $this
     */
    public function setSocialErrorCode($social_error_code)
    {
        $this->container['social_error_code'] = $social_error_code;

        return $this;
    }

    /**
     * Gets social_error_code_text
     *
     * @return string|null
     */
    public function getSocialErrorCodeText()
    {
        return $this->container['social_error_code_text'];
    }

    /**
     * Sets social_error_code_text
     *
     * @param string|null $social_error_code_text Verbose mapping for socialErrorCode
     *
     * @return $this
     */
    public function setSocialErrorCodeText($social_error_code_text)
    {
        $this->container['social_error_code_text'] = $social_error_code_text;

        return $this;
    }

    /**
     * Gets ssn_first_possible_issuance_year
     *
     * @return string|null
     */
    public function getSsnFirstPossibleIssuanceYear()
    {
        return $this->container['ssn_first_possible_issuance_year'];
    }

    /**
     * Sets ssn_first_possible_issuance_year
     *
     * @param string|null $ssn_first_possible_issuance_year First year possible for SSN issuance (YYYY).
     *
     * @return $this
     */
    public function setSsnFirstPossibleIssuanceYear($ssn_first_possible_issuance_year)
    {
        $this->container['ssn_first_possible_issuance_year'] = $ssn_first_possible_issuance_year;

        return $this;
    }

    /**
     * Gets ssn_last_possible_issuance_year
     *
     * @return string|null
     */
    public function getSsnLastPossibleIssuanceYear()
    {
        return $this->container['ssn_last_possible_issuance_year'];
    }

    /**
     * Sets ssn_last_possible_issuance_year
     *
     * @param string|null $ssn_last_possible_issuance_year Last year possible for SSN issuance (YYYY).
     *
     * @return $this
     */
    public function setSsnLastPossibleIssuanceYear($ssn_last_possible_issuance_year)
    {
        $this->container['ssn_last_possible_issuance_year'] = $ssn_last_possible_issuance_year;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Shield message.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Fraud Shield Record Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_text
     *
     * @return string|null
     */
    public function getTypeText()
    {
        return $this->container['type_text'];
    }

    /**
     * Sets type_text
     *
     * @param string|null $type_text Verbose mapping for type
     *
     * @return $this
     */
    public function setTypeText($type_text)
    {
        $this->container['type_text'] = $type_text;

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



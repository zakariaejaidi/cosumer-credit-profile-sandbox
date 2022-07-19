<?php
/**
 * ExtendedViewResp
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
 * ExtendedViewResp Class Doc Comment
 *
 * @category Class
 * @description Present when Extended View attributes are requested.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExtendedViewResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'extendedViewResp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_cd' => 'string',
        'category_txt' => 'string',
        'attribute' => '\OpenAPI\Client\Model\AttributeResp[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'category_cd' => null,
        'category_txt' => null,
        'attribute' => null
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
        'category_cd' => 'categoryCd',
        'category_txt' => 'categoryTxt',
        'attribute' => 'attribute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_cd' => 'setCategoryCd',
        'category_txt' => 'setCategoryTxt',
        'attribute' => 'setAttribute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_cd' => 'getCategoryCd',
        'category_txt' => 'getCategoryTxt',
        'attribute' => 'getAttribute'
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

    const CATEGORY_CD__0 = '0';
    const CATEGORY_CD__1 = '1';
    const CATEGORY_CD__2 = '2';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryCdAllowableValues()
    {
        return [
            self::CATEGORY_CD__0,
            self::CATEGORY_CD__1,
            self::CATEGORY_CD__2,
        ];
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
        $this->container['category_cd'] = isset($data['category_cd']) ? $data['category_cd'] : null;
        $this->container['category_txt'] = isset($data['category_txt']) ? $data['category_txt'] : null;
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCategoryCdAllowableValues();
        if (!is_null($this->container['category_cd']) && !in_array($this->container['category_cd'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category_cd', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets category_cd
     *
     * @return string|null
     */
    public function getCategoryCd()
    {
        return $this->container['category_cd'];
    }

    /**
     * Sets category_cd
     *
     * @param string|null $category_cd This indicates what type of attributes are being returned
     *
     * @return $this
     */
    public function setCategoryCd($category_cd)
    {
        $allowedValues = $this->getCategoryCdAllowableValues();
        if (!is_null($category_cd) && !in_array($category_cd, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category_cd', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category_cd'] = $category_cd;

        return $this;
    }

    /**
     * Gets category_txt
     *
     * @return string|null
     */
    public function getCategoryTxt()
    {
        return $this->container['category_txt'];
    }

    /**
     * Sets category_txt
     *
     * @param string|null $category_txt This explains the category of Extended View attributes It could be \"Experian Premier Attributes\" or \"Lexis Nexis Attributes\"
     *
     * @return $this
     */
    public function setCategoryTxt($category_txt)
    {
        $this->container['category_txt'] = $category_txt;

        return $this;
    }

    /**
     * Gets attribute
     *
     * @return \OpenAPI\Client\Model\AttributeResp[]|null
     */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
     * Sets attribute
     *
     * @param \OpenAPI\Client\Model\AttributeResp[]|null $attribute EV Attribute Information
     *
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;

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


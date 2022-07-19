<?php
/**
 * TradelineResp
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
 * TradelineResp Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TradelineResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tradelineResp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_number' => 'string',
        'account_type' => 'string',
        'amount1' => 'string',
        'amount1_qualifier' => 'string',
        'amount2' => 'string',
        'amount2_qualifier' => 'string',
        'amount_balloon_payment' => 'string',
        'amount_past_due' => 'string',
        'balance_amount' => 'string',
        'balance_date' => 'string',
        'bankruptcy_chapter_number' => 'string',
        'consumer_comment' => 'string',
        'consumer_dispute_flag' => 'string',
        'date_payment_due' => 'string',
        'delinquencies30_days' => 'string',
        'delinquencies60_days' => 'string',
        'delinquencies90to180_days' => 'string',
        'derog_counter' => 'string',
        'ecoa' => 'string',
        'enhanced_payment_data' => '\OpenAPI\Client\Model\EnhancedPaymentData',
        'evaluation' => 'string',
        'kob' => 'string',
        'last_payment_date' => 'string',
        'max_delinquency_date' => 'string',
        'monthly_payment_amount' => 'string',
        'monthly_payment_type' => 'string',
        'months_history' => 'string',
        'open_date' => 'string',
        'open_or_closed' => 'string',
        'original_creditor_name' => 'string',
        'payment_history' => 'string',
        'revolving_or_installment' => 'string',
        'sold_to_name' => 'string',
        'special_comment' => 'string',
        'status' => 'string',
        'status_date' => 'string',
        'subscriber_code' => 'string',
        'subscriber_name' => 'string',
        'terms' => 'string',
        'trended_trades' => '\OpenAPI\Client\Model\TrendedTrade[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_number' => null,
        'account_type' => null,
        'amount1' => null,
        'amount1_qualifier' => null,
        'amount2' => null,
        'amount2_qualifier' => null,
        'amount_balloon_payment' => null,
        'amount_past_due' => null,
        'balance_amount' => null,
        'balance_date' => null,
        'bankruptcy_chapter_number' => null,
        'consumer_comment' => null,
        'consumer_dispute_flag' => null,
        'date_payment_due' => null,
        'delinquencies30_days' => null,
        'delinquencies60_days' => null,
        'delinquencies90to180_days' => null,
        'derog_counter' => null,
        'ecoa' => null,
        'enhanced_payment_data' => null,
        'evaluation' => null,
        'kob' => null,
        'last_payment_date' => null,
        'max_delinquency_date' => null,
        'monthly_payment_amount' => null,
        'monthly_payment_type' => null,
        'months_history' => null,
        'open_date' => null,
        'open_or_closed' => null,
        'original_creditor_name' => null,
        'payment_history' => null,
        'revolving_or_installment' => null,
        'sold_to_name' => null,
        'special_comment' => null,
        'status' => null,
        'status_date' => null,
        'subscriber_code' => null,
        'subscriber_name' => null,
        'terms' => null,
        'trended_trades' => null
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
        'account_number' => 'accountNumber',
        'account_type' => 'accountType',
        'amount1' => 'amount1',
        'amount1_qualifier' => 'amount1Qualifier',
        'amount2' => 'amount2',
        'amount2_qualifier' => 'amount2Qualifier',
        'amount_balloon_payment' => 'amountBalloonPayment',
        'amount_past_due' => 'amountPastDue',
        'balance_amount' => 'balanceAmount',
        'balance_date' => 'balanceDate',
        'bankruptcy_chapter_number' => 'bankruptcyChapterNumber',
        'consumer_comment' => 'consumerComment',
        'consumer_dispute_flag' => 'consumerDisputeFlag',
        'date_payment_due' => 'datePaymentDue',
        'delinquencies30_days' => 'delinquencies30Days',
        'delinquencies60_days' => 'delinquencies60Days',
        'delinquencies90to180_days' => 'delinquencies90to180Days',
        'derog_counter' => 'derogCounter',
        'ecoa' => 'ecoa',
        'enhanced_payment_data' => 'enhancedPaymentData',
        'evaluation' => 'evaluation',
        'kob' => 'kob',
        'last_payment_date' => 'lastPaymentDate',
        'max_delinquency_date' => 'maxDelinquencyDate',
        'monthly_payment_amount' => 'monthlyPaymentAmount',
        'monthly_payment_type' => 'monthlyPaymentType',
        'months_history' => 'monthsHistory',
        'open_date' => 'openDate',
        'open_or_closed' => 'openOrClosed',
        'original_creditor_name' => 'originalCreditorName',
        'payment_history' => 'paymentHistory',
        'revolving_or_installment' => 'revolvingOrInstallment',
        'sold_to_name' => 'soldToName',
        'special_comment' => 'specialComment',
        'status' => 'status',
        'status_date' => 'statusDate',
        'subscriber_code' => 'subscriberCode',
        'subscriber_name' => 'subscriberName',
        'terms' => 'terms',
        'trended_trades' => 'trendedTrades'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'amount1' => 'setAmount1',
        'amount1_qualifier' => 'setAmount1Qualifier',
        'amount2' => 'setAmount2',
        'amount2_qualifier' => 'setAmount2Qualifier',
        'amount_balloon_payment' => 'setAmountBalloonPayment',
        'amount_past_due' => 'setAmountPastDue',
        'balance_amount' => 'setBalanceAmount',
        'balance_date' => 'setBalanceDate',
        'bankruptcy_chapter_number' => 'setBankruptcyChapterNumber',
        'consumer_comment' => 'setConsumerComment',
        'consumer_dispute_flag' => 'setConsumerDisputeFlag',
        'date_payment_due' => 'setDatePaymentDue',
        'delinquencies30_days' => 'setDelinquencies30Days',
        'delinquencies60_days' => 'setDelinquencies60Days',
        'delinquencies90to180_days' => 'setDelinquencies90to180Days',
        'derog_counter' => 'setDerogCounter',
        'ecoa' => 'setEcoa',
        'enhanced_payment_data' => 'setEnhancedPaymentData',
        'evaluation' => 'setEvaluation',
        'kob' => 'setKob',
        'last_payment_date' => 'setLastPaymentDate',
        'max_delinquency_date' => 'setMaxDelinquencyDate',
        'monthly_payment_amount' => 'setMonthlyPaymentAmount',
        'monthly_payment_type' => 'setMonthlyPaymentType',
        'months_history' => 'setMonthsHistory',
        'open_date' => 'setOpenDate',
        'open_or_closed' => 'setOpenOrClosed',
        'original_creditor_name' => 'setOriginalCreditorName',
        'payment_history' => 'setPaymentHistory',
        'revolving_or_installment' => 'setRevolvingOrInstallment',
        'sold_to_name' => 'setSoldToName',
        'special_comment' => 'setSpecialComment',
        'status' => 'setStatus',
        'status_date' => 'setStatusDate',
        'subscriber_code' => 'setSubscriberCode',
        'subscriber_name' => 'setSubscriberName',
        'terms' => 'setTerms',
        'trended_trades' => 'setTrendedTrades'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'amount1' => 'getAmount1',
        'amount1_qualifier' => 'getAmount1Qualifier',
        'amount2' => 'getAmount2',
        'amount2_qualifier' => 'getAmount2Qualifier',
        'amount_balloon_payment' => 'getAmountBalloonPayment',
        'amount_past_due' => 'getAmountPastDue',
        'balance_amount' => 'getBalanceAmount',
        'balance_date' => 'getBalanceDate',
        'bankruptcy_chapter_number' => 'getBankruptcyChapterNumber',
        'consumer_comment' => 'getConsumerComment',
        'consumer_dispute_flag' => 'getConsumerDisputeFlag',
        'date_payment_due' => 'getDatePaymentDue',
        'delinquencies30_days' => 'getDelinquencies30Days',
        'delinquencies60_days' => 'getDelinquencies60Days',
        'delinquencies90to180_days' => 'getDelinquencies90to180Days',
        'derog_counter' => 'getDerogCounter',
        'ecoa' => 'getEcoa',
        'enhanced_payment_data' => 'getEnhancedPaymentData',
        'evaluation' => 'getEvaluation',
        'kob' => 'getKob',
        'last_payment_date' => 'getLastPaymentDate',
        'max_delinquency_date' => 'getMaxDelinquencyDate',
        'monthly_payment_amount' => 'getMonthlyPaymentAmount',
        'monthly_payment_type' => 'getMonthlyPaymentType',
        'months_history' => 'getMonthsHistory',
        'open_date' => 'getOpenDate',
        'open_or_closed' => 'getOpenOrClosed',
        'original_creditor_name' => 'getOriginalCreditorName',
        'payment_history' => 'getPaymentHistory',
        'revolving_or_installment' => 'getRevolvingOrInstallment',
        'sold_to_name' => 'getSoldToName',
        'special_comment' => 'getSpecialComment',
        'status' => 'getStatus',
        'status_date' => 'getStatusDate',
        'subscriber_code' => 'getSubscriberCode',
        'subscriber_name' => 'getSubscriberName',
        'terms' => 'getTerms',
        'trended_trades' => 'getTrendedTrades'
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['amount1'] = isset($data['amount1']) ? $data['amount1'] : null;
        $this->container['amount1_qualifier'] = isset($data['amount1_qualifier']) ? $data['amount1_qualifier'] : null;
        $this->container['amount2'] = isset($data['amount2']) ? $data['amount2'] : null;
        $this->container['amount2_qualifier'] = isset($data['amount2_qualifier']) ? $data['amount2_qualifier'] : null;
        $this->container['amount_balloon_payment'] = isset($data['amount_balloon_payment']) ? $data['amount_balloon_payment'] : null;
        $this->container['amount_past_due'] = isset($data['amount_past_due']) ? $data['amount_past_due'] : null;
        $this->container['balance_amount'] = isset($data['balance_amount']) ? $data['balance_amount'] : null;
        $this->container['balance_date'] = isset($data['balance_date']) ? $data['balance_date'] : null;
        $this->container['bankruptcy_chapter_number'] = isset($data['bankruptcy_chapter_number']) ? $data['bankruptcy_chapter_number'] : null;
        $this->container['consumer_comment'] = isset($data['consumer_comment']) ? $data['consumer_comment'] : null;
        $this->container['consumer_dispute_flag'] = isset($data['consumer_dispute_flag']) ? $data['consumer_dispute_flag'] : null;
        $this->container['date_payment_due'] = isset($data['date_payment_due']) ? $data['date_payment_due'] : null;
        $this->container['delinquencies30_days'] = isset($data['delinquencies30_days']) ? $data['delinquencies30_days'] : null;
        $this->container['delinquencies60_days'] = isset($data['delinquencies60_days']) ? $data['delinquencies60_days'] : null;
        $this->container['delinquencies90to180_days'] = isset($data['delinquencies90to180_days']) ? $data['delinquencies90to180_days'] : null;
        $this->container['derog_counter'] = isset($data['derog_counter']) ? $data['derog_counter'] : null;
        $this->container['ecoa'] = isset($data['ecoa']) ? $data['ecoa'] : null;
        $this->container['enhanced_payment_data'] = isset($data['enhanced_payment_data']) ? $data['enhanced_payment_data'] : null;
        $this->container['evaluation'] = isset($data['evaluation']) ? $data['evaluation'] : null;
        $this->container['kob'] = isset($data['kob']) ? $data['kob'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
        $this->container['max_delinquency_date'] = isset($data['max_delinquency_date']) ? $data['max_delinquency_date'] : null;
        $this->container['monthly_payment_amount'] = isset($data['monthly_payment_amount']) ? $data['monthly_payment_amount'] : null;
        $this->container['monthly_payment_type'] = isset($data['monthly_payment_type']) ? $data['monthly_payment_type'] : null;
        $this->container['months_history'] = isset($data['months_history']) ? $data['months_history'] : null;
        $this->container['open_date'] = isset($data['open_date']) ? $data['open_date'] : null;
        $this->container['open_or_closed'] = isset($data['open_or_closed']) ? $data['open_or_closed'] : null;
        $this->container['original_creditor_name'] = isset($data['original_creditor_name']) ? $data['original_creditor_name'] : null;
        $this->container['payment_history'] = isset($data['payment_history']) ? $data['payment_history'] : null;
        $this->container['revolving_or_installment'] = isset($data['revolving_or_installment']) ? $data['revolving_or_installment'] : null;
        $this->container['sold_to_name'] = isset($data['sold_to_name']) ? $data['sold_to_name'] : null;
        $this->container['special_comment'] = isset($data['special_comment']) ? $data['special_comment'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_date'] = isset($data['status_date']) ? $data['status_date'] : null;
        $this->container['subscriber_code'] = isset($data['subscriber_code']) ? $data['subscriber_code'] : null;
        $this->container['subscriber_name'] = isset($data['subscriber_name']) ? $data['subscriber_name'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['trended_trades'] = isset($data['trended_trades']) ? $data['trended_trades'] : null;
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
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number Account Number upto 40 characters.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type Indicates Type of Account.
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets amount1
     *
     * @return string|null
     */
    public function getAmount1()
    {
        return $this->container['amount1'];
    }

    /**
     * Sets amount1
     *
     * @param string|null $amount1 Full dollar amount.
     *
     * @return $this
     */
    public function setAmount1($amount1)
    {
        $this->container['amount1'] = $amount1;

        return $this;
    }

    /**
     * Gets amount1_qualifier
     *
     * @return string|null
     */
    public function getAmount1Qualifier()
    {
        return $this->container['amount1_qualifier'];
    }

    /**
     * Sets amount1_qualifier
     *
     * @param string|null $amount1_qualifier Amount Type.
     *
     * @return $this
     */
    public function setAmount1Qualifier($amount1_qualifier)
    {
        $this->container['amount1_qualifier'] = $amount1_qualifier;

        return $this;
    }

    /**
     * Gets amount2
     *
     * @return string|null
     */
    public function getAmount2()
    {
        return $this->container['amount2'];
    }

    /**
     * Sets amount2
     *
     * @param string|null $amount2 Full dollar amount.
     *
     * @return $this
     */
    public function setAmount2($amount2)
    {
        $this->container['amount2'] = $amount2;

        return $this;
    }

    /**
     * Gets amount2_qualifier
     *
     * @return string|null
     */
    public function getAmount2Qualifier()
    {
        return $this->container['amount2_qualifier'];
    }

    /**
     * Sets amount2_qualifier
     *
     * @param string|null $amount2_qualifier Amount Type.
     *
     * @return $this
     */
    public function setAmount2Qualifier($amount2_qualifier)
    {
        $this->container['amount2_qualifier'] = $amount2_qualifier;

        return $this;
    }

    /**
     * Gets amount_balloon_payment
     *
     * @return string|null
     */
    public function getAmountBalloonPayment()
    {
        return $this->container['amount_balloon_payment'];
    }

    /**
     * Sets amount_balloon_payment
     *
     * @param string|null $amount_balloon_payment Full dollar amount
     *
     * @return $this
     */
    public function setAmountBalloonPayment($amount_balloon_payment)
    {
        $this->container['amount_balloon_payment'] = $amount_balloon_payment;

        return $this;
    }

    /**
     * Gets amount_past_due
     *
     * @return string|null
     */
    public function getAmountPastDue()
    {
        return $this->container['amount_past_due'];
    }

    /**
     * Sets amount_past_due
     *
     * @param string|null $amount_past_due Full dollar amount
     *
     * @return $this
     */
    public function setAmountPastDue($amount_past_due)
    {
        $this->container['amount_past_due'] = $amount_past_due;

        return $this;
    }

    /**
     * Gets balance_amount
     *
     * @return string|null
     */
    public function getBalanceAmount()
    {
        return $this->container['balance_amount'];
    }

    /**
     * Sets balance_amount
     *
     * @param string|null $balance_amount Full dollar amount
     *
     * @return $this
     */
    public function setBalanceAmount($balance_amount)
    {
        $this->container['balance_amount'] = $balance_amount;

        return $this;
    }

    /**
     * Gets balance_date
     *
     * @return string|null
     */
    public function getBalanceDate()
    {
        return $this->container['balance_date'];
    }

    /**
     * Sets balance_date
     *
     * @param string|null $balance_date Date account was last updated. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setBalanceDate($balance_date)
    {
        $this->container['balance_date'] = $balance_date;

        return $this;
    }

    /**
     * Gets bankruptcy_chapter_number
     *
     * @return string|null
     */
    public function getBankruptcyChapterNumber()
    {
        return $this->container['bankruptcy_chapter_number'];
    }

    /**
     * Sets bankruptcy_chapter_number
     *
     * @param string|null $bankruptcy_chapter_number Bankruptcy Chapter Number.
     *
     * @return $this
     */
    public function setBankruptcyChapterNumber($bankruptcy_chapter_number)
    {
        $this->container['bankruptcy_chapter_number'] = $bankruptcy_chapter_number;

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
     * @param string|null $consumer_comment Free Form Text from consumer.
     *
     * @return $this
     */
    public function setConsumerComment($consumer_comment)
    {
        $this->container['consumer_comment'] = $consumer_comment;

        return $this;
    }

    /**
     * Gets consumer_dispute_flag
     *
     * @return string|null
     */
    public function getConsumerDisputeFlag()
    {
        return $this->container['consumer_dispute_flag'];
    }

    /**
     * Sets consumer_dispute_flag
     *
     * @param string|null $consumer_dispute_flag Indicates if trade is disputed by consumer.
     *
     * @return $this
     */
    public function setConsumerDisputeFlag($consumer_dispute_flag)
    {
        $this->container['consumer_dispute_flag'] = $consumer_dispute_flag;

        return $this;
    }

    /**
     * Gets date_payment_due
     *
     * @return string|null
     */
    public function getDatePaymentDue()
    {
        return $this->container['date_payment_due'];
    }

    /**
     * Sets date_payment_due
     *
     * @param string|null $date_payment_due Date balloon payment due. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setDatePaymentDue($date_payment_due)
    {
        $this->container['date_payment_due'] = $date_payment_due;

        return $this;
    }

    /**
     * Gets delinquencies30_days
     *
     * @return string|null
     */
    public function getDelinquencies30Days()
    {
        return $this->container['delinquencies30_days'];
    }

    /**
     * Sets delinquencies30_days
     *
     * @param string|null $delinquencies30_days 30 to 59 day delinquencies
     *
     * @return $this
     */
    public function setDelinquencies30Days($delinquencies30_days)
    {
        $this->container['delinquencies30_days'] = $delinquencies30_days;

        return $this;
    }

    /**
     * Gets delinquencies60_days
     *
     * @return string|null
     */
    public function getDelinquencies60Days()
    {
        return $this->container['delinquencies60_days'];
    }

    /**
     * Sets delinquencies60_days
     *
     * @param string|null $delinquencies60_days 60 to 89 day delinquencies
     *
     * @return $this
     */
    public function setDelinquencies60Days($delinquencies60_days)
    {
        $this->container['delinquencies60_days'] = $delinquencies60_days;

        return $this;
    }

    /**
     * Gets delinquencies90to180_days
     *
     * @return string|null
     */
    public function getDelinquencies90to180Days()
    {
        return $this->container['delinquencies90to180_days'];
    }

    /**
     * Sets delinquencies90to180_days
     *
     * @param string|null $delinquencies90to180_days 90 to 180 day delinquencies
     *
     * @return $this
     */
    public function setDelinquencies90to180Days($delinquencies90to180_days)
    {
        $this->container['delinquencies90to180_days'] = $delinquencies90to180_days;

        return $this;
    }

    /**
     * Gets derog_counter
     *
     * @return string|null
     */
    public function getDerogCounter()
    {
        return $this->container['derog_counter'];
    }

    /**
     * Sets derog_counter
     *
     * @param string|null $derog_counter Indicates the number of months the account has been reported as seriously derogatory.
     *
     * @return $this
     */
    public function setDerogCounter($derog_counter)
    {
        $this->container['derog_counter'] = $derog_counter;

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
     * @param string|null $ecoa Attribute code.
     *
     * @return $this
     */
    public function setEcoa($ecoa)
    {
        $this->container['ecoa'] = $ecoa;

        return $this;
    }

    /**
     * Gets enhanced_payment_data
     *
     * @return \OpenAPI\Client\Model\EnhancedPaymentData|null
     */
    public function getEnhancedPaymentData()
    {
        return $this->container['enhanced_payment_data'];
    }

    /**
     * Sets enhanced_payment_data
     *
     * @param \OpenAPI\Client\Model\EnhancedPaymentData|null $enhanced_payment_data enhanced_payment_data
     *
     * @return $this
     */
    public function setEnhancedPaymentData($enhanced_payment_data)
    {
        $this->container['enhanced_payment_data'] = $enhanced_payment_data;

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
     * @param string|null $evaluation Indicates if additional review is required.
     *
     * @return $this
     */
    public function setEvaluation($evaluation)
    {
        $this->container['evaluation'] = $evaluation;

        return $this;
    }

    /**
     * Gets kob
     *
     * @return string|null
     */
    public function getKob()
    {
        return $this->container['kob'];
    }

    /**
     * Sets kob
     *
     * @param string|null $kob Kind of business code of subscriber
     *
     * @return $this
     */
    public function setKob($kob)
    {
        $this->container['kob'] = $kob;

        return $this;
    }

    /**
     * Gets last_payment_date
     *
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return $this->container['last_payment_date'];
    }

    /**
     * Sets last_payment_date
     *
     * @param string|null $last_payment_date Date of last payment. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setLastPaymentDate($last_payment_date)
    {
        $this->container['last_payment_date'] = $last_payment_date;

        return $this;
    }

    /**
     * Gets max_delinquency_date
     *
     * @return string|null
     */
    public function getMaxDelinquencyDate()
    {
        return $this->container['max_delinquency_date'];
    }

    /**
     * Sets max_delinquency_date
     *
     * @param string|null $max_delinquency_date Date of worst payment code beyond the monthly payment profile. Format = (MMDDCCYY)
     *
     * @return $this
     */
    public function setMaxDelinquencyDate($max_delinquency_date)
    {
        $this->container['max_delinquency_date'] = $max_delinquency_date;

        return $this;
    }

    /**
     * Gets monthly_payment_amount
     *
     * @return string|null
     */
    public function getMonthlyPaymentAmount()
    {
        return $this->container['monthly_payment_amount'];
    }

    /**
     * Sets monthly_payment_amount
     *
     * @param string|null $monthly_payment_amount Full dollar amount.
     *
     * @return $this
     */
    public function setMonthlyPaymentAmount($monthly_payment_amount)
    {
        $this->container['monthly_payment_amount'] = $monthly_payment_amount;

        return $this;
    }

    /**
     * Gets monthly_payment_type
     *
     * @return string|null
     */
    public function getMonthlyPaymentType()
    {
        return $this->container['monthly_payment_type'];
    }

    /**
     * Sets monthly_payment_type
     *
     * @param string|null $monthly_payment_type monthly_payment_type
     *
     * @return $this
     */
    public function setMonthlyPaymentType($monthly_payment_type)
    {
        $this->container['monthly_payment_type'] = $monthly_payment_type;

        return $this;
    }

    /**
     * Gets months_history
     *
     * @return string|null
     */
    public function getMonthsHistory()
    {
        return $this->container['months_history'];
    }

    /**
     * Sets months_history
     *
     * @param string|null $months_history Number of Months Reviewed
     *
     * @return $this
     */
    public function setMonthsHistory($months_history)
    {
        $this->container['months_history'] = $months_history;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string|null $open_date Date account opened. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setOpenDate($open_date)
    {
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets open_or_closed
     *
     * @return string|null
     */
    public function getOpenOrClosed()
    {
        return $this->container['open_or_closed'];
    }

    /**
     * Sets open_or_closed
     *
     * @param string|null $open_or_closed Indicates if trade is Open or Closed
     *
     * @return $this
     */
    public function setOpenOrClosed($open_or_closed)
    {
        $this->container['open_or_closed'] = $open_or_closed;

        return $this;
    }

    /**
     * Gets original_creditor_name
     *
     * @return string|null
     */
    public function getOriginalCreditorName()
    {
        return $this->container['original_creditor_name'];
    }

    /**
     * Sets original_creditor_name
     *
     * @param string|null $original_creditor_name Name of original creditor if a collection account.
     *
     * @return $this
     */
    public function setOriginalCreditorName($original_creditor_name)
    {
        $this->container['original_creditor_name'] = $original_creditor_name;

        return $this;
    }

    /**
     * Gets payment_history
     *
     * @return string|null
     */
    public function getPaymentHistory()
    {
        return $this->container['payment_history'];
    }

    /**
     * Sets payment_history
     *
     * @param string|null $payment_history 84 Month payment history when requested on input. Otherwise 25 month payment history.
     *
     * @return $this
     */
    public function setPaymentHistory($payment_history)
    {
        $this->container['payment_history'] = $payment_history;

        return $this;
    }

    /**
     * Gets revolving_or_installment
     *
     * @return string|null
     */
    public function getRevolvingOrInstallment()
    {
        return $this->container['revolving_or_installment'];
    }

    /**
     * Sets revolving_or_installment
     *
     * @param string|null $revolving_or_installment revolving_or_installment
     *
     * @return $this
     */
    public function setRevolvingOrInstallment($revolving_or_installment)
    {
        $this->container['revolving_or_installment'] = $revolving_or_installment;

        return $this;
    }

    /**
     * Gets sold_to_name
     *
     * @return string|null
     */
    public function getSoldToName()
    {
        return $this->container['sold_to_name'];
    }

    /**
     * Sets sold_to_name
     *
     * @param string|null $sold_to_name Name of the creditor to whom the account was sold.
     *
     * @return $this
     */
    public function setSoldToName($sold_to_name)
    {
        $this->container['sold_to_name'] = $sold_to_name;

        return $this;
    }

    /**
     * Gets special_comment
     *
     * @return string|null
     */
    public function getSpecialComment()
    {
        return $this->container['special_comment'];
    }

    /**
     * Sets special_comment
     *
     * @param string|null $special_comment Special Comments.
     *
     * @return $this
     */
    public function setSpecialComment($special_comment)
    {
        $this->container['special_comment'] = $special_comment;

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
     * @param string|null $status Account Condition/Payment Status Codes.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $status_date Account Status Date. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setStatusDate($status_date)
    {
        $this->container['status_date'] = $status_date;

        return $this;
    }

    /**
     * Gets subscriber_code
     *
     * @return string|null
     */
    public function getSubscriberCode()
    {
        return $this->container['subscriber_code'];
    }

    /**
     * Sets subscriber_code
     *
     * @param string|null $subscriber_code Subscriber number that reported tradeline.
     *
     * @return $this
     */
    public function setSubscriberCode($subscriber_code)
    {
        $this->container['subscriber_code'] = $subscriber_code;

        return $this;
    }

    /**
     * Gets subscriber_name
     *
     * @return string|null
     */
    public function getSubscriberName()
    {
        return $this->container['subscriber_name'];
    }

    /**
     * Sets subscriber_name
     *
     * @param string|null $subscriber_name Name of Subscriber
     *
     * @return $this
     */
    public function setSubscriberName($subscriber_name)
    {
        $this->container['subscriber_name'] = $subscriber_name;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms Payment terms for the Account.
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets trended_trades
     *
     * @return \OpenAPI\Client\Model\TrendedTrade[]|null
     */
    public function getTrendedTrades()
    {
        return $this->container['trended_trades'];
    }

    /**
     * Sets trended_trades
     *
     * @param \OpenAPI\Client\Model\TrendedTrade[]|null $trended_trades Trended Data for a tradeline
     *
     * @return $this
     */
    public function setTrendedTrades($trended_trades)
    {
        $this->container['trended_trades'] = $trended_trades;

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



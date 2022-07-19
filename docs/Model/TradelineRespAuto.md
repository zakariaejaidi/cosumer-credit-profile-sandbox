# TradelineRespAuto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | Account Number upto 40 characters. | [optional] 
**account_type** | **string** | Indicates Type of Account. | [optional] 
**amount1** | **string** | Full dollar amount. | [optional] 
**amount1_qualifier** | **string** | Amount Type. | [optional] 
**amount2** | **string** | Full dollar amount. | [optional] 
**amount2_qualifier** | **string** | Amount Type. | [optional] 
**amount_balloon_payment** | **string** | Full dollar amount | [optional] 
**amount_past_due** | **string** | Full dollar amount | [optional] 
**balance_amount** | **string** | Full dollar amount | [optional] 
**balance_date** | **string** | Date account was last updated. Format &#x3D; MMDDCCYY. | [optional] 
**bankruptcy_chapter_number** | **string** | Bankruptcy Chapter Number. | [optional] 
**consumer_comment** | **string** | Free Form Text from consumer. | [optional] 
**consumer_dispute_flag** | **string** | Indicates if trade is disputed by consumer. | [optional] 
**date_payment_due** | **string** | Date balloon payment due. Format &#x3D; MMDDCCYY. | [optional] 
**delinquencies30_days** | **string** | 30 to 59 day delinquencies | [optional] 
**delinquencies60_days** | **string** | 60 to 89 day delinquencies | [optional] 
**delinquencies90to180_days** | **string** | 90 to 180 day delinquencies | [optional] 
**derog_counter** | **string** | Indicates the number of months the account has been reported as seriously derogatory. | [optional] 
**ecoa** | **string** | Attribute code. | [optional] 
**enhanced_payment_data** | [**\OpenAPI\Client\Model\EnhancedPaymentData**](EnhancedPaymentData.md) |  | [optional] 
**evaluation** | **string** | Indicates if additional review is required. | [optional] 
**kob** | **string** | Kind of business code of subscriber | [optional] 
**last_payment_date** | **string** | Date of last payment. Format &#x3D; MMDDCCYY. | [optional] 
**max_delinquency_date** | **string** | Date of worst payment code beyond the monthly payment profile. Format &#x3D; (MMDDCCYY) | [optional] 
**monthly_payment_amount** | **string** | Full dollar amount. | [optional] 
**monthly_payment_type** | **string** |  | [optional] 
**months_history** | **string** | Number of Months Reviewed | [optional] 
**open_date** | **string** | Date account opened. Format &#x3D; MMDDCCYY. | [optional] 
**open_or_closed** | **string** | Indicates if trade is Open or Closed | [optional] 
**original_creditor_name** | **string** | Name of original creditor if a collection account. | [optional] 
**payment_history** | **string** | 84 Month payment history when requested on input. Otherwise 25 month payment history. | [optional] 
**revolving_or_installment** | **string** |  | [optional] 
**sold_to_name** | **string** | Name of the creditor to whom the account was sold. | [optional] 
**special_comment** | **string** | Special Comments. | [optional] 
**status** | **string** | Account Condition/Payment Status Codes. | [optional] 
**status_date** | **string** | Account Status Date. Format &#x3D; MMDDCCYY. | [optional] 
**subscriber_code** | **string** | Subscriber number that reported tradeline. | [optional] 
**subscriber_name** | **string** | Name of Subscriber | [optional] 
**terms** | **string** | Payment terms for the Account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



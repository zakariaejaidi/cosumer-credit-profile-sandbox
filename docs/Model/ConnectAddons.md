# ConnectAddons

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_check** | **string** | Send back subscriber information on the credit profile. When set to Y indicates that subscriber and court names, addresses, and phone numbers who have reported data on the consumer&#39;s profile will be sent back on the response. | [optional] 
**demographics** | **string** | Indicates the type of demographic data that should be returned back. | [optional] 
**clarity_early_risk_score** | **string** | Y.  Returns Clarity&#39;s 90 day Clear Early Risk Score (CERS) which predict the risk of a consumer going 90 days past due in first 12 months of a traditional bureau trade. This can be omitted if Clarity Early Risk Score is not needed. | [optional] 
**clarity_data** | [**\OpenAPI\Client\Model\ClarityAccountData**](ClarityAccountData.md) |  | [optional] 
**risk_models** | [**\OpenAPI\Client\Model\RiskModel**](RiskModel.md) |  | [optional] 
**summaries** | [**\OpenAPI\Client\Model\AddonsSummaries**](AddonsSummaries.md) |  | [optional] 
**fraud_shield** | **string** | Y - Fraud Shield Product Option will be output | [optional] 
**mla** | **string** | Y - Trigger a screening process of taking the consumer data from an inquiry to match against the Dept of Defense MLA lists. Message codes 1203-1207 could be returned. Permissible Purpose with valid YOB required for getting this option. | [optional] 
**ofacmsg** | **string** | Y- Trigger a screening process of taking the consumer data from an inquiry to match against the OFAC (Office of Foreign Asset Control) and PLC (Palestinian Legislative Council) lists. A message 1202 NAME DOES NOT MATCH OFAC/PLC LIST will be printed on credit profile if the consumer is not found on either OFAC or PLC list. A message 1200 NAME MATCHES OFAC/PLC LIST will be printed on credit profile if the consumer is found on either OFAC or PLC list. | [optional] 
**consumer_ident_check** | [**\OpenAPI\Client\Model\ConsumerIdentifierCheckOptionsConnect**](ConsumerIdentifierCheckOptionsConnect.md) |  | [optional] 
**payment_history84** | **string** | Y.  84 month payment history is requested instead of the 25 month history. This can be omitted if 84 month history is not needed. | [optional] 
**credit_score_notice** | **string** | Y.  It makes &#39;creditScoreNoticeData&#39; a mandatory element. | [optional] 
**credit_score_notice_data** | [**\OpenAPI\Client\Model\CreditScoreNoticeDataDaas**](CreditScoreNoticeDataDaas.md) |  | [optional] 
**output_type** | **string** | ENUM JSON,ARF,TTYSUMMARY,TTYDETAIL,TTYFULL If JSON is type, API returns JSON response If ARF is type, API creates a JSON wrapper with a single data tag that contains the ARF output. If TTY is type, API returns the output in TTY format and wraps that into a single JSON data tag. | [optional] 
**tty_data** | [**\OpenAPI\Client\Model\TTYData**](TTYData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



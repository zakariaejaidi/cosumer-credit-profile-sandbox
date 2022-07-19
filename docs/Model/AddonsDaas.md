# AddonsDaas

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_check** | **string** | Send back subscriber information on the credit profile. When set to Y indicates that subscriber and court names, addresses, and phone numbers who have reported data on the consumer&#39;s profile will be sent back on the response. | [optional] 
**demographics** | **string** | Indicates the type of demographic data that should be returned back. | [optional] 
**lift_premium** | **string** | liftPremium \&quot;type\&quot;: \&quot;string\&quot;, \&quot;pattern\&quot;: \&quot;^[A-Z]{0,1}$\&quot;, \&quot;enum\&quot;: [\&quot;Y\&quot;, \&quot;N\&quot;,\&quot;\&quot;] | [optional] 
**clarity_early_risk_score** | **string** | Y.  Returns Clarity&#39;s 90 day Clear Early Risk Score (CERS) which predict the risk of a consumer going 90 days past due in first 12 months of a traditional bureau trade. This can be omitted if Clarity Early Risk Score is not needed. | [optional] 
**clarity_data** | [**\OpenAPI\Client\Model\ClarityAccountData**](ClarityAccountData.md) |  | [optional] 
**credit_score_notice** | **string** | Y.  It makes &#39;creditScoreNoticeData&#39; a mandatory element. | [optional] 
**credit_score_notice_data** | [**\OpenAPI\Client\Model\CreditScoreNoticeDataDaas**](CreditScoreNoticeDataDaas.md) |  | [optional] 
**risk_models** | [**\OpenAPI\Client\Model\RiskModelDaas**](RiskModelDaas.md) |  | [optional] 
**summaries** | [**\OpenAPI\Client\Model\AddonsSummaries**](AddonsSummaries.md) |  | [optional] 
**fraud_shield** | **string** | Y - Fraud Shield Product Option will be output | [optional] 
**mla** | **string** | Y - Trigger a screening process of taking the consumer data from an inquiry to match against the Dept of Defense MLA lists. Message codes 1203-1207 could be returned. Permissible Purpose with valid YOB required for getting this option. | [optional] 
**ofacmsg** | **string** | Y- Trigger a screening process of taking the consumer data from an inquiry to match against the OFAC (Office of Foreign Asset Control) and PLC (Palestinian Legislative Council) lists. A message 1202 NAME DOES NOT MATCH OFAC/PLC LIST will be printed on credit profile if the consumer is not found on either OFAC or PLC list. A message 1200 NAME MATCHES OFAC/PLC LIST will be printed on credit profile if the consumer is found on either OFAC or PLC list. | [optional] 
**ofac** | **string** | Y- The OFAC keyword is used to trigger a screening process of taking the consumer data from an inquiry to match aginst the OFAC(Office of Foreign Asset Control)list.  A message \&quot;spelling of name used to access report matches OFAC list\&quot; will be printed on credit profile if the consumer is found on OFAC list. | [optional] 
**broker_number** | **string** | Broker Number is required if the inquiry SIN has customer master service rule 30/350 set on at fileone system.  And it is retained in the reference id field for inquiry logging purpose at fileone system. Broker Number is an optional field and accepts 1 to 10 digits of numeric values. | [optional] 
**consumer_ident_check** | [**\OpenAPI\Client\Model\ConsumerIdentifierCheckOptions**](ConsumerIdentifierCheckOptions.md) |  | [optional] 
**joint** | **string** | If specified as Y it means that the client is requesting a joint credit report. This is used to request the Dual or Joint Report. Two separate credit reports are returned?one on the primary applicant and one on the secondary applicant. The joint applicant should have the same current address as the primary applicant. Include as much information on the joint applicant as possible, including the surname if it is different from the primary applicant. If NOt specified or N it means that a joint report is NOT being requested. | [optional] 
**payment_history84** | **string** | Y.  84 month payment history is requested instead of the 25 month history. This can be omitted if 84 month history is not needed | [optional] 
**output_type** | **string** | ENUM JSON,ARF,COMBO,TTY,COMBO1,COMBO2 If JSON is type, API coverts the output from DaaS to JSON tags and discards the output from DaaS If ARF is type, API creates a JSON wrapper with a single data tag that contains the DaaS output. If COMBO is type, API converts the output from DaaS (excluding the 700 segments) into JSON and also inserts the DaaS output into a single data             tag. If TTY is type, If TTY is type, API returns the output in TTY format and wraps that into a single JSON data tag. COMBO1 is cobination of JSON and TTY. COMBO2 is used to get the third party data source data from 700 segment. | [optional] 
**output_type_data** | [**\OpenAPI\Client\Model\OutputTypeDataDaas**](OutputTypeDataDaas.md) |  | [optional] 
**tax_refund_loan** | **string** | Y will be displayed    in the indicator field; if no inquiry is found for a tax refund loan inquiry from January 1 through October 17, an N will be displayed in the indicator field. | [optional] 
**trended_data** | **string** | To display Trended Data at json response in accordance with trendedData request in DaaS api. Enum - Y or N, | [optional] 
**sure_profile** | **string** | Sure profile is a new product for subscribed financial institutions. Using machine learning models to assess the overall credit health of a consumer,  Experian will guarantee three types of credit types for an approved consumer: credit card, revolving credit, and check card.  The guarantee will cover one year, and Experian will be financially liable to the issuing financial institution if the consumer fails to pay. Enum- Y, N | [optional] 
**ssn_indicators** | **string** | SSN Indicators is an optional field for DaaS api. Enum - Y or N. | [optional] 
**new_consumer** | **string** | Indicates if the consumer is new. This is an optional field for DaaS api. Enum - Y or N. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



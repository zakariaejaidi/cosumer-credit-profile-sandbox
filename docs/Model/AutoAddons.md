# AutoAddons

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_check** | **string** | Send back subscriber information on the credit profile. When set to Y indicates that subscriber and court names, addresses, and phone numbers who have reported data on the consumer&#39;s profile will be sent back on the response. | [optional] 
**demographics** | **string** | Indicates the type of demographic data that should be returned back. | [optional] 
**lift_premium** | **string** | liftPremium \&quot;type\&quot;: \&quot;string\&quot;, \&quot;pattern\&quot;: \&quot;^[A-Z]{0,1}$\&quot;, \&quot;enum\&quot;: [\&quot;Y\&quot;, \&quot;N\&quot;,\&quot;\&quot;] | [optional] 
**clarity_early_risk_score** | **string** | Y.  Returns Clarity&#39;s 90 day Clear Early Risk Score (CERS) which predict the risk of a consumer going 90 days past due in first 12 months of a traditional bureau trade. This can be omitted if Clarity Early Risk Score is not needed. | [optional] 
**clarity_data** | [**\OpenAPI\Client\Model\ClarityAccountData**](ClarityAccountData.md) |  | [optional] 
**renter_risk_score** | **string** | Y.  Returns the rent Bureau&#39;s 90 day Rent Risk Score which predict the risk of a renter going 90 days past due in first 12 months of a rental lease. This can be omitted if Renter Risk Score is not needed. | [optional] 
**rent_bureau_data** | [**\OpenAPI\Client\Model\RentBureauAccountData**](RentBureauAccountData.md) |  | [optional] 
**risk_models** | [**\OpenAPI\Client\Model\RiskModel**](RiskModel.md) |  | [optional] 
**summaries** | [**\OpenAPI\Client\Model\AddonsSummaries**](AddonsSummaries.md) |  | [optional] 
**fraud_shield** | **string** | Y - Fraud Shield Product Option will be output | [optional] 
**mla** | **string** | Y - Trigger a screening process of taking the consumer data from an inquiry to match against the Dept of Defense MLA lists. Message codes 1203-1207 could be returned. Permissible Purpose with valid YOB required for getting this option. | [optional] 
**ofacmsg** | **string** | Y- Trigger a screening process of taking the consumer data from an inquiry to match against the OFAC (Office of Foreign Asset Control) and PLC (Palestinian Legislative Council) lists. A message 1202 NAME DOES NOT MATCH OFAC/PLC LIST will be printed on credit profile if the consumer is not found on either OFAC or PLC list. A message 1200 NAME MATCHES OFAC/PLC LIST will be printed on credit profile if the consumer is found on either OFAC or PLC list. | [optional] 
**consumer_ident_check** | [**\OpenAPI\Client\Model\ConsumerIdentifierCheckOptions**](ConsumerIdentifierCheckOptions.md) |  | [optional] 
**joint** | **string** | If specified as Y it means that the client is requesting a joint credit report. This is used to request the Dual or Joint Report. Two separate credit reports are returned?one on the primary applicant and one on the secondary applicant. The joint applicant should have the same current address as the primary applicant. Include as much information on the joint applicant as possible, including the surname if it is different from the primary applicant. If NOt specified or N it means that a joint report is NOT being requested. | [optional] 
**payment_history84** | **string** | Y.  84 month payment history is requested instead of the 25 month history. This can be omitted if 84 month history is not needed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



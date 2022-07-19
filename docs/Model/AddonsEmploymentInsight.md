# AddonsEmploymentInsight

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_check** | **string** | Send back subscriber information on the credit profile. When set to Y indicates that subscriber and court names, addresses, and phone numbers who have reported data on the consumer&#39;s profile will be sent back on the response. | [optional] 
**demographics** | **string** | Indicates the type of demographic data that should be returned back. | [optional] 
**summaries** | [**\OpenAPI\Client\Model\AddonsSummaries**](AddonsSummaries.md) |  | [optional] 
**fraud_shield** | **string** | Y - Fraud Shield Product Option will be output | [optional] 
**ofacmsg** | **string** | Y- Trigger a screening process of taking the consumer data from an inquiry to match against the OFAC (Office of Foreign Asset Control) and PLC (Palestinian Legislative Council) lists. A message 1202 NAME DOES NOT MATCH OFAC/PLC LIST will be printed on credit profile if the consumer is not found on either OFAC or PLC list. A message 1200 NAME MATCHES OFAC/PLC LIST will be printed on credit profile if the consumer is found on either OFAC or PLC list. | [optional] 
**consumer_ident_check** | [**\OpenAPI\Client\Model\ConsumerIdentifierCheckOptionsEmpIns**](ConsumerIdentifierCheckOptionsEmpIns.md) |  | [optional] 
**payment_history84** | **string** | Y.  84 month payment history is requested instead of the 25 month history. This can be omitted if 84 month history is not needed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# ExtendedViewRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumer_pii** | [**\OpenAPI\Client\Model\PII**](PII.md) |  | 
**requestor** | [**\OpenAPI\Client\Model\Requestor**](Requestor.md) |  | 
**permissible_purpose** | [**\OpenAPI\Client\Model\PermissiblePurpose**](PermissiblePurpose.md) |  | [optional] 
**reseller_info** | [**\OpenAPI\Client\Model\Reseller**](Reseller.md) |  | [optional] 
**freeze_override** | [**\OpenAPI\Client\Model\FreezeOverride**](FreezeOverride.md) |  | [optional] 
**vendor_data** | [**\OpenAPI\Client\Model\VendorData**](VendorData.md) |  | [optional] 
**add_ons** | [**\OpenAPI\Client\Model\AddonsEVS**](AddonsEVS.md) |  | [optional] 
**custom_options** | [**\OpenAPI\Client\Model\CustomOptions**](CustomOptions.md) |  | [optional] 
**thin_file_indicator** | **string** | What is the definition of thin file for the client? 4 &#x3D; less than 5 trades (default) 3 &#x3D; less than 4 trades 2 &#x3D; less than 3 trades 1 &#x3D; less than 2 trades 0 &#x3D; no trades default value &#x3D; 4 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



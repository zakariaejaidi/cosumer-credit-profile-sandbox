# UniversalCreditReportRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumer_pii** | [**\OpenAPI\Client\Model\PII**](PII.md) |  | 
**requestor** | [**\OpenAPI\Client\Model\Requestor**](Requestor.md) |  | 
**permissible_purpose** | [**\OpenAPI\Client\Model\PermissiblePurpose**](PermissiblePurpose.md) |  | [optional] 
**reseller_info** | [**\OpenAPI\Client\Model\Reseller**](Reseller.md) |  | [optional] 
**freeze_override** | [**\OpenAPI\Client\Model\FreezeOverride**](FreezeOverride.md) |  | [optional] 
**add_ons** | [**\OpenAPI\Client\Model\Addons**](Addons.md) |  | [optional] 
**custom_options** | [**\OpenAPI\Client\Model\CustomOptions**](CustomOptions.md) |  | [optional] 
**solution_id** | **string** | Solution Id provided by Experian during the setup process. If you are setup to receive Premiers and Trended attributes, you will need to provide the solution Id in order to get back the premiers and trended attributes on the API response. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# AttributesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumer_pii** | [**\OpenAPI\Client\Model\PIIDAAS**](PIIDAAS.md) |  | 
**requestor** | [**\OpenAPI\Client\Model\Requestor**](Requestor.md) |  | 
**permissible_purpose** | [**\OpenAPI\Client\Model\PermissiblePurpose**](PermissiblePurpose.md) |  | [optional] 
**reseller_info** | [**\OpenAPI\Client\Model\Reseller**](Reseller.md) |  | [optional] 
**freeze_override** | [**\OpenAPI\Client\Model\FreezeOverride**](FreezeOverride.md) |  | [optional] 
**vendor_data** | [**\OpenAPI\Client\Model\VendorData**](VendorData.md) |  | [optional] 
**add_ons** | [**\OpenAPI\Client\Model\AddonsDaas**](AddonsDaas.md) |  | [optional] 
**custom_options** | [**\OpenAPI\Client\Model\CustomOptions**](CustomOptions.md) |  | [optional] 
**solution_id** | **string** | SolutionId provided by Experian during the setup process used for the RR- keyword.  Tells DaaS system how to route to the correct processing environment, which will process your request. | 
**verify_id** | **string** | verifyId provided by Experian during the setup process used for the verify- keyword.  Tells DaaS system how to format the response. | [optional] 
**daas_reference_id** | **string** | daasReferenceId provided by Experian during the setup process used for m- keyword.  Tells DaaS system which DaaS Products you are requesting. | [optional] 
**info_id1** | [**\OpenAPI\Client\Model\InfoId1**](InfoId1.md) |  | [optional] 
**info_id2** | [**\OpenAPI\Client\Model\InfoId2**](InfoId2.md) |  | [optional] 
**info_id3** | [**\OpenAPI\Client\Model\InfoId3**](InfoId3.md) |  | [optional] 
**info_id4** | [**\OpenAPI\Client\Model\InfoId4**](InfoId4.md) |  | [optional] 
**info_id5** | [**\OpenAPI\Client\Model\InfoId5**](InfoId5.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



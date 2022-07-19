# FraudShieldRespDaas

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_count** | **string** | Number of times the address was used in the last 90-120 days | [optional] 
**address_date** | **string** | Format &#x3D; MMDDCCYY. Date when address counter accumulation started. | [optional] 
**address_error_code** | **string** | Address Error Code if applicable. | [optional] 
**address_error_code_text** | **string** | Verbose mapping for addressErrorCode | [optional] 
**date_of_birth** | **string** | Format &#x3D; MMDDCCYY | [optional] 
**date_of_death** | **string** | Format &#x3D; MMDDCCYY | [optional] 
**fraud_shield_indicators** | [**\OpenAPI\Client\Model\FraudShieldIndicators**](FraudShieldIndicators.md) |  | [optional] 
**sic** | **string** | Group Identifiers if applicable. | [optional] 
**sic_text** | **string** | Verbose mapping for sic | [optional] 
**social_count** | **string** | Number of times the social was used in the last 90-120 days. | [optional] 
**social_date** | **string** | Date posted when social counter accumulation started. Format &#x3D; MMDDCCYY. | [optional] 
**social_error_code** | **string** | Social error code if applicable. | [optional] 
**social_error_code_text** | **string** | Verbose mapping for socialErrorCode | [optional] 
**ssn_first_possible_issuance_year** | **string** | First year possible for SSN issuance (YYYY). | [optional] 
**ssn_last_possible_issuance_year** | **string** | Last year possible for SSN issuance (YYYY). | [optional] 
**text** | **string** | Shield message. | [optional] 
**type** | **string** | Fraud Shield Record Type | [optional] 
**type_text** | **string** | Verbose mapping for type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



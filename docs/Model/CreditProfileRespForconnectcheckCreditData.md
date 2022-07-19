# CreditProfileRespForconnectcheckCreditData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**header_record** | [**\OpenAPI\Client\Model\HeaderRecordResp[]**](HeaderRecordResp.md) | Header Record. | [optional] 
**address_information** | [**\OpenAPI\Client\Model\AddressInformationResp[]**](AddressInformationResp.md) | Best Consumer Addresses | [optional] 
**connect_check** | [**\OpenAPI\Client\Model\ConnectCheckResp[]**](ConnectCheckResp.md) | Utility connection credit information. | [optional] 
**connect_check_gen3_inquiry_data** | [**\OpenAPI\Client\Model\ConnectCheckGen3InquiryDataResp[]**](ConnectCheckGen3InquiryDataResp.md) | Utility connection credit information. Generation 3 Connect Check Inquiry Data. | [optional] 
**connect_check_gen3_trade_line** | [**\OpenAPI\Client\Model\ConnectCheckGen3TradeLineResp[]**](ConnectCheckGen3TradeLineResp.md) | Utility connection credit information. Generation 3 Connect Check Trade Line. | [optional] 
**consumer_assistance_referral_address** | [**\OpenAPI\Client\Model\ConsumerAssistanceReferralAddress**](ConsumerAssistanceReferralAddress.md) |  | [optional] 
**consumer_identity** | [**\OpenAPI\Client\Model\ConsumerIdentity**](ConsumerIdentity.md) |  | [optional] 
**direct_check** | [**\OpenAPI\Client\Model\DirectCheckResp[]**](DirectCheckResp.md) | Subscriber Information of subscriber codes shown on credit profile. Present when direct check is requested on input or via subcode option. | [optional] 
**employment_information** | [**\OpenAPI\Client\Model\EmploymentInformationResp[]**](EmploymentInformationResp.md) | Best Consumer Employments. | [optional] 
**fraud_shield** | [**\OpenAPI\Client\Model\FraudShieldResp[]**](FraudShieldResp.md) | Fraud Shield information when requested on input or via subcode. | [optional] 
**informational_message** | [**\OpenAPI\Client\Model\InformationalMessageResp[]**](InformationalMessageResp.md) | informational messages for request and response scenarios. e.g. if a product option requested is NOT setup for the subcode, response will reflect a warning. | [optional] 
**inquiry** | [**\OpenAPI\Client\Model\InquiryResp[]**](InquiryResp.md) | Onfile Inquiries for the consumer. | [optional] 
**mla** | [**\OpenAPI\Client\Model\MlaResp**](MlaResp.md) |  | [optional] 
**ofac** | [**\OpenAPI\Client\Model\OfacResp**](OfacResp.md) |  | [optional] 
**summaries** | [**\OpenAPI\Client\Model\Summary[]**](Summary.md) |  | [optional] 
**public_record** | [**\OpenAPI\Client\Model\PublicRecordResp[]**](PublicRecordResp.md) | Bankruptcy, Lien and Civil Action public records for Consumer. | [optional] 
**risk_model** | [**\OpenAPI\Client\Model\RiskModelResp[]**](RiskModelResp.md) | Risk Models present when requested via input or subscriber code. | [optional] 
**ssn** | [**\OpenAPI\Client\Model\SsnResp[]**](SsnResp.md) | Consumer&#39;s profile SSN. | [optional] 
**statement** | [**\OpenAPI\Client\Model\StatementResp[]**](StatementResp.md) | Consumer Statements present onfile. | [optional] 
**tradeline** | [**\OpenAPI\Client\Model\TradelineRespConne[]**](TradelineRespConne.md) | Consumer tradeline information. | [optional] 
**unique_consumer_identifier** | [**\OpenAPI\Client\Model\UniqueConsumerIdentifier**](UniqueConsumerIdentifier.md) |  | [optional] 
**end_totals** | [**\OpenAPI\Client\Model\EndTotalsResp[]**](EndTotalsResp.md) | Trailer Record | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# OpenAPI\Client\ConsumerServicesApi

All URIs are relative to *https://sandbox-us-api.experian.com/consumerservices/credit-profile*

Method | HTTP request | Description
------------- | ------------- | -------------
[**automotiveCreditProfileData**](ConsumerServicesApi.md#automotiveCreditProfileData) | **POST** /v1/automotive-credit | Automotive Credit Profile
[**connctCheckCreditProfileData**](ConsumerServicesApi.md#connctCheckCreditProfileData) | **POST** /v1/connect-check | Connect Check Credit Profile
[**creditReports**](ConsumerServicesApi.md#creditReports) | **POST** /v2/credit-report | Credit Report
[**employmentInsightData**](ConsumerServicesApi.md#employmentInsightData) | **POST** /v1/employment-insight | Employment Insight
[**extendedViewAttributesAndScore**](ConsumerServicesApi.md#extendedViewAttributesAndScore) | **POST** /v1/extended-view-attributes-and-score | Extended View Attributes and Score
[**extendedViewAttributesOnly**](ConsumerServicesApi.md#extendedViewAttributesOnly) | **POST** /v1/extended-view-attributes | Extended View Attributes Only
[**extendedViewScoreOnly**](ConsumerServicesApi.md#extendedViewScoreOnly) | **POST** /v1/extended-view-score | Extended View Score Only
[**healthcareCreditProfileData**](ConsumerServicesApi.md#healthcareCreditProfileData) | **POST** /v1/healthcare-credit-profile | Healthcare Credit Profile
[**tECConnctCreditProfileData**](ConsumerServicesApi.md#tECConnctCreditProfileData) | **POST** /v1/tec-connect-credit | TEC Connect Credit Profile


# **automotiveCreditProfileData**
> \OpenAPI\Client\Model\CreditProfileResponseForAutomotiveCreditData automotiveCreditProfileData($content_type, $body, $client_reference_id, $accept)

Automotive Credit Profile

The Automotive Profile Summary is geared toward helping automotive lenders' and dealers' credit decisions. This feature is available on Experian's Credit Profile and provides a fast at-a-glance analysis of a consumers automotive finance history. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","liftPremium":"string","clarityEarlyRiskScore":"string","clarityData":{"clarityAccountId":"string","clarityLocationId":"string","clarityControlFileName":"string","clarityControlFileVersion":"string"},"renterRiskScore":"string","rentBureauData":{"primaryApplRentBureauFreezePin":"string","secondaryApplRentBureauFreezePin":"string"},"riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\AutoCreditProfileRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->automotiveCreditProfileData($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->automotiveCreditProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\AutoCreditProfileRequest**](../Model/AutoCreditProfileRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForAutomotiveCreditData**](../Model/CreditProfileResponseForAutomotiveCreditData.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connctCheckCreditProfileData**
> \OpenAPI\Client\Model\CreditProfileResponseForconnectcheckcreditData connctCheckCreditProfileData($content_type, $body, $client_reference_id, $accept)

Connect Check Credit Profile

Connect Check is a custom verification process designed specifically to assist the utility, telecommunication and cable industries detect fraud and minimize risk exposure at the time of a service request. Connect Check is focused on the top 100 regulated utility and telecommunications companies that are obligated to \"serve all who apply.\" However, Connect Check can also be a valuable tool for smaller market segments. With Connect Check, service representatives, regardless of their level of credit training, can make immediate and informed service decisions while the applicant is still on the line. <br><br>  We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases.  Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","clarityEarlyRiskScore":"string","clarityData":{"clarityAccountId":"string","clarityLocationId":"string","clarityControlFileName":"string","clarityControlFileVersion":"string"},"riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string"},"paymentHistory84":"string","outputType":"string","ttyData":{"heading":"string","ttyType":"string"}},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\ConnectCreditProfileRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->connctCheckCreditProfileData($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->connctCheckCreditProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\ConnectCreditProfileRequest**](../Model/ConnectCreditProfileRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForconnectcheckcreditData**](../Model/CreditProfileResponseForconnectcheckcreditData.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditReports**
> \OpenAPI\Client\Model\CreditProfileResponseForCP creditReports($content_type, $body, $client_reference_id, $accept)

Credit Report

Retrieves a credit profile with scores and addons requested. This is CR API Version 2.<br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","liftPremium":"string","clarityEarlyRiskScore":"string","clarityAttributes":"string","clarityData":{"clarityAccountId":"string","clarityLocationId":"string","clarityControlFileName":"string","clarityControlFileVersion":"string","clarityAttributesControlFileName":"string"},"eCBSV":"string","eCBSVData":{"employerIdentificationNumber":"string","consentDate":"string","consentType":"string"},"renterRiskScore":"string","rentBureauData":{"primaryApplRentBureauFreezePin":"string","secondaryApplRentBureauFreezePin":"string"},"riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string","syntheticId":"string","taxRefundLoan":"string","sureProfile":"string","trendedData":"string","fcraAttributes":"string","outputType":"string","covidSpotlightAttributes":"string","staggSelect":"string","incomeAndEmploymentReport":"string","incomeAndEmploymentReportData":{"verifierName":"string","reportType":"string"},"mlAttributes":"string"},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\CreditProfileRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->creditReports($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->creditReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\CreditProfileRequest**](../Model/CreditProfileRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForCP**](../Model/CreditProfileResponseForCP.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employmentInsightData**
> \OpenAPI\Client\Model\CreditProfileResponseForEmploymentInsightData employmentInsightData($content_type, $body, $client_reference_id, $accept)

Employment Insight

Employment Insight, a slightly modified version of the Experian Credit Profile report, contains consumer identification, employment history, and credit information used to substantiate information during the hiring or promotion process. As a verification tool, it is used to spot inconsistencies in address and employment information, confirm Social Security numbers, and reveal other names used. Credit information provided may provide insight on an applicant's responsibility toward his/her obligations. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","summaries":{"summaryType":["string"]},"fraudShield":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string"},"paymentHistory84":"string"},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\EmploymentInsightRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->employmentInsightData($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->employmentInsightData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\EmploymentInsightRequest**](../Model/EmploymentInsightRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForEmploymentInsightData**](../Model/CreditProfileResponseForEmploymentInsightData.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendedViewAttributesAndScore**
> \OpenAPI\Client\Model\CreditProfileResponseForExtendedView extendedViewAttributesAndScore($content_type, $body, $client_reference_id, $accept)

Extended View Attributes and Score

Retrieves a credit profile with scores and addons requested. If unable to get a credit report from Experian for this consumer, then we will automatically waterfall to Extended View module for this consumer and return back the Extended View Attributes and Score. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]},"thinFileIndicator":"string"}; // \OpenAPI\Client\Model\ExtendedViewRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->extendedViewAttributesAndScore($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->extendedViewAttributesAndScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\ExtendedViewRequest**](../Model/ExtendedViewRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForExtendedView**](../Model/CreditProfileResponseForExtendedView.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendedViewAttributesOnly**
> \OpenAPI\Client\Model\CreditProfileResponseForExtendedView extendedViewAttributesOnly($content_type, $body, $client_reference_id, $accept)

Extended View Attributes Only

Retrieves a credit profile with scores and addons requested. If unable to get a credit report from Experian for this consumer, then we will automatically waterfall to Extended View module for this consumer and return back the Extended View Attributes. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]},"thinFileIndicator":"string"}; // \OpenAPI\Client\Model\ExtendedViewRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->extendedViewAttributesOnly($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->extendedViewAttributesOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\ExtendedViewRequest**](../Model/ExtendedViewRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForExtendedView**](../Model/CreditProfileResponseForExtendedView.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendedViewScoreOnly**
> \OpenAPI\Client\Model\CreditProfileResponseForExtendedView extendedViewScoreOnly($content_type, $body, $client_reference_id, $accept)

Extended View Score Only

Retrieves a credit profile with scores and addons requested. If unable to get a credit report from Experian for this consumer, then we will automatically waterfall to Extended View Scoring for this consumer and return back the Extended View Score. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]},"thinFileIndicator":"string"}; // \OpenAPI\Client\Model\ExtendedViewRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->extendedViewScoreOnly($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->extendedViewScoreOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\ExtendedViewRequest**](../Model/ExtendedViewRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForExtendedView**](../Model/CreditProfileResponseForExtendedView.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthcareCreditProfileData**
> \OpenAPI\Client\Model\CreditProfileResponseForHealthcareCreditData healthcareCreditProfileData($content_type, $body, $client_reference_id, $accept)

Healthcare Credit Profile

The Healthcare Profile is a credit profile report designed specifically for the healthcare industry. It consists of a standard credit report in which unused fields are suppressed plus an optional Healthcare Summary segment. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","liftPremium":"string","clarityEarlyRiskScore":"string","clarityData":{"clarityAccountId":"string","clarityLocationId":"string","clarityControlFileName":"string","clarityControlFileVersion":"string"},"riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\HealthcareCreditRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->healthcareCreditProfileData($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->healthcareCreditProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\HealthcareCreditRequest**](../Model/HealthcareCreditRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForHealthcareCreditData**](../Model/CreditProfileResponseForHealthcareCreditData.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tECConnctCreditProfileData**
> \OpenAPI\Client\Model\CreditProfileResponseForTECCreditData tECConnctCreditProfileData($content_type, $body, $client_reference_id, $accept)

TEC Connect Credit Profile

TEC Connect is designed to evaluate consumer risk within the telecommunications, energy and cable (TEC) space. An empirically-driven, statistically sound risk prediction model, TEC Connect leverages a consumer's actual service payment history, predicting the likelihood of serious delinquent/derogatory behavior over the next 12 months. Utilizing the latest data assets and Experian's best-in-class analytics, TEC Connect empowers lenders to set security deposits, grant firm credit offers and even pre-screen profitable consumers before the competition. TEC Connect even enables lenders to rank-order consumers by their potential risk for seriously derogatory behavior. <br><br> We are providing 10 test cases for client testing under \"Examples\" button below which include first 5 positive test cases and rest 5 negative test cases. Eg: Success_1, Failure_Invalid surname etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new OpenAPI\Client\Api\ConsumerServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Input Request format
$body = {"consumerPii":{"primaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}},"currentAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"},"previousAddress":[{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}]},"secondaryApplicant":{"name":{"lastName":"string","firstName":"string","middleName":"string","generationCode":"string"},"dob":{"dob":"string"},"ssn":{"ssn":"string"},"driverslicense":{"number":"string","state":"string"},"phone":[{"number":"string","type":"string"}],"employment":{"employerName":"string","employerAddress":{"line1":"string","line2":"string","city":"string","state":"string","zipCode":"string"}}}},"requestor":{"subscriberCode":"string"},"permissiblePurpose":{"type":"string","terms":"string","abbreviatedAmount":"string"},"resellerInfo":{"endUserName":"string"},"freezeOverride":{"primaryApplFreezeOverrideCode":"string","secondaryApplFreezeOverrideCode":"string"},"vendorData":{"vendorNumber":"string","vendorVersion":"string"},"addOns":{"directCheck":"string","demographics":"string","clarityEarlyRiskScore":"string","clarityData":{"clarityAccountId":"string","clarityLocationId":"string","clarityControlFileName":"string","clarityControlFileVersion":"string"},"renterRiskScore":"string","rentBureauData":{"primaryApplRentBureauFreezePin":"string","secondaryApplRentBureauFreezePin":"string"},"riskModels":{"modelIndicator":["string"],"scorePercentile":"string"},"summaries":{"summaryType":["string"]},"fraudShield":"string","mla":"string","ofacmsg":"string","consumerIdentCheck":{"getUniqueConsumerIdentifier":"string","verifyPrimaryConsumerIdentifier":"string","verifySecondaryConsumerIdentifier":"string"},"joint":"string","paymentHistory84":"string"},"customOptions":{"optionId":["string"]}}; // \OpenAPI\Client\Model\TecCreditProfileRequest | Consumer's PII , Requestor Information, Addons and any custom options to be specified here.
$client_reference_id = 'SBMYSQL'; // string | API client generated reference Id to uniquely identify the API request.
$accept = 'application/json'; // string | Output Response format

try {
    $result = $apiInstance->tECConnctCreditProfileData($content_type, $body, $client_reference_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumerServicesApi->tECConnctCreditProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Input Request format | [default to &#39;application/json&#39;]
 **body** | [**\OpenAPI\Client\Model\TecCreditProfileRequest**](../Model/TecCreditProfileRequest.md)| Consumer&#39;s PII , Requestor Information, Addons and any custom options to be specified here. |
 **client_reference_id** | **string**| API client generated reference Id to uniquely identify the API request. | [optional] [default to &#39;SBMYSQL&#39;]
 **accept** | **string**| Output Response format | [optional] [default to &#39;application/json&#39;]

### Return type

[**\OpenAPI\Client\Model\CreditProfileResponseForTECCreditData**](../Model/CreditProfileResponseForTECCreditData.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


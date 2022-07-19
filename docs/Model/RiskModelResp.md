# RiskModelResp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evaluation** | **string** | Sign of risk score. | [optional] 
**model_indicator** | **string** | Indicates which model is being returned. | [optional] 
**score** | **string** | Present when RiskModels is requested on input or via subcode. 4 character score for the model requested. | [optional] 
**score_factors** | [**\OpenAPI\Client\Model\ScoreFactor[]**](ScoreFactor.md) | Score Factor Codes (Upto 5 items can be returned) | [optional] 
**score_percentile** | **string** | Present when ScorePercentile is requested on input and is available for a score. Nation Score Percentile. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



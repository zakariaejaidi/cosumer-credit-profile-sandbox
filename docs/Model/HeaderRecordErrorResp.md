# HeaderRecordErrorResp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hostid** | **string** | Denotes which Experian host responded to inquiry. | [optional] 
**application_id** | **string** | C &#x3D; Credit Reporting D &#x3D; Detect N &#x3D; NFD | [optional] 
**report_date** | **string** | Date inquiry reported to Experian. Format &#x3D; MMDDYY | [optional] 
**report_time** | **string** | Time inquiry reported to Experian. Format &#x3D; HHMMSS | [optional] 
**report_type** | **string** | X &#x3D; ARF Format | [optional] 
**preamble** | **string** | Consumer Assistance Preamble for area accessed. | [optional] 
**region_code** | **string** | Constant &#39;W&#39; | [optional] 
**version_no** | **string** | Experian online ARF version | [optional] 
**sur_name** | **string** | Left justified. Unused spaces are blank or nullfilled. | [optional] 
**first_name** | **string** | Left justified. First three characters only. | [optional] 
**m_keyword_length** | **string** | Indicates length of text. | [optional] 
**m_keyword_text** | **string** | Information obtained from the M-keyword used on Inquiry. The data is returned in the same format as input.  It is used as a control number for subscribers to link this response to their inquiry. | [optional] 
**y2k_reported_date** | **string** | Date of report. Format &#x3D; MMDDCCYY | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



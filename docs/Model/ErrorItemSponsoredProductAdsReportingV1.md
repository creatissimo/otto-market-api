# ErrorItemSponsoredProductAdsReportingV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | Request path that triggered the error |
**title** | **string** | HTTP status phrase |
**detail** | **string** | Human-readable explanation of the error |
**detail_structured** | **array<string,mixed>** | Machine-readable structured context (omitted when not available) | [optional]
**jsonpath** | **string** | JSONPath to the offending body field (omitted for non-body errors) | [optional]
**logref** | **string** | Correlation ID for log tracing (omitted when no X-Correlation-ID was sent) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

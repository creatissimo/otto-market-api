# PatchCampaignRequestSponsoredProductAdsV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Campaign display name. Must not contain &#x60;$&#x60;, &#x60;§&#x60;, &#x60;\&quot;&#x60;, &#x60;#&#x60;, &#x60;*&#x60;, or parentheses — except for an optional trailing numeric suffix (e.g. &#x60;My campaign (2)&#x60;). | [optional]
**start_date** | **\DateTime** | Campaign start date. Must be today or a future date. | [optional]
**end_date** | **\DateTime** | Campaign end date. Must be at least one day after today. May be &#x60;null&#x60; for ongoing campaigns; however, &#x60;null&#x60; is not allowed when &#x60;budgetType&#x60; is &#x60;LIFETIME&#x60;. | [optional]
**budget** | [**\OpenAPI\Client\Model\MonetaryAmountSponsoredProductAdsV1**](MonetaryAmountSponsoredProductAdsV1.md) |  | [optional]
**pacing** | **string** |  | [optional]
**status** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

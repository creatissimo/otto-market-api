# ChangeRequestResponseSponsoredProductAdsV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** |  |
**request_type** | **string** |  |
**status** | **string** |  |
**last_modified_at** | **\DateTime** | Timestamp of the last status change of this change request. |
**rejection_reason** | **string** | Human-readable explanation of why the request was rejected. Only present when &#x60;status&#x60; is &#x60;REJECTED&#x60;. See the &#x60;getChangeRequest&#x60; operation description for a list of common rejection reasons. | [optional]
**entity_ids** | **string[]** | IDs of the entities affected by this request. &#x60;null&#x60; for CREATE operations while still PENDING (entities not yet assigned). Populated with entity IDs once the request is ACCEPTED. | [optional]
**_links** | [**\OpenAPI\Client\Model\ChangeRequestResponseSponsoredProductAdsV1AllOfLinks**](ChangeRequestResponseSponsoredProductAdsV1AllOfLinks.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

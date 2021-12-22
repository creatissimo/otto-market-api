# # AvailableQuantityRequestDTOV2QuantitiesV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_modified** | **string** | The last modified date and time of available quantity as a ISO8601 format (yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSX). This date should not be neither in future nor older than previous lastModified value from partner. If it is future date/time, then it will lead to an error response. If it is older than previous lastModified value from partner, then the quantity update will be ignored. It is used to ensure the current status of the updated quantities. |
**quantity** | **int** | The available quantity of a specific SKU, which can be any integer value &gt;&#x3D; 0. |
**sku** | **string** | StockKeepingUnit given by partner configuration. e.g. &#39;shirt-red-M&#39;, external identifier of article variation. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

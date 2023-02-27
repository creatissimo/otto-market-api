# # ServicePositionInfoReceiptsV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | [**\OpenAPI\Client\Model\ServicePositionInfoReceiptsV2UnitPrice**](ServicePositionInfoReceiptsV2UnitPrice.md) |  |
**vat_rate** | **float** | VAT rate for the specific service |
**quantity** | **int** | Number for items which are applicable for service |
**total** | [**\OpenAPI\Client\Model\ServicePositionInfoReceiptsV2Total**](ServicePositionInfoReceiptsV2Total.md) |  |
**service_name** | **string** | Service name |
**service_type** | **string** |  | [optional]
**product_title** | **string** | Title of the linked product |
**article_number** | **string** | Article number of the linked product |
**promotion** | **string** | Promotion code of the linked product |
**service_position_items** | [**\OpenAPI\Client\Model\ServicePositionItemInfoReceiptsV2[]**](ServicePositionItemInfoReceiptsV2.md) |  |
**linked_product_receipt_number** | **string** | Human-readable identifier refers to the purchase receipt the linked item was billed. Displayed only if item is billed with another receipt. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

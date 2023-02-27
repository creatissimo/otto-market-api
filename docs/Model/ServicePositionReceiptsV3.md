# # ServicePositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt.  This information is not reliably provided for older receipts | [optional]
**service_type** | **string** | Categorization that classifies services according to their main characteristics. Services of the same type are often treated in the same way | [optional]
**expected_performance_period** | **string** | Vague performance date. As the exact date is not known when generating the receipt, this information gives an indication when the service is expected to be fulfilled | [optional]
**service_name** | **string** | Service name  the customer knows from the order process |
**service_position_item_ids** | **string[]** | List of unique identifiers of specific instances of services. A servicePositionItem is the smallest unit of a service that can be ordered. If quantity of this obejct  is bigger than one the list contains more than one entry |
**linked_item_details** | [**\OpenAPI\Client\Model\LinkedItemDetailsReceiptsV3**](LinkedItemDetailsReceiptsV3.md) |  | [optional]
**quantity** | **int** | Quantity |
**unit_price** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**position_sum** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

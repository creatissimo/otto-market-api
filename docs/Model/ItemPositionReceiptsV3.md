# # ItemPositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**sku** | **string** | Stock keeping unit of item. Unique item identifier on partner side. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**expected_performance_period** | **string** | Vague performance date. As the exact date is not known when generating the receipt, this information gives an indication when the item will be shipped | [optional]
**article_number** | **string** | Unique Identifier of item the customer knows from order process.  ATTENTION: Different from the previous version, the field also contains the promotion. In last version the promotion was provided separately |
**product_title** | **string** | Product description of item the customer knows from the order process |
**variation_attributes** | **string** | Additional attributes for unique description of an item, if different variants of the item are possible. (String of comma seperated dimensions)  ATTENTION: In previous version the information was called dimensions | [optional]
**position_item_ids** | **string[]** | List of unique identifiers of specific instances of ordered items. A (salesOrder)PositionItem is the smallest unit of an item that can be ordered. &lt;/br&gt;If quantity of the specific LineItem object is bigger than one the list contains more than one entry |
**quantity** | **int** | Quantity |
**unit_price** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**price_to_pay_per_position_items** | [**\OpenAPI\Client\Model\PriceToPayPerPositionItemReceiptsV3[]**](PriceToPayPerPositionItemReceiptsV3.md) | Price of each unit of the item i.e., price of each positionItemId.&lt;/br&gt;It will be available only for PURCHASE receipt | [optional]
**position_sum** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**price_modifications** | [**\OpenAPI\Client\Model\PriceModificationReceiptsV3[]**](PriceModificationReceiptsV3.md) | List of additional fees and reductions represented as price modifications. &lt;/br&gt;Currently we only know reductions. &lt;/br&gt;If there are no entries the list is displayed as empty |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # LinkedItemDetailsReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_receipt_number** | **string** | Human-readable identifier refers to the receipt the linked item was billed. Displayed only if item is billed with another receipt.  In case of receiptType PURCHASE it is the receiptId of purchase receipt. If this field is not present, you will find information in receipt.receiptNumber  In case of receiptType REFUND it is the receiptId of purchase receipt. If this field is not present ,you will find information in receipt.linkedReceiptNumber | [optional]
**item_partner_name** | **string** | Name of the partner who sold the linked item.   Displayed only if the partner is different from partner of the receipt | [optional]
**sku** | **string** | Stock keeping unit of the linked item. Unique item identifier on partner side | [optional]
**article_number** | **string** | Unique Identifier of linked item the customer knows from order process.  ATTENTION: Different from the previous version, the field also contains the promotion. In last version the promotion was provided separately |
**product_title** | **string** | Product description of linked item the customer knows from the order process |
**service_relations** | [**\OpenAPI\Client\Model\ServiceRelationsReceiptsV3[]**](ServiceRelationsReceiptsV3.md) | List of ServiceRelation objects.  Contains entries if services were sold  together with items otherwise list is empty |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

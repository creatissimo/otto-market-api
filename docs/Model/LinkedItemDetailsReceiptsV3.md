# # LinkedItemDetailsReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_receipt_number** | **string** | Human-readable identifier refers to the receipt the linked item was billed. &lt;/br&gt; Displayed only if item is billed with another receipt. &lt;/br&gt; In case of receiptType * **PURCHASE** - **receiptNumber of purchase receipt**.&lt;/br&gt; If this field is not present, you will find information in receipt.receiptNumber * **REFUND** - **receiptNumber of purchase receipt**. &lt;/br&gt; If this field is not present ,you will find information in receipt.linkedReceiptNumber | [optional]
**item_partner_name** | **string** | Name of the partner who sold the linked item. &lt;/br&gt;Displayed only if the partner is different from partner of the receipt | [optional]
**sku** | **string** | Stock keeping unit of the linked item. Unique item identifier on partner side &lt;/br&gt;This information is not reliably provided for older receipts. | [optional]
**article_number** | **string** | Unique Identifier of linked item the customer knows from order process.  ATTENTION: Different from the previous version, the field also contains the promotion. In last version the promotion was provided separately |
**product_title** | **string** | Product description of linked item the customer knows from the order process |
**service_relations** | [**\OpenAPI\Client\Model\ServiceRelationReceiptsV3[]**](ServiceRelationReceiptsV3.md) | List of ServiceRelation objects. &lt;/br&gt;Contains entries if services were sold  together with items otherwise list is empty |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # PriceModificationReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;On the pdf documents increases and decreases do not necessarily have to be shown on the same line. If there is a discrepancy, it is visible by different line numbers of this object and the parent line item object &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**price_modification_type** | **string** | This type describes the special increases or decreases in detail and how to deal with it.  The following priceModificationTypes are possible: * **PARTNER_DISCOUNT** - Partner-financed immediate discount granted to the customer at the time of purchase.&lt;/br&gt;Reduction of parent object item position on PURCHASE and REFUND receipt * **DEFECT_COMPENSATION**_/_**REFUND_COMPLAINT_ITEM** - Partial refund already refunded by a partial refund receipt to compensate a defect.&lt;/br&gt;Reduction of parent object item position on REFUND receipt * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment.&lt;/br&gt;Reduction of parent object item or service position on REFUND receipt * **REFUND_ESCALATION** - Refund already refunded by a partial refund receipt due to an escalation.&lt;/br&gt;Reduction of parent object item position on REFUND receipt * **REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION** - A partial refund already refunded after service could not fulfilled completely.&lt;/br&gt;Reduction of parent object item and service position on REFUND receipt |
**details** | [**\OpenAPI\Client\Model\DetailsReceiptsV3**](DetailsReceiptsV3.md) |  |
**price_modification_amount** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ReceiptReceiptsV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Special type of receipt. Needed to make a distinction between different type of receipts |
**original_receipt_number** | **string** | Unique identifier of the corresponding purchase receipt with which the reimbursed position item was billed. Only filled in case of refund or partial refund receipts. Printed on the purchase receipt and used to identified the corresponding purchase receipt. | [optional]
**original_creation_date** | **\DateTime** | Creation date of the corresponding purchase receipt. This is not available for purchase receipt. | [optional]
**receipt_number** | **string** | Unique identifier of a receipt. Printed on the receipt and used to identified the receipt in case of contact to user and partner. |
**sales_order_id** | **string** | Reference to the sales order with that the order was placed. Taken from corresponding sales order. |
**order_number** | **string** | The human-readable sales order number taken from corresponding sales order. Printed on the receipt. |
**url** | **string** | API call to get corresponding PDF receipts, if available. | [optional]
**creation_date** | **\DateTime** | Date and time when receipt is created by system. |
**order_date** | **\DateTime** | Date and time when the corresponding order was placed. |
**shipment_date** | **\DateTime** | Date and time when the position items handed over to the carrier for delivery to the customer. Only available for purchase receipts. | [optional]
**payment_method** | **string** | Payment method used by the customer to pay for this order. |
**payment_provider** | **string** | Possible values can be \&quot;OTTOPAYMENTS\&quot; or \&quot;PLAZA\&quot;, where \&quot;PLAZA\&quot; means it can be Computop for \&quot;Kreditkarte\&quot; or otherwise it is Ratepay. | [optional]
**partner** | [**\OpenAPI\Client\Model\PartnerReceiptsV2**](PartnerReceiptsV2.md) |  |
**customer** | [**\OpenAPI\Client\Model\CustomerReceiptsV2**](CustomerReceiptsV2.md) |  |
**delivery_address** | [**\OpenAPI\Client\Model\DeliveryAddressReceiptsV2**](DeliveryAddressReceiptsV2.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItemReceiptsV2[]**](LineItemReceiptsV2.md) | List of specific position item ids of the order billed or reimbursed.In case of service only purchase/refund receipt and shipping cost only refund receipt, the list can be empty. | [optional]
**service_positions** | [**\OpenAPI\Client\Model\ServicePositionInfoReceiptsV2[]**](ServicePositionInfoReceiptsV2.md) |  | [optional]
**shipping_cost** | [**\OpenAPI\Client\Model\ShippingCostReceiptsV2**](ShippingCostReceiptsV2.md) |  | [optional]
**total** | [**\OpenAPI\Client\Model\TotalReceiptsV2**](TotalReceiptsV2.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

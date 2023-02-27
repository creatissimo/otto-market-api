# # ReceiptReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_type** | **string** | Categorisation that classifies the receipts according to the main characteristics |
**is_real_receipt** | **bool** | Counterpart to the sentence \&quot;Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\&quot; on pdf document. Set to true since real customer invoices/refunds for shipments to locations in domestic tax territory are created. Set to false for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen |
**receipt_number** | **string** | Human readable identifier of a receipt known by customer. Guaranteed to be unique per partner |
**creation_date** | **\DateTime** | Date when receipt is created by system |
**sales_order_id** | **string** | Technical identifier of corresponding sales order |
**order_number** | **string** | Order number of corresponding sales order |
**order_date** | **\DateTime** | Order date of corresponding sales order (UTC in ISO-8601 format) |
**shipment_date** | **\DateTime** | Date when physical items of this receipt were handed over to the carrier to be delivered to the customer (UTC in ISO-8601 format). Only available on receipts of receiptType PURCHASE. | [optional]
**linked_receipt_number** | **string** | Human-readable identifier of linked receipt. In case of receiptType PARTIAL_REFUND or REFUND it is the receiptINumber of purchase receipt.  ATTENTION: In previous version the information was called originalReceiptNumber | [optional]
**linked_creation_date** | **\DateTime** | Creation date of linked receipt (UTC in ISO-8601 format). Only available if there is a linked receipt.  ATTENTION: In previous version the information was called originalCreatedDate | [optional]
**payment** | [**\OpenAPI\Client\Model\PaymentReceiptsV3**](PaymentReceiptsV3.md) |  |
**partner** | [**\OpenAPI\Client\Model\PartnerReceiptsV3**](PartnerReceiptsV3.md) |  |
**customer** | [**\OpenAPI\Client\Model\CustomerReceiptsV3**](CustomerReceiptsV3.md) |  |
**delivery_address** | [**\OpenAPI\Client\Model\AddressReceiptsV3**](AddressReceiptsV3.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItemsReceiptsV3**](LineItemsReceiptsV3.md) |  |
**totals** | [**\OpenAPI\Client\Model\PriceReceiptsV3[]**](PriceReceiptsV3.md) | Total amounts of receipt per tax type and tax rate |
**amount_due** | [**\OpenAPI\Client\Model\ReceiptReceiptsV3AmountDue**](ReceiptReceiptsV3AmountDue.md) |  |
**totals_gross_amount** | [**\OpenAPI\Client\Model\ReceiptReceiptsV3TotalsGrossAmount**](ReceiptReceiptsV3TotalsGrossAmount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

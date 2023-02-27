# # DetailsReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Additional info often printed on the pdf for a PriceModification object (on German receipts always in German) |
**id** | **string** | Discount code applied to the order to get a reduction. Available when reduction is of type PARTNER_DISCOUNT or MARKETPLACE_FINANCED_DISCOUNT | [optional]
**linked_receipt_number** | **string** | Allows to link an earlier purchase or (partial)refund receipt by human-readable identifier.  If PriceModification object is of type: DEFECT_COMPENSATION: In case of previous (partial) refunds this field contains the human-readable identifier of the partial refund with which the previous refund was made | [optional]
**linked_receipt_creation_date** | **\DateTime** | Allows to show creation date of linked earlier purchase or (partial)refund receipt.  If PriceModification object is of type: DEFECT_COMPENSATION: In case of previous (partial) refunds this field contains the creation date of linked receipt with which the previous refund was made. (ISO-8601 format) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

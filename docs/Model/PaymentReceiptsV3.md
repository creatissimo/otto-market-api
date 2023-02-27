# # PaymentReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_provider** | **string** | Payment Provider chosen for the order |
**payment_method** | **string** | Payment method chosen by the customer to pay for this order |
**installment_count** | **int** | For payment methods with installments, this attribute indicates how many installments the customer has chosen when placing the order.  Only available on receipts of receiptType PURCHASE. This information is not reliably provided for older receipts | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

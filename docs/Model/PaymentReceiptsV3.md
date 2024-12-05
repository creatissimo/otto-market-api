# # PaymentReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_provider** | **string** | Payment Provider chosen for the order. &lt;/br&gt; Possible values: * **PLAZA** -  Ratepay * **OTTOPAYMENTS** - OTTO Payments |
**payment_method** | **string** | Payment method chosen by the customer to pay for this order.  Possible values: * **INVOICE_SINGLE / INVOICE_INSTALLMENT** - payment on invoice (with or without installments) * **DIRECT_DEBIT / DIRECT_DEBIT_INSTALLMENTS** - payment by direct debit (with or without installments) * **PREPAYMENT** - payment by prepayment * **PAYPAL** - payment by PayPal * **CREDIT_CARD** - payment by credit or debit card  (only applicable for paymentProvider &#x3D; OTTOPAYMENTS) * **CREDIT_CARD_ONLINE** - payment by credit card  (only applicable for old paymentProvider &#x3D; PLAZA) |
**installment_count** | **int** | For payment methods with installments, this attribute indicates how many installments the customer has chosen when placing the order. &lt;/br&gt;Only available on receipts of receiptType PURCHASE. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**payment_break** | **bool** | The field indicates whether customer has chosen paymentBreak &lt;ul&gt;&lt;li&gt;Set to &lt;b&gt;true&lt;/b&gt;, if customer has chose paymentBreak&lt;/li&gt;&lt;li&gt;Set to &lt;b&gt;false&lt;/b&gt;, if customer hasn’t chosen paymentBreak&lt;/li&gt;&lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

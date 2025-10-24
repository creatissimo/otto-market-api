# # PartnerOrderOrdersV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_address** | [**\Otto\Client\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**initial_delivery_fees** | [**\Otto\Client\Model\InitialDeliveryFeeOrdersV4[]**](InitialDeliveryFeeOrdersV4.md) | The delivery fees on customer checkout | [optional]
**initial_discounts** | [**\Otto\Client\Model\InitialDiscountOrdersV4[]**](InitialDiscountOrdersV4.md) | The initial discounts on customer checkout | [optional]
**invoice_address** | [**\Otto\Client\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**last_modified_date** | **\DateTime** | Last order update date | [optional]
**links** | [**\Otto\Client\Model\LinkOrdersV4[]**](LinkOrdersV4.md) | Order related links like the link to fetch the single partner order | [optional]
**order_date** | **\DateTime** | The date, when this order has been placed |
**order_lifecycle_information** | [**\Otto\Client\Model\OrderLifecycleInformationOrdersV4**](OrderLifecycleInformationOrdersV4.md) |  |
**order_number** | **string** | The order number. An unique human readable 10 character(alphanumeric) identifier referring to this order |
**payment** | [**\Otto\Client\Model\PaymentOrdersV4**](PaymentOrdersV4.md) |  | [optional]
**position_items** | [**\Otto\Client\Model\PositionItemOrdersV4[]**](PositionItemOrdersV4.md) | The physical position items of this order. Multiple position item can refer to the same product |
**sales_order_id** | **string** | The id of the corresponding sales order. For one partner the sales order id is unique |
**suspected_fraud_case** | **bool** | Order is suspected fraud case or not | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

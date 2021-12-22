# # PartnerOrderOrdersV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sales_order_id** | **string** | The id of the corresponding sales order. For one partner the sales order id is unique |
**order_number** | **string** | The order number. An unique human readable 10 character(alphanumeric) identifier referring to this order |
**order_date** | **\DateTime** | The date, when this order has been placed |
**last_modified_date** | **\DateTime** | Last order update date | [optional]
**position_items** | [**\OpenAPI\Client\Model\PositionItemOrdersV4[]**](PositionItemOrdersV4.md) | The physical position items of this order. Multiple position item can refer to the same product |
**order_lifecycle_information** | [**\OpenAPI\Client\Model\OrderLifecycleInformationOrdersV4**](OrderLifecycleInformationOrdersV4.md) |  |
**initial_delivery_fees** | [**\OpenAPI\Client\Model\InitialDeliveryFeeOrdersV4[]**](InitialDeliveryFeeOrdersV4.md) | The delivery fees on customer checkout | [optional]
**initial_discounts** | [**\OpenAPI\Client\Model\InitialDiscountOrdersV4[]**](InitialDiscountOrdersV4.md) | The initial discounts on customer checkout | [optional]
**delivery_address** | [**\OpenAPI\Client\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**invoice_address** | [**\OpenAPI\Client\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**payment** | [**\OpenAPI\Client\Model\PaymentOrdersV4**](PaymentOrdersV4.md) |  | [optional]
**links** | [**\OpenAPI\Client\Model\LinkOrdersV4[]**](LinkOrdersV4.md) | Order related links like the link to fetch the single partner order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # PositionItemOrdersV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position_item_id** | **string** | The unique id of the position item |
**fulfillment_status** | **string** | The fulfillment status of the position item |
**delivery_service_hes** | **bool** | Position item has delivery service HES | [optional]
**item_value_gross_price** | [**\OpenAPI\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  |
**item_value_reduced_gross_price** | [**\OpenAPI\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional]
**item_value_discount** | [**\OpenAPI\Client\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\ProductOrdersV4**](ProductOrdersV4.md) |  |
**tracking_info** | [**\OpenAPI\Client\Model\TrackingInfoOrdersV4**](TrackingInfoOrdersV4.md) |  | [optional]
**expected_delivery_date** | **\DateTime** | The date the position item should be delivered | [optional]
**sent_date** | **\DateTime** | Date the position item was sent | [optional]
**returned_date** | **\DateTime** | Date the position item was returned | [optional]
**cancellation_date** | **\DateTime** | Date the position item was cancelled | [optional]
**cancellation_reason** | **string** | Reason why a position was cancelled | [optional]
**processable_date** | **\DateTime** | Date the position item has reached PROCESSABLE fulfillment status | [optional]
**weee_pickup** | **bool** | Position item has electrical and electronic equipment disposal service (WEEE) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

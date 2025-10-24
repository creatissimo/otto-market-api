# # ShipmentShipmentsV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | Internal shipment identifier assigned by OTTO Market. | [optional]
**creation_date** | **string** |  | [optional]
**tracking_key** | [**\Otto\Client\Model\TrackingKeyShipmentsV1**](TrackingKeyShipmentsV1.md) |  | [optional]
**ship_date** | **string** |  | [optional]
**ship_from_address** | [**\Otto\Client\Model\AddressShipmentsV1**](AddressShipmentsV1.md) |  | [optional]
**position_items** | [**\Otto\Client\Model\PositionItemShipmentsV1[]**](PositionItemShipmentsV1.md) | The position items included in the shipment. | [optional]
**states** | [**\Otto\Client\Model\ShipmentStateShipmentsV1[]**](ShipmentStateShipmentsV1.md) | The history of tracking states of the shipment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

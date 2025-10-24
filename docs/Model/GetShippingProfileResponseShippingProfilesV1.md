# # GetShippingProfileResponseShippingProfilesV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_profile_id** | **string** | Unique identifier for each shipping profile |
**shipping_profile_name** | **string** | The name of the shipping profile |
**working_days** | **string[]** | The days of the week on which the partner is available to process orders |
**order_cutoff** | **string** | OrderCutoff specifies the time for orders to be placed, so the ProcessingTime starts within the same day. &lt;br&gt; This must be in half hour duration in (HH:MM) 24 hours format and in CET time. |
**delivery_type** | **string** | DeliveryType describes how the product is being shipped. At the moment we support the enums shown above |
**default_processing_time** | **int** | DefaultProcessingTime describes the time the partner needs to prepare the order for a shipment. |
**transport_time** | **int** | The time the carrier needs from collecting the order from partners warehouse till the first delivery attempt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ReturnsWarehouseAddressRequestReturnsWarehouseV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_warehouse_type** | **string** | The field is case sensitive and defines the type of returnWarehouse. If returnWarehouseType is NATIONAL then returnCountry should be Germany (case insensitive). If returnWarehouseType is INTERNATIONAL then the returnCountry should be Italy, Poland, Czechia, Netherlands, France, Austria, Spain, or Denmark (case insensitive). If returnWarehouseType is INTERNATIONAL_CONSOLIDATION_HUB then returnCountry should be Germany (case insensitive). |
**is_misdirected_address** | **bool** | Flag to indicate whether the returnWarehouse is a misdirected address or not. One address should be marked as &#39;isMisdirectedAddress&#39; to handle misdirected returns. Default value is false. | [optional]
**return_recipient** | **string** | Return recipient of the returnWarehouse. |
**return_recipient_suffix** | **string** | Return recipient suffix of the returnWarehouse | [optional]
**is_business_address** | **bool** | Flag to indicate whether the returnWarehouse is a business address or not.Required field if returnWarehouseType&#x3D;NATIONAL. | [optional]
**return_street** | **string** | Return street name of the returnWarehouse, required field if isBusinessAddress&#x3D;false or returnWarehouseType&#x3D;INTERNATIONAL. | [optional]
**return_house_number** | **string** | Return House number of the returnWarehouse, required field if isBusinessAddress&#x3D;false or returnWarehouseType&#x3D;INTERNATIONAL. | [optional]
**return_zip_code** | **string** | Return Zip code of the returnWarehouse, required field if returnWarehouseType&#x3D;INTERNATIONAL or NATIONAL. | [optional]
**return_city** | **string** | Return City Name of the returnWarehouse, required field if returnWarehouseType&#x3D;INTERNATIONAL or NATIONAL. | [optional]
**return_country** | **string** | Country of the return address. For returnWarehouseType&#x3D;NATIONAL, this should be Germany (case insensitive). For returnWarehouseType&#x3D;INTERNATIONAL, this should be one of Italy, Poland, Czechia, Netherlands, France, Austria, Spain, or Denmark (case insensitive). For returnWarehouseType&#x3D;INTERNATIONAL_CONSOLIDATION_HUB, this should be Germany (case insensitive). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

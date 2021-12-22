# # AttributeDefinitionProductsV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | the name of the attribute. This attribute name has to be used within the product description. | [optional]
**attribute_group** | **string** | title of the attributes displayed in the product details in the shop. | [optional]
**type** | **string** | defines the format of the attribute value, such as string, integer, etc. | [optional]
**multi_value** | **bool** | if the value is true, several values can be transferred to this attribute (polyvalence attribute); otherwise, only a single value may be transferred to this attribute. | [optional]
**unit** | **string** | the values must be transferred in the specified unit. | [optional]
**unit_display_name** | **string** | the value gets displayed with this unit in the shop. | [optional]
**allowed_values** | **string[]** | only the listed values are permitted for the attribute. | [optional]
**feature_relevance** | **string[]** | describes what the attribute can be used for and where it gets displayed in the shop. | [optional]
**related_media_assets** | **string[]** | mandatory media assets for the category | [optional]
**relevance** | **string** | the relevance of the attribute. | [optional]
**description** | **string** | additional information for the attribute. | [optional]
**example_values** | **string[]** | example values for the attribute. | [optional]
**recommended_values** | **string[]** | use the listed values to get full navigation and filter features on otto.de. If no suitable value exists, then enter your own value. | [optional]
**reference** | **string** | reference to further documentation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

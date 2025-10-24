# # FoodInformationAddressProductsV5

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The company name of the food or animal feed business operator. Maximum length: 100 characters. |
**address** | **string** | The complete address including street, postal code, city, country. Without any formatting, with comma separation, no line breaks. Maximum length: 200 characters. |
**region_code** | **string** | Allowed values are all country codes in ISO-3166 Alpha-2 format. Important for validation of the address. | [optional]
**email** | **string** | A valid and complete email address. Maximum length: 100 characters. | [optional]
**url** | **string** | Valid URL to the contact information of the food or animal feed business operator (see http://www.ietf.org/rfc/rfc2396.txt and http://www.ietf.org/rfc/rfc2732.txt). Maximum length: 200 characters. | [optional]
**phone** | **string** | A valid phone number. Maximum length: 20 characters. | [optional]
**roles** | [**\Otto\Client\Model\FoodInformationAddressRoleProductsV5[]**](FoodInformationAddressRoleProductsV5.md) | The role of the business operator to which the address belongs. Allowed values are &#39;FOOD_BUSINESS_OPERATOR&#39; or &#39;FEED_BUSINESS_OPERATOR&#39;. Every variation within a product must have the same role. |
**components** | **string[]** | Can be used in the case of set products for the correct assignment of addresses to set components, e.g. use components “Salad” and “Dressing” when selling a set of both. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

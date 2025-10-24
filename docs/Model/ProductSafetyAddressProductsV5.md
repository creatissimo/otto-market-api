# # ProductSafetyAddressProductsV5

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The company name of the manufacturer or the distributor. Maximum length: 100 characters. |
**address** | **string** | The complete address including street, postal code, city, country. Without any formatting, comma separation, no line breaks. Maximum length: 200 characters. |
**region_code** | **string** | Allowed values are all country codes in ISO-3166 Alpha-2 format. Important for validation of the address. | [optional]
**email** | **string** | A valid and complete email address. Maximum length: 100 characters. **Mandatory** if no URL is specified. | [optional]
**url** | **string** | Valid URL to the contact information of the manufacturer or distributor (see http://www.ietf.org/rfc/rfc2396.txt and http://www.ietf.org/rfc/rfc2732.txt). Maximum length: 200 characters. **Mandatory** if no email is specified. | [optional]
**phone** | **string** | A valid phone number. Maximum length: 20 characters. | [optional]
**roles** | [**\Otto\Client\Model\ProductSafetyAddressRoleProductsV5[]**](ProductSafetyAddressRoleProductsV5.md) | The role(s) of the economic agent to which the address belongs. Allowed values are &#39;DISTRIBUTOR&#39; and &#39;MANUFACTURER&#39;. At least one distributor must be specified. |
**components** | **string[]** | Can be used in the case of set products for the correct assignment of addresses to set components, e.g. use components “mouse” and “keyboard” when selling a set of both. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

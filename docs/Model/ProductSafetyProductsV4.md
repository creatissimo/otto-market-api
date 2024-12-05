# # ProductSafetyProductsV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The company name of the manufacturer or the importer placing the product into the European Economic Area (EEA) with a maximum length of 100 characters. |
**address** | **string** | The complete address including street, postal code, city, country, without any formatting, comma separation, no line breaks, with a maximum length of 200 characters. |
**region_code** | **string** | Allowed values are the country codes of the European Economic Area (EEA) members in ISO-3166 Alpha-2 format. Important for validation of the address. | [optional]
**email** | **string** | A valid and complete email address with a maximum length of 100 characters. **Mandatory** if no url is specified. | [optional]
**url** | **string** | Valid URL (see http://www.ietf.org/rfc/rfc2396.txt and http://www.ietf.org/rfc/rfc2732.txt) with a maximum length of 200 characters to the contact information of the manufacturer or importer. **Mandatory** if no email is specified. | [optional]
**phone** | **string** | A valid phone number with a maximum length of 20 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

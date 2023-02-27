# # AddressReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | First name of person or name of a pick point |
**last_name** | **string** | Last name of a person or a pick point id |
**street** | **string** | Street of address.  For sales orders were  placed before 23rd Sep. 2021 street and house number are both parts of this field |
**house_number** | **string** | House number of  address  Available for sales orders placed after 23rd Sep. 2021. For older sales orders the house number is part of the field street and this field is not shown at all | [optional]
**addition** | **string** | Additional information of the address  Can be used to provide additional information of address | [optional]
**zip_code** | **string** | Zip code of address |
**city** | **string** | City of address |
**country_code** | **string** | Country of address represented as country code (ISO 3166-1 alpha-3) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

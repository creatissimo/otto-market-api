# # MonetaryAmountProductsV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Holds the value of the monetary amount expressed in a currency, e.g. euros. The number format expects a decimal point, like 10.99. Numbers without a decimal point are taken as a unit of the given currency, e.g. 10 is taken as 10 euros. The value has to have no more than 2 decimal places. If you specify more decimal places, the product variation will be rejected. The same applies, if you use other characters than digits and an optional decimal point, e.g. &#39;2E+4&#39; | [optional]
**currency** | **string** | Holds the currency of the monetary amount expressed as a shortcut according to ISO 4217 and http://publications.europa.eu/code/de/de-5000700.htm. NOTE: Currently the only allowed currency code is \&quot;EUR\&quot;. All other currency codes will be rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

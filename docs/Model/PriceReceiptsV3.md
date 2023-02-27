# # PriceReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | The fields indicates what kind of tax the price object includes |
**tax_rate** | **string** | Applied tax rate, if there is any. Currently the entry can only be a decimal numbers. In future it&#39;s maybe also possible to have an expression such as \&quot;NON_TAXABLE\&quot;, so we decided for a representation as string |
**gross** | [**\OpenAPI\Client\Model\PriceReceiptsV3Gross**](PriceReceiptsV3Gross.md) |  |
**net** | [**\OpenAPI\Client\Model\PriceReceiptsV3Net**](PriceReceiptsV3Net.md) |  | [optional]
**tax** | [**\OpenAPI\Client\Model\PriceReceiptsV3Tax**](PriceReceiptsV3Tax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

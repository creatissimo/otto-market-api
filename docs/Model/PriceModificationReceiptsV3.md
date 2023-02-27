# # PriceModificationReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt.  On the pdf documents increases and decreases do not necessarily have to be shown on the same line. If there is a discrepancy, it is visible by different line numbers of this object and the parent line item object  This information is not reliably provided for older receipts | [optional]
**price_modification_type** | **string** | This type describes the special increases or decreases in detail and how to deal with it |
**details** | [**\OpenAPI\Client\Model\DetailsReceiptsV3**](DetailsReceiptsV3.md) |  |
**price_modification_amount** | [**\OpenAPI\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ProductProcessProgressProductsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | the current state of the process | [optional]
**message** | **string** | a human-readable message describing the current state of the process | [optional]
**total** | **int** | the total work to complete for this process | [optional]
**progress** | **int** | the fraction of work that is already completed, as compared to the total work | [optional]
**succeeded** | **int** | the number of successfully processed variations | [optional]
**failed** | **int** | the number of failed processed variations | [optional]
**unchanged** | **int** | the number of unchanged and not processed variations | [optional]
**ping_after** | **\DateTime** | recommendation when to poll this resource again to receive a meaningful update | [optional]
**links** | [**\OpenAPI\Client\Model\ProductProcessResultLinkProductsV3[]**](ProductProcessResultLinkProductsV3.md) | a list of links that can be used to access detailed information about the process result | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

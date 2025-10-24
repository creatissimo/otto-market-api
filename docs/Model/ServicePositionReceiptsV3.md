# # ServicePositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_number** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**service_type** | **string** | Categorization that classifies services according to their main characteristics. Services of the same type are often treated in the same way. Currently, the processing of the following types are possible: * **DISPOSAL** - Free take away of old technical devices required by law * **INSURANCE** - Product insurance | [optional]
**expected_performance_period** | **string** | Vague performance date. &lt;/br&gt;As the exact date is not known when generating the receipt, this information gives an indication when the service is expected to be fulfilled | [optional]
**service_name** | **string** | Service name  the customer knows from the order process |
**service_position_item_ids** | **string[]** | List of unique identifiers of specific instances of services. &lt;/br&gt;A servicePositionItem is the smallest unit of a service that can be ordered. &lt;/br&gt;If quantity of this object is bigger than one, the list contains more than one entry |
**linked_item_details** | [**\Otto\Client\Model\LinkedItemDetailsReceiptsV3**](LinkedItemDetailsReceiptsV3.md) |  | [optional]
**quantity** | **int** | Quantity |
**unit_price** | [**\Otto\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**position_sum** | [**\Otto\Client\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**price_modifications** | [**\Otto\Client\Model\PriceModificationReceiptsV3[]**](PriceModificationReceiptsV3.md) | List of additional fees and reductions represented as price modifications. &lt;/br&gt;Currently we only know reductions. &lt;/br&gt;If there are no entries the list is displayed as empty |
**insurance_period** | **int** | Services of serviceType WARRANTY or INSURANCE could be offered with different durations. This field will show the duration as month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

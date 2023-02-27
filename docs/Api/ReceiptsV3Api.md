# OpenAPI\Client\ReceiptsV3Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receiptsV3GetReceiptPdfUsingGET3()**](ReceiptsV3Api.md#receiptsV3GetReceiptPdfUsingGET3) | **GET** /v3/receipts/{receiptNumber}.pdf | Get the PDF document of a specific receipt by receipt number. |
| [**receiptsV3GetReceiptUsingGET5()**](ReceiptsV3Api.md#receiptsV3GetReceiptUsingGET5) | **GET** /v3/receipts/{receiptNumber} | Get a specific receipt for the given receipt number as JSON object |
| [**receiptsV3GetReceiptsUsingGET5()**](ReceiptsV3Api.md#receiptsV3GetReceiptsUsingGET5) | **GET** /v3/receipts | Get all receipts as list of JSON objects |


## `receiptsV3GetReceiptPdfUsingGET3()`

```php
receiptsV3GetReceiptPdfUsingGET3($receipt_number)
```

Get the PDF document of a specific receipt by receipt number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceiptsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = R-DE-123456789-2020-1507; // string | ReceiptNumber

try {
    $apiInstance->receiptsV3GetReceiptPdfUsingGET3($receipt_number);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV3Api->receiptsV3GetReceiptPdfUsingGET3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **receipt_number** | **string**| ReceiptNumber | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiptsV3GetReceiptUsingGET5()`

```php
receiptsV3GetReceiptUsingGET5($receipt_number): \OpenAPI\Client\Model\ReceiptReceiptsV3
```

Get a specific receipt for the given receipt number as JSON object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceiptsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = R-DE-123456789-2020-1507; // string | ReceiptNumber

try {
    $result = $apiInstance->receiptsV3GetReceiptUsingGET5($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV3Api->receiptsV3GetReceiptUsingGET5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **receipt_number** | **string**| ReceiptNumber | |

### Return type

[**\OpenAPI\Client\Model\ReceiptReceiptsV3**](../Model/ReceiptReceiptsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiptsV3GetReceiptsUsingGET5()`

```php
receiptsV3GetReceiptsUsingGET5($limit, $page, $receipt_types, $from, $to, $sales_order_id): \OpenAPI\Client\Model\ReceiptsListReceiptsV3
```

Get all receipts as list of JSON objects

The receipts will be sorted based on creationDate, latest one comes first. This endpoint is limited to at max 128 results per page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceiptsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 128; // int | Page size to limit the number of receipts returned in the response
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$receipt_types = array('receipt_types_example'); // string[] | Search for receipts filtered by multiple receipt types
$from = 2022-08-01; // \DateTime | Search for receipts to filter starting from (yyyy-mm-dd)
$to = 2022-08-31; // \DateTime | Search for receipts to filter until (yyyy-mm-dd)
$sales_order_id = f23eb274-a8a2-4721-a7bc-0d9aa1b11940; // string | Search for receipts filtered by sales order Id

try {
    $result = $apiInstance->receiptsV3GetReceiptsUsingGET5($limit, $page, $receipt_types, $from, $to, $sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV3Api->receiptsV3GetReceiptsUsingGET5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Page size to limit the number of receipts returned in the response | [optional] [default to 128] |
| **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1] |
| **receipt_types** | [**string[]**](../Model/string.md)| Search for receipts filtered by multiple receipt types | [optional] |
| **from** | **\DateTime**| Search for receipts to filter starting from (yyyy-mm-dd) | [optional] |
| **to** | **\DateTime**| Search for receipts to filter until (yyyy-mm-dd) | [optional] |
| **sales_order_id** | **string**| Search for receipts filtered by sales order Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReceiptsListReceiptsV3**](../Model/ReceiptsListReceiptsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

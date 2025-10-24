# OpenAPI\Client\ReceiptsV3Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receiptsV3GetReceiptPdfUsingGET3()**](ReceiptsV3Api.md#receiptsV3GetReceiptPdfUsingGET3) | **GET** /v3/receipts/{receiptNumber}.pdf | Get the PDF document of a specific receipt |
| [**receiptsV3GetReceiptUsingGET5()**](ReceiptsV3Api.md#receiptsV3GetReceiptUsingGET5) | **GET** /v3/receipts/{receiptNumber} | Get the JSON object of a specific receipt |
| [**receiptsV3GetReceiptsUsingGET5()**](ReceiptsV3Api.md#receiptsV3GetReceiptsUsingGET5) | **GET** /v3/receipts | Get receipts as list of JSON objects |


## `receiptsV3GetReceiptPdfUsingGET3()`

```php
receiptsV3GetReceiptPdfUsingGET3($receipt_number)
```

Get the PDF document of a specific receipt

Get PDF document by 'receiptNumber'

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

Get the JSON object of a specific receipt

Get JSON object by the 'receiptNumber'

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
receiptsV3GetReceiptsUsingGET5($limit, $page, $receipt_types, $from, $to, $sales_order_id, $next): \OpenAPI\Client\Model\ReceiptsListReceiptsV3
```

Get receipts as list of JSON objects

Retrieve receips sorted by creation date, latest ones first. The number of receipts is limited to 128 results; cursor based pagination is supported.

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
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number. </br>This field is deprecated, please use 'next' parameter
$receipt_types = PURCHASE,REFUND; // string[] | Search for receipts filtered by multiple receipt types.  </br>PURCHASE - A purchase receipt (also known as an invoice) records the prices charged to the customer at the time of sale. The receipt contains information per order, partner and shipment. It is generated when items are shipped to the customer, so there may be more than one receipt per order. Shipping costs are charged only once per partner and per order, and are billed with first purchase receipt of this partner order. Surcharges imposed by payment provider on the customer for using special payment conditions are not included in the OTTO Market receipts.  </br>REFUND - We distinguish between different types of reimbursement documents. A refund receipt documents a credit note issued to a customer for a refund. This document is currently created when returns are accepted.  In very rare cases, refund receipts may also be created during the cancellation process to reimburse shipping costs for full returns.  Previous partial refunds will be taken into account.  </br> PARTIAL_REFUND -  We distinguish different types of reimbursement documents. A partial refund receipt documents a credit note issued to a customer without return.  As a partner, you might offer a customer a partial refund if there is a legitimate complaint to avoid a return.  </br>If no receiptType is provided, receipts  of all existing receiptTypes will be returned.  <b>Please for your own interest, hand over all receipt types you are interested in using the list parameter receiptTypes, so that OTTO Market could add new receipt types without side effects for your own processes. Using this option you can decide by your own when to incorporate new receipt types in your own processes.   Please do not use the possibility of calls without specifying the receiptTypes anymore.</b>
$from = 2022-08-01; // \DateTime | Only receipts with creation date newer or equal than the date specified (yyy-mm-dd in UTC) will be returned.
$to = 2022-08-31; // \DateTime | Only receipts with creation date older or equal than the date specified (yyy-mm-dd in UTC) will be returned.
$sales_order_id = f23eb274-a8a2-4721-a7bc-0d9aa1b11940; // string | Search for receipts filtered by sales order Id
$next = eyJjcmVhdGlvbkRhdGUiOjE2ODU2OTE1NjUuMTk4MDAwMDAwLCJyZWNlaXB0TnVtYmVyIjoiRS1ERS0xMTg0NzU2OTAtMjAyMy0zNTgxMyJ9; // string | Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is 'limit'  Note: Only the cursor string is required - not the whole link

try {
    $result = $apiInstance->receiptsV3GetReceiptsUsingGET5($limit, $page, $receipt_types, $from, $to, $sales_order_id, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsV3Api->receiptsV3GetReceiptsUsingGET5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Page size to limit the number of receipts returned in the response | [optional] [default to 128] |
| **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number. &lt;/br&gt;This field is deprecated, please use &#39;next&#39; parameter | [optional] [default to 1] |
| **receipt_types** | [**string[]**](../Model/string.md)| Search for receipts filtered by multiple receipt types.  &lt;/br&gt;PURCHASE - A purchase receipt (also known as an invoice) records the prices charged to the customer at the time of sale. The receipt contains information per order, partner and shipment. It is generated when items are shipped to the customer, so there may be more than one receipt per order. Shipping costs are charged only once per partner and per order, and are billed with first purchase receipt of this partner order. Surcharges imposed by payment provider on the customer for using special payment conditions are not included in the OTTO Market receipts.  &lt;/br&gt;REFUND - We distinguish between different types of reimbursement documents. A refund receipt documents a credit note issued to a customer for a refund. This document is currently created when returns are accepted.  In very rare cases, refund receipts may also be created during the cancellation process to reimburse shipping costs for full returns.  Previous partial refunds will be taken into account.  &lt;/br&gt; PARTIAL_REFUND -  We distinguish different types of reimbursement documents. A partial refund receipt documents a credit note issued to a customer without return.  As a partner, you might offer a customer a partial refund if there is a legitimate complaint to avoid a return.  &lt;/br&gt;If no receiptType is provided, receipts  of all existing receiptTypes will be returned.  &lt;b&gt;Please for your own interest, hand over all receipt types you are interested in using the list parameter receiptTypes, so that OTTO Market could add new receipt types without side effects for your own processes. Using this option you can decide by your own when to incorporate new receipt types in your own processes.   Please do not use the possibility of calls without specifying the receiptTypes anymore.&lt;/b&gt; | [optional] |
| **from** | **\DateTime**| Only receipts with creation date newer or equal than the date specified (yyy-mm-dd in UTC) will be returned. | [optional] |
| **to** | **\DateTime**| Only receipts with creation date older or equal than the date specified (yyy-mm-dd in UTC) will be returned. | [optional] |
| **sales_order_id** | **string**| Search for receipts filtered by sales order Id | [optional] |
| **next** | **string**| Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#39;limit&#39;  Note: Only the cursor string is required - not the whole link | [optional] |

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

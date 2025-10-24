# Otto\Client\ReturnsV3Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**returnsV3GetPositionItemsForUsingGETV3()**](ReturnsV3Api.md#returnsV3GetPositionItemsForUsingGETV3) | **GET** /v3/returns | Get all the items filtered on return status |
| [**returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3()**](ReturnsV3Api.md#returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3) | **POST** /v3/returns/acceptance | Accept the return for a sent position item (up to 200 items per request) |
| [**returnsV3ReceiveRejectedReturnsV3UsingPOSTV3()**](ReturnsV3Api.md#returnsV3ReceiveRejectedReturnsV3UsingPOSTV3) | **POST** /v3/returns/rejection | Reject the return for a sent position item (up to 200 items per request) |


## `returnsV3GetPositionItemsForUsingGETV3()`

```php
returnsV3GetPositionItemsForUsingGETV3($limit, $page, $status): \Otto\Client\Model\PositionItemListReturnsV3
```

Get all the items filtered on return status

The items will be sorted on status modified time in reverse chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 50 results per page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 50
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$status = MISDIRECTED; // string | Return status for which items are being queried for (case-insensitive)

try {
    $result = $apiInstance->returnsV3GetPositionItemsForUsingGETV3($limit, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3GetPositionItemsForUsingGETV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 50 | [optional] [default to 10] |
| **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1] |
| **status** | **string**| Return status for which items are being queried for (case-insensitive) | [optional] |

### Return type

[**\Otto\Client\Model\PositionItemListReturnsV3**](../Model/PositionItemListReturnsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3()`

```php
returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3($accepted_partner_return_v3_returns_v3): object
```

Accept the return for a sent position item (up to 200 items per request)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accepted_partner_return_v3_returns_v3 = new \Otto\Client\Model\AcceptedPartnerReturnV3ReturnsV3(); // \Otto\Client\Model\AcceptedPartnerReturnV3ReturnsV3 | acceptedPartnerReturn

try {
    $result = $apiInstance->returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3($accepted_partner_return_v3_returns_v3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3ReceiveAcceptedReturnsV3UsingPOSTV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accepted_partner_return_v3_returns_v3** | [**\Otto\Client\Model\AcceptedPartnerReturnV3ReturnsV3**](../Model/AcceptedPartnerReturnV3ReturnsV3.md)| acceptedPartnerReturn | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsV3ReceiveRejectedReturnsV3UsingPOSTV3()`

```php
returnsV3ReceiveRejectedReturnsV3UsingPOSTV3($rejected_partner_return_v3_returns_v3): object
```

Reject the return for a sent position item (up to 200 items per request)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rejected_partner_return_v3_returns_v3 = new \Otto\Client\Model\RejectedPartnerReturnV3ReturnsV3(); // \Otto\Client\Model\RejectedPartnerReturnV3ReturnsV3 | rejectedPartnerReturn

try {
    $result = $apiInstance->returnsV3ReceiveRejectedReturnsV3UsingPOSTV3($rejected_partner_return_v3_returns_v3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsV3Api->returnsV3ReceiveRejectedReturnsV3UsingPOSTV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rejected_partner_return_v3_returns_v3** | [**\Otto\Client\Model\RejectedPartnerReturnV3ReturnsV3**](../Model/RejectedPartnerReturnV3ReturnsV3.md)| rejectedPartnerReturn | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

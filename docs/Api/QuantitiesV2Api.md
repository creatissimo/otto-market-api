# OpenAPI\Client\QuantitiesV2Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quantitiesV2GetAvailableQuantities()**](QuantitiesV2Api.md#quantitiesV2GetAvailableQuantities) | **GET** /v2/quantities | Get available quantities for a specific Partner (Upto 200 per request). |
| [**quantitiesV2GetAvailableQuantityBySku()**](QuantitiesV2Api.md#quantitiesV2GetAvailableQuantityBySku) | **GET** /v2/quantities/{sku} | Get available quantity for a specific Sku |
| [**quantitiesV2StoreAvailableQuantitiesUsingPOST()**](QuantitiesV2Api.md#quantitiesV2StoreAvailableQuantitiesUsingPOST) | **POST** /v2/quantities | Update the available quantity for a specific SKU (up to 200 SKUs per request) |


## `quantitiesV2GetAvailableQuantities()`

```php
quantitiesV2GetAvailableQuantities($limit, $page, $cursor): \OpenAPI\Client\Model\AvailableQuantityResponseV2QuantitiesV2
```

Get available quantities for a specific Partner (Upto 200 per request).

Retrieve available quantities sorted by sku name in ascending.The maximum number of returned quantities is limited to 200.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 200; // int | The maximum number of available quantities to be returned in each response.
$page = 0; // int | Page number (0..N)
$cursor = c2t1NDM=; // string | Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is 'limit'. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value)

try {
    $result = $apiInstance->quantitiesV2GetAvailableQuantities($limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2GetAvailableQuantities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of available quantities to be returned in each response. | [optional] [default to 200] |
| **page** | **int**| Page number (0..N) | [optional] [default to 0] |
| **cursor** | **string**| Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#39;limit&#39;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) | [optional] |

### Return type

[**\OpenAPI\Client\Model\AvailableQuantityResponseV2QuantitiesV2**](../Model/AvailableQuantityResponseV2QuantitiesV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quantitiesV2GetAvailableQuantityBySku()`

```php
quantitiesV2GetAvailableQuantityBySku($sku): \OpenAPI\Client\Model\AvailableQuantitySingleResponseDTOV2QuantitiesV2
```

Get available quantity for a specific Sku

Fetch a single available quantity by its unique sku name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | The sku for the available quantity

try {
    $result = $apiInstance->quantitiesV2GetAvailableQuantityBySku($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2GetAvailableQuantityBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| The sku for the available quantity | |

### Return type

[**\OpenAPI\Client\Model\AvailableQuantitySingleResponseDTOV2QuantitiesV2**](../Model/AvailableQuantitySingleResponseDTOV2QuantitiesV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quantitiesV2StoreAvailableQuantitiesUsingPOST()`

```php
quantitiesV2StoreAvailableQuantitiesUsingPOST($available_quantity_request_dtov2_quantities_v2): object
```

Update the available quantity for a specific SKU (up to 200 SKUs per request)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuantitiesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$available_quantity_request_dtov2_quantities_v2 = array(new \OpenAPI\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2()); // \OpenAPI\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2[] | availableQuantityRequestDTO

try {
    $result = $apiInstance->quantitiesV2StoreAvailableQuantitiesUsingPOST($available_quantity_request_dtov2_quantities_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuantitiesV2Api->quantitiesV2StoreAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **available_quantity_request_dtov2_quantities_v2** | [**\OpenAPI\Client\Model\AvailableQuantityRequestDTOV2QuantitiesV2[]**](../Model/AvailableQuantityRequestDTOV2QuantitiesV2.md)| availableQuantityRequestDTO | |

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

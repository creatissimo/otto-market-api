# OpenAPI\Client\AvailabilityV1Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**availabilityV1GetAvailableQuantities()**](AvailabilityV1Api.md#availabilityV1GetAvailableQuantities) | **GET** /v1/availability/quantities | Get quantities from a partner (up to 200 per request) |
| [**availabilityV1GetAvailableQuantityBySku()**](AvailabilityV1Api.md#availabilityV1GetAvailableQuantityBySku) | **GET** /v1/availability/quantities/{sku} | Get quantity for a sku |
| [**availabilityV1GetDeliveryInformationBySKU()**](AvailabilityV1Api.md#availabilityV1GetDeliveryInformationBySKU) | **GET** /v1/availability/product-delivery-information/{sku} | Get product delivery information for a SKU |
| [**availabilityV1GetProductDeliveryInformation()**](AvailabilityV1Api.md#availabilityV1GetProductDeliveryInformation) | **GET** /v1/availability/product-delivery-information | Get product delivery information from a partner |
| [**availabilityV1StoreAvailableQuantitiesUsingPOST()**](AvailabilityV1Api.md#availabilityV1StoreAvailableQuantitiesUsingPOST) | **POST** /v1/availability/quantities | Update quantities |
| [**availabilityV1StoreProductDeliveryInformationUsingPOST()**](AvailabilityV1Api.md#availabilityV1StoreProductDeliveryInformationUsingPOST) | **POST** /v1/availability/product-delivery-information | Update product delivery information |


## `availabilityV1GetAvailableQuantities()`

```php
availabilityV1GetAvailableQuantities($authorization, $limit, $page, $cursor): \OpenAPI\Client\Model\AvailableQuantityResponseAvailabilityV1
```

Get quantities from a partner (up to 200 per request)

Retrieve available quantities sorted by sku name in ascending.The maximum number of returned quantities is limited to 200.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$limit = 200; // int | The maximum number of available quantities to be returned in each response.
$page = 0; // int | Page number (0..N)
$cursor = c2t1NDM=; // string | Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is 'limit'. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value)

try {
    $result = $apiInstance->availabilityV1GetAvailableQuantities($authorization, $limit, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetAvailableQuantities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **limit** | **int**| The maximum number of available quantities to be returned in each response. | [optional] [default to 200] |
| **page** | **int**| Page number (0..N) | [optional] [default to 0] |
| **cursor** | **string**| Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#39;limit&#39;. The cursor value is the last evaluted sku in the request response (Needs to be a valid sku value) | [optional] |

### Return type

[**\OpenAPI\Client\Model\AvailableQuantityResponseAvailabilityV1**](../Model/AvailableQuantityResponseAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityV1GetAvailableQuantityBySku()`

```php
availabilityV1GetAvailableQuantityBySku($authorization, $sku): \OpenAPI\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1
```

Get quantity for a sku

Fetch a single available quantity by its unique sku name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$sku = 'sku_example'; // string | The sku for the available quantity

try {
    $result = $apiInstance->availabilityV1GetAvailableQuantityBySku($authorization, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetAvailableQuantityBySku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **sku** | **string**| The sku for the available quantity | |

### Return type

[**\OpenAPI\Client\Model\AvailableQuantitySingleResponseDTOAvailabilityV1**](../Model/AvailableQuantitySingleResponseDTOAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityV1GetDeliveryInformationBySKU()`

```php
availabilityV1GetDeliveryInformationBySKU($authorization, $sku): \OpenAPI\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1
```

Get product delivery information for a SKU

This GET API endpoint is to get a shipping profile id and processing time for given sku

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$sku = 'sku_example'; // string | the sku in string format

try {
    $result = $apiInstance->availabilityV1GetDeliveryInformationBySKU($authorization, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetDeliveryInformationBySKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **sku** | **string**| the sku in string format | |

### Return type

[**\OpenAPI\Client\Model\ProductDeliveryInformationResponseDTOAvailabilityV1**](../Model/ProductDeliveryInformationResponseDTOAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityV1GetProductDeliveryInformation()`

```php
availabilityV1GetProductDeliveryInformation($authorization, $limit, $cursor): \OpenAPI\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1
```

Get product delivery information from a partner

Retrieve sku and shipping profile mapping.The maximum number of returned items is limited to 200. If there are more items, a cursor field is returned to get the next results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$limit = 200; // int | The maximum number of shipping profile and sku mappings to be returned in each response.
$cursor = c2t1NDM=; // string | Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is 'limit'. <br><br> Note:The cursor value must remain unchanged from the previous request.

try {
    $result = $apiInstance->availabilityV1GetProductDeliveryInformation($authorization, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1GetProductDeliveryInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **limit** | **int**| The maximum number of shipping profile and sku mappings to be returned in each response. | [optional] [default to 200] |
| **cursor** | **string**| Cursor for paging requests. If a cursor is provided, the only other request parameter being considered is &#39;limit&#39;. &lt;br&gt;&lt;br&gt; Note:The cursor value must remain unchanged from the previous request. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAllProductDeliveryInfoResponseAvailabilityV1**](../Model/GetAllProductDeliveryInfoResponseAvailabilityV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityV1StoreAvailableQuantitiesUsingPOST()`

```php
availabilityV1StoreAvailableQuantitiesUsingPOST($authorization, $available_quantity_request_dto_availability_v1)
```

Update quantities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$available_quantity_request_dto_availability_v1 = array(new \OpenAPI\Client\Model\AvailableQuantityRequestDTOAvailabilityV1()); // \OpenAPI\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[]

try {
    $apiInstance->availabilityV1StoreAvailableQuantitiesUsingPOST($authorization, $available_quantity_request_dto_availability_v1);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1StoreAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **available_quantity_request_dto_availability_v1** | [**\OpenAPI\Client\Model\AvailableQuantityRequestDTOAvailabilityV1[]**](../Model/AvailableQuantityRequestDTOAvailabilityV1.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityV1StoreProductDeliveryInformationUsingPOST()`

```php
availabilityV1StoreProductDeliveryInformationUsingPOST($authorization, $product_delivery_information_request_dto_availability_v1): \OpenAPI\Client\Model\AvailabilityV1StoreProductDeliveryInformationUsingPOST202Response
```

Update product delivery information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AvailabilityV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$product_delivery_information_request_dto_availability_v1 = array(new \OpenAPI\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1()); // \OpenAPI\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[]

try {
    $result = $apiInstance->availabilityV1StoreProductDeliveryInformationUsingPOST($authorization, $product_delivery_information_request_dto_availability_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityV1Api->availabilityV1StoreProductDeliveryInformationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **product_delivery_information_request_dto_availability_v1** | [**\OpenAPI\Client\Model\ProductDeliveryInformationRequestDTOAvailabilityV1[]**](../Model/ProductDeliveryInformationRequestDTOAvailabilityV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityV1StoreProductDeliveryInformationUsingPOST202Response**](../Model/AvailabilityV1StoreProductDeliveryInformationUsingPOST202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

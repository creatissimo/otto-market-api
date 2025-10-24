# Otto\Client\ReturnsWarehouseV2Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**returnsWarehouseV2CreateReturnWarehouseAddress()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2CreateReturnWarehouseAddress) | **POST** /v2/returns-warehouse/addresses | create returnWarehouse address |
| [**returnsWarehouseV2CreateReturnsWarehouseCarrier()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2CreateReturnsWarehouseCarrier) | **POST** /v2/returns-warehouse/addresses/{returnAddressId}/carriers | create returnCarrier for returnWarehouse address |
| [**returnsWarehouseV2DeleteParcelReturnCarrier()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2DeleteParcelReturnCarrier) | **DELETE** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | delete returnCarrier for returnWarehouse address |
| [**returnsWarehouseV2DeleteReturnsWarehouseAddressById()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2DeleteReturnsWarehouseAddressById) | **DELETE** /v2/returns-warehouse/addresses/{returnAddressId} | delete returnWarehouse address by returnAddressId |
| [**returnsWarehouseV2GetAllReturnsWarehouseAddresses()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2GetAllReturnsWarehouseAddresses) | **GET** /v2/returns-warehouse/addresses | get all returnWarehouse addresses |
| [**returnsWarehouseV2GetReturnsWarehouseAddressById()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2GetReturnsWarehouseAddressById) | **GET** /v2/returns-warehouse/addresses/{returnAddressId} | get returnWarehouse address by returnAddressId |
| [**returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId) | **GET** /v2/returns-warehouse/addresses/{returnAddressId}/carriers | get returnWarehouse Carriers by returnAddressId |
| [**returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId) | **GET** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | get returnWarehouse Carriers by returnAddressCarrierId |
| [**returnsWarehouseV2UpdateParcelReturnCarrier()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2UpdateParcelReturnCarrier) | **PUT** /v2/returns-warehouse/addresses/{returnAddressId}/carriers/{returnAddressCarrierId} | update returnCarrier for returnWarehouse address |
| [**returnsWarehouseV2UpdateReturnWarehouseAddress()**](ReturnsWarehouseV2Api.md#returnsWarehouseV2UpdateReturnWarehouseAddress) | **PUT** /v2/returns-warehouse/addresses/{returnAddressId} | update returnWarehouse address by returnAddressId |


## `returnsWarehouseV2CreateReturnWarehouseAddress()`

```php
returnsWarehouseV2CreateReturnWarehouseAddress($authorization, $returns_warehouse_address_request_returns_warehouse_v2): \Otto\Client\Model\ReturnsWarehouseAddressIdResponseReturnsWarehouseV2
```

create returnWarehouse address

This POST API endpoint is to add a new return warehouse address.  A new return address will always be created after verifying it is not a duplicate.  The address will be validated before being saved.  When the warehouse type is `INTERNATIONAL_CONSOLIDATION_HUB`, address details should not be entered.  The address is automatically set to `Robert-Bosch-Breite 10, 37079 Göttingen, Germany`. `INTERNATIONAL_CONSOLIDATION_HUB` cannot be a misdirected/standard address, you need to first enter standard/misdirected address.  In order to ensure the processing of misdirected returns, we need an address to which these shipments can be delivered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$returns_warehouse_address_request_returns_warehouse_v2 = new \Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2(); // \Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2 | return warehouse address

try {
    $result = $apiInstance->returnsWarehouseV2CreateReturnWarehouseAddress($authorization, $returns_warehouse_address_request_returns_warehouse_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2CreateReturnWarehouseAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **returns_warehouse_address_request_returns_warehouse_v2** | [**\Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressRequestReturnsWarehouseV2.md)| return warehouse address | |

### Return type

[**\Otto\Client\Model\ReturnsWarehouseAddressIdResponseReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressIdResponseReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2CreateReturnsWarehouseCarrier()`

```php
returnsWarehouseV2CreateReturnsWarehouseCarrier($authorization, $return_address_id, $returns_warehouse_carrier_request_returns_warehouse_v2): \Otto\Client\Model\ReturnCarrierResponseReturnsWarehouseV2
```

create returnCarrier for returnWarehouse address

This POST API endpoint is used to add a return carrier and its associated routing codes to a specified return warehouse.  To add a carrier, the return warehouse must be identified by its ID.   Ensure that a return warehouse address has been created before adding a parcel return carrier.  The warehouse address can be created using the `create a parcel return address` (POST ).  The Return Address ID must be provided as a path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse
$returns_warehouse_carrier_request_returns_warehouse_v2 = new \Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2(); // \Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2 | return warehouse carrier post request

try {
    $result = $apiInstance->returnsWarehouseV2CreateReturnsWarehouseCarrier($authorization, $return_address_id, $returns_warehouse_carrier_request_returns_warehouse_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2CreateReturnsWarehouseCarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |
| **returns_warehouse_carrier_request_returns_warehouse_v2** | [**\Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierRequestReturnsWarehouseV2.md)| return warehouse carrier post request | |

### Return type

[**\Otto\Client\Model\ReturnCarrierResponseReturnsWarehouseV2**](../Model/ReturnCarrierResponseReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2DeleteParcelReturnCarrier()`

```php
returnsWarehouseV2DeleteParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id)
```

delete returnCarrier for returnWarehouse address

This DELETE API endpoint is to delete a return address carrier by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = 'return_address_carrier_id_example'; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse

try {
    $apiInstance->returnsWarehouseV2DeleteParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2DeleteParcelReturnCarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |
| **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2DeleteReturnsWarehouseAddressById()`

```php
returnsWarehouseV2DeleteReturnsWarehouseAddressById($authorization, $return_address_id)
```

delete returnWarehouse address by returnAddressId

This DELETE API endpoint is to delete a return warehouse address by id.  **Deleting a misdirected address is not allowed.** **Deleting an address which has one or more return carrier(s) is not allowed.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse

try {
    $apiInstance->returnsWarehouseV2DeleteReturnsWarehouseAddressById($authorization, $return_address_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2DeleteReturnsWarehouseAddressById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2GetAllReturnsWarehouseAddresses()`

```php
returnsWarehouseV2GetAllReturnsWarehouseAddresses($authorization, $limit, $page, $return_warehouse_type): \Otto\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2[]
```

get all returnWarehouse addresses

This GET API endpoint is to fetch all return warehouse addresses. Response is by default paginated with default page size of 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$limit = 10; // int | Page size to limit the number of items returned in the response. Maximum value for limit can 50
$page = 1; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$return_warehouse_type = NATIONAL; // string | This parameter allows fetching results filtered by the specified returnWarehouseType.

try {
    $result = $apiInstance->returnsWarehouseV2GetAllReturnsWarehouseAddresses($authorization, $limit, $page, $return_warehouse_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetAllReturnsWarehouseAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **limit** | **int**| Page size to limit the number of items returned in the response. Maximum value for limit can 50 | [optional] [default to 50] |
| **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] [default to 1] |
| **return_warehouse_type** | **string**| This parameter allows fetching results filtered by the specified returnWarehouseType. | [optional] |

### Return type

[**\Otto\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2[]**](../Model/ReturnsWarehouseAddressWithIDReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2GetReturnsWarehouseAddressById()`

```php
returnsWarehouseV2GetReturnsWarehouseAddressById($authorization, $return_address_id): \Otto\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2
```

get returnWarehouse address by returnAddressId

This GET API endpoint retrieves the return warehouse address for a partner based on the provided ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseAddressById($authorization, $return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseAddressById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |

### Return type

[**\Otto\Client\Model\ReturnsWarehouseAddressWithIDReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressWithIDReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId()`

```php
returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId($authorization, $return_address_id): \Otto\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2[]
```

get returnWarehouse Carriers by returnAddressId

This GET API endpoint retrieves the return warehouse carriers associated with a partner for a specific address, identified by the Return Address ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId($authorization, $return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |

### Return type

[**\Otto\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2[]**](../Model/ReturnsWarehouseCarrierReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId()`

```php
returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId($authorization, $return_address_id, $return_address_carrier_id): \Otto\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2
```

get returnWarehouse Carriers by returnAddressCarrierId

This GET API endpoint retrieves a specific return warehouse carrier of a partner using the Return Address ID and Carrier ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = 'return_address_carrier_id_example'; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse

try {
    $result = $apiInstance->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId($authorization, $return_address_id, $return_address_carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2GetReturnsWarehouseCarriersByReturnAddressIdAndReturnAddressCarrierId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |
| **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse | |

### Return type

[**\Otto\Client\Model\ReturnsWarehouseCarrierReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierReturnsWarehouseV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2UpdateParcelReturnCarrier()`

```php
returnsWarehouseV2UpdateParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id, $returns_warehouse_carrier_request_returns_warehouse_v2)
```

update returnCarrier for returnWarehouse address

This PUT API endpoint is used to update an existing parcel return carrier by its ID.  The PUT request will only allow updating the carrier codes.  **Note that the HERMES carrier does not have carrier codes, so it cannot be updated.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse
$return_address_carrier_id = 'return_address_carrier_id_example'; // string | Unique identifier for each returnCarrier, which is linked with a returnWarehouse
$returns_warehouse_carrier_request_returns_warehouse_v2 = new \Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2(); // \Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2 | return warehouse carrier update request

try {
    $apiInstance->returnsWarehouseV2UpdateParcelReturnCarrier($authorization, $return_address_id, $return_address_carrier_id, $returns_warehouse_carrier_request_returns_warehouse_v2);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2UpdateParcelReturnCarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |
| **return_address_carrier_id** | **string**| Unique identifier for each returnCarrier, which is linked with a returnWarehouse | |
| **returns_warehouse_carrier_request_returns_warehouse_v2** | [**\Otto\Client\Model\ReturnsWarehouseCarrierRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseCarrierRequestReturnsWarehouseV2.md)| return warehouse carrier update request | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnsWarehouseV2UpdateReturnWarehouseAddress()`

```php
returnsWarehouseV2UpdateReturnWarehouseAddress($authorization, $return_address_id, $returns_warehouse_address_request_returns_warehouse_v2)
```

update returnWarehouse address by returnAddressId

This PUT API endpoint is to update a return warehouse address.  Address will be validated before being saved.  When the warehouse type is `INTERNATIONAL_CONSOLIDATION_HUB`, address details should not be entered.  The address is automatically set to `Robert-Bosch-Breite 10, 37079 Göttingen, Germany`.  The country and warehouse type of the return warehouse address cannot be updated. Zipcode changes are restricted for addresses linked to a DHL carrier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Otto\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Otto\Client\Api\ReturnsWarehouseV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$return_address_id = 'return_address_id_example'; // string | Unique identifier of the returnWarehouse
$returns_warehouse_address_request_returns_warehouse_v2 = new \Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2(); // \Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2 | return warehouse address update request

try {
    $apiInstance->returnsWarehouseV2UpdateReturnWarehouseAddress($authorization, $return_address_id, $returns_warehouse_address_request_returns_warehouse_v2);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsWarehouseV2Api->returnsWarehouseV2UpdateReturnWarehouseAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **return_address_id** | **string**| Unique identifier of the returnWarehouse | |
| **returns_warehouse_address_request_returns_warehouse_v2** | [**\Otto\Client\Model\ReturnsWarehouseAddressRequestReturnsWarehouseV2**](../Model/ReturnsWarehouseAddressRequestReturnsWarehouseV2.md)| return warehouse address update request | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPI\Client\ShippingProfilesV1Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shippingProfilesV1CreateShippingProfile()**](ShippingProfilesV1Api.md#shippingProfilesV1CreateShippingProfile) | **POST** /v1/shipping-profiles | Create shipping profile |
| [**shippingProfilesV1DeleteShippingProfile()**](ShippingProfilesV1Api.md#shippingProfilesV1DeleteShippingProfile) | **DELETE** /v1/shipping-profiles/{shippingProfileId} | Delete shipping profile |
| [**shippingProfilesV1GetShippingProfileById()**](ShippingProfilesV1Api.md#shippingProfilesV1GetShippingProfileById) | **GET** /v1/shipping-profiles/{shippingProfileId} | Get shipping profile by shipping profile id |
| [**shippingProfilesV1GetShippingProfiles()**](ShippingProfilesV1Api.md#shippingProfilesV1GetShippingProfiles) | **GET** /v1/shipping-profiles | Get all shipping profiles from a partner |
| [**shippingProfilesV1UpdateShippingProfile()**](ShippingProfilesV1Api.md#shippingProfilesV1UpdateShippingProfile) | **PUT** /v1/shipping-profiles/{shippingProfileId} | Update shipping profile |


## `shippingProfilesV1CreateShippingProfile()`

```php
shippingProfilesV1CreateShippingProfile($authorization, $create_shipping_profile_request_shipping_profiles_v1): \OpenAPI\Client\Model\CreateShippingProfileResponseShippingProfilesV1
```

Create shipping profile

This POST API endpoint is to create shipping profile API POST will always create a new shipping profile after ensuring it is not a duplicate for a partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$create_shipping_profile_request_shipping_profiles_v1 = new \OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1(); // \OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1 | create shipping profile

try {
    $result = $apiInstance->shippingProfilesV1CreateShippingProfile($authorization, $create_shipping_profile_request_shipping_profiles_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1CreateShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **create_shipping_profile_request_shipping_profiles_v1** | [**\OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1**](../Model/CreateShippingProfileRequestShippingProfilesV1.md)| create shipping profile | |

### Return type

[**\OpenAPI\Client\Model\CreateShippingProfileResponseShippingProfilesV1**](../Model/CreateShippingProfileResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json;charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingProfilesV1DeleteShippingProfile()`

```php
shippingProfilesV1DeleteShippingProfile($authorization, $shipping_profile_id)
```

Delete shipping profile

This DELETE API endpoint is to delete a shipping profile by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$shipping_profile_id = 7bec0ef6-4324-4fa4-9fbf-42c54659ef04; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU

try {
    $apiInstance->shippingProfilesV1DeleteShippingProfile($authorization, $shipping_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1DeleteShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU | |

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

## `shippingProfilesV1GetShippingProfileById()`

```php
shippingProfilesV1GetShippingProfileById($authorization, $shipping_profile_id): \OpenAPI\Client\Model\GetShippingProfileResponseShippingProfilesV1
```

Get shipping profile by shipping profile id

This GET API endpoint is to get a shipping profile of the partner by shipping profile id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$shipping_profile_id = 7bec0ef6-4324-4fa4-9fbf-42c54659ef04; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU

try {
    $result = $apiInstance->shippingProfilesV1GetShippingProfileById($authorization, $shipping_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1GetShippingProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU | |

### Return type

[**\OpenAPI\Client\Model\GetShippingProfileResponseShippingProfilesV1**](../Model/GetShippingProfileResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingProfilesV1GetShippingProfiles()`

```php
shippingProfilesV1GetShippingProfiles($authorization, $cursor): \OpenAPI\Client\Model\GetAllShippingProfilesResponseShippingProfilesV1
```

Get all shipping profiles from a partner

This GET API endpoint is to get all shipping profiles for a partner. Response is by default paginated with default page size of 300.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$cursor = YtNTQzZS01YTBiLWFjNzktNTNmNWRiMTMyZTQ0fFJldmlld0RlbW8x; // string | Page number to fetch. This parameter is required to fetch data for specific page number

try {
    $result = $apiInstance->shippingProfilesV1GetShippingProfiles($authorization, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1GetShippingProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **cursor** | **string**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAllShippingProfilesResponseShippingProfilesV1**](../Model/GetAllShippingProfilesResponseShippingProfilesV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingProfilesV1UpdateShippingProfile()`

```php
shippingProfilesV1UpdateShippingProfile($authorization, $shipping_profile_id, $create_shipping_profile_request_shipping_profiles_v1)
```

Update shipping profile

This PUT API endpoint is to update a shipping profile PUT will always take an shipping profile and update it.  deliveryType field cannot be updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ShippingProfilesV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = Bearer access_token; // string | Access Token
$shipping_profile_id = 7bec0ef6-4324-4fa4-9fbf-42c54659ef04; // string | The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU
$create_shipping_profile_request_shipping_profiles_v1 = new \OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1(); // \OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1 | shipping profile request

try {
    $apiInstance->shippingProfilesV1UpdateShippingProfile($authorization, $shipping_profile_id, $create_shipping_profile_request_shipping_profiles_v1);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfilesV1Api->shippingProfilesV1UpdateShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Access Token | |
| **shipping_profile_id** | **string**| The id of the shipping profile in uuid4 format and the primaryKey for mapping a Profile to a SKU | |
| **create_shipping_profile_request_shipping_profiles_v1** | [**\OpenAPI\Client\Model\CreateShippingProfileRequestShippingProfilesV1**](../Model/CreateShippingProfileRequestShippingProfilesV1.md)| shipping profile request | |

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

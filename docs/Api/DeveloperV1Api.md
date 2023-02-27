# OpenAPI\Client\DeveloperV1Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**developerV1CreateAccessToken()**](DeveloperV1Api.md#developerV1CreateAccessToken) | **POST** /v1/token | Obtain access token from client ID &amp; client Secret |
| [**developerV1CreateInstallationAccessToken()**](DeveloperV1Api.md#developerV1CreateInstallationAccessToken) | **POST** /v1/apps/{appId}/installations/{installationId}/accessToken | Obtain installation access token |
| [**developerV1GetInstallation()**](DeveloperV1Api.md#developerV1GetInstallation) | **GET** /v1/apps/{appId}/installation | Get installation for a service provider app |


## `developerV1CreateAccessToken()`

```php
developerV1CreateAccessToken($client_id, $client_secret, $grant_type, $scope): \OpenAPI\Client\Model\ClientCredentialResponseDeveloperV1
```

Obtain access token from client ID & client Secret

Generates an access token for the client_id and client_secret using client_credentials flow. This token is valid for 30 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: onBehalfOfPartner
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | identifies the client uniquely
$client_secret = 'client_secret_example'; // string | secret for the client
$grant_type = 'grant_type_example'; // string | type of token request. Only supported value is client_credentials
$scope = 'scope_example'; // string | list of scopes that the client wants to be included in the access token (space separated)

try {
    $result = $apiInstance->developerV1CreateAccessToken($client_id, $client_secret, $grant_type, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1CreateAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| identifies the client uniquely | |
| **client_secret** | **string**| secret for the client | |
| **grant_type** | **string**| type of token request. Only supported value is client_credentials | |
| **scope** | **string**| list of scopes that the client wants to be included in the access token (space separated) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientCredentialResponseDeveloperV1**](../Model/ClientCredentialResponseDeveloperV1.md)

### Authorization

[onBehalfOfPartner](../../README.md#onBehalfOfPartner), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `developerV1CreateInstallationAccessToken()`

```php
developerV1CreateInstallationAccessToken($app_id, $installation_id, $scope): \OpenAPI\Client\Model\AppInstallationAccessTokenResponseDeveloperV1
```

Obtain installation access token

Generates an installation access token for a specific partner's installation of a service provider app. This token is valid for 30 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | unique id used to identify service provider app
$installation_id = 'installation_id_example'; // string | unique id used to identify installation of app by partner
$scope = 'scope_example'; // string | list of scopes that the client wants to be included in the access token (space separated)

try {
    $result = $apiInstance->developerV1CreateInstallationAccessToken($app_id, $installation_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1CreateInstallationAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| unique id used to identify service provider app | |
| **installation_id** | **string**| unique id used to identify installation of app by partner | |
| **scope** | **string**| list of scopes that the client wants to be included in the access token (space separated) | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppInstallationAccessTokenResponseDeveloperV1**](../Model/AppInstallationAccessTokenResponseDeveloperV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `developerV1GetInstallation()`

```php
developerV1GetInstallation($app_id): \OpenAPI\Client\Model\AppInstallationResponseDeveloperV1
```

Get installation for a service provider app

Gets the installation for a specific partner's installation of a service provider app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: onBehalfOfPartner
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeveloperV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | unique id used to identify service provider app

try {
    $result = $apiInstance->developerV1GetInstallation($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperV1Api->developerV1GetInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| unique id used to identify service provider app | |

### Return type

[**\OpenAPI\Client\Model\AppInstallationResponseDeveloperV1**](../Model/AppInstallationResponseDeveloperV1.md)

### Authorization

[onBehalfOfPartner](../../README.md#onBehalfOfPartner)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

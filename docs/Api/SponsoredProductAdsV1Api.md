# OpenAPI\Client\SponsoredProductAdsV1Api



All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sponsoredProductAdsV1CreateCampaign()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1CreateCampaign) | **POST** /v1/sponsored-product-ads/campaigns | Create campaign |
| [**sponsoredProductAdsV1CreateKeywords()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1CreateKeywords) | **POST** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId}/keywords | Create keywords |
| [**sponsoredProductAdsV1CreateTargets()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1CreateTargets) | **POST** /v1/sponsored-product-ads/campaigns/{campaignId}/targets | Create targets |
| [**sponsoredProductAdsV1DeleteKeywords()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1DeleteKeywords) | **DELETE** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId}/keywords | Delete keywords |
| [**sponsoredProductAdsV1DeleteTargets()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1DeleteTargets) | **DELETE** /v1/sponsored-product-ads/campaigns/{campaignId}/targets | Delete targets |
| [**sponsoredProductAdsV1GetCampaign()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetCampaign) | **GET** /v1/sponsored-product-ads/campaigns/{campaignId} | Get campaign |
| [**sponsoredProductAdsV1GetCampaignKeywords()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetCampaignKeywords) | **GET** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId}/keywords | Get keywords |
| [**sponsoredProductAdsV1GetCampaignTargets()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetCampaignTargets) | **GET** /v1/sponsored-product-ads/campaigns/{campaignId}/targets | Get targets |
| [**sponsoredProductAdsV1GetCampaigns()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetCampaigns) | **GET** /v1/sponsored-product-ads/campaigns | Get campaigns |
| [**sponsoredProductAdsV1GetChangeRequest()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetChangeRequest) | **GET** /v1/sponsored-product-ads/change-requests/{requestId} | Get change request |
| [**sponsoredProductAdsV1GetKeyword()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetKeyword) | **GET** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId}/keywords/{keywordId} | Get keyword |
| [**sponsoredProductAdsV1GetTarget()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1GetTarget) | **GET** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId} | Get target |
| [**sponsoredProductAdsV1UpdateCampaign()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1UpdateCampaign) | **PATCH** /v1/sponsored-product-ads/campaigns/{campaignId} | Update campaign |
| [**sponsoredProductAdsV1UpdateKeywords()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1UpdateKeywords) | **PATCH** /v1/sponsored-product-ads/campaigns/{campaignId}/targets/{targetId}/keywords | Update keywords |
| [**sponsoredProductAdsV1UpdateTargets()**](SponsoredProductAdsV1Api.md#sponsoredProductAdsV1UpdateTargets) | **PATCH** /v1/sponsored-product-ads/campaigns/{campaignId}/targets | Update targets |


## `sponsoredProductAdsV1CreateCampaign()`

```php
sponsoredProductAdsV1CreateCampaign($create_campaign_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\CreateCampaignResponseSponsoredProductAdsV1
```

Create campaign

Creates a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_campaign_request_sponsored_product_ads_v1 = new \OpenAPI\Client\Model\CreateCampaignRequestSponsoredProductAdsV1(); // \OpenAPI\Client\Model\CreateCampaignRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1CreateCampaign($create_campaign_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1CreateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_campaign_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\CreateCampaignRequestSponsoredProductAdsV1**](../Model/CreateCampaignRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateCampaignResponseSponsoredProductAdsV1**](../Model/CreateCampaignResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1CreateKeywords()`

```php
sponsoredProductAdsV1CreateKeywords($campaign_id, $target_id, $create_keywords_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1
```

Create keywords

Creates one or more keywords for the target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.
$create_keywords_request_sponsored_product_ads_v1 = new \OpenAPI\Client\Model\CreateKeywordsRequestSponsoredProductAdsV1(); // \OpenAPI\Client\Model\CreateKeywordsRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1CreateKeywords($campaign_id, $target_id, $create_keywords_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1CreateKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |
| **create_keywords_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\CreateKeywordsRequestSponsoredProductAdsV1**](../Model/CreateKeywordsRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1**](../Model/KeywordWriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1CreateTargets()`

```php
sponsoredProductAdsV1CreateTargets($campaign_id, $create_targets_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\CreateTargetsResponseSponsoredProductAdsV1
```

Create targets

Creates one or more targets for the campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$create_targets_request_sponsored_product_ads_v1 = new \OpenAPI\Client\Model\CreateTargetsRequestSponsoredProductAdsV1(); // \OpenAPI\Client\Model\CreateTargetsRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1CreateTargets($campaign_id, $create_targets_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1CreateTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **create_targets_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\CreateTargetsRequestSponsoredProductAdsV1**](../Model/CreateTargetsRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateTargetsResponseSponsoredProductAdsV1**](../Model/CreateTargetsResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1DeleteKeywords()`

```php
sponsoredProductAdsV1DeleteKeywords($campaign_id, $target_id, $keyword_ids): \OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1
```

Delete keywords

Deletes one or more keywords.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.
$keyword_ids = ["00000003-0000-4000-8000-000000000003"]; // string[] | One or more keyword IDs to delete. Repeat the parameter for multiple values (e.g. `?keywordIds=X&keywordIds=Y`).

try {
    $result = $apiInstance->sponsoredProductAdsV1DeleteKeywords($campaign_id, $target_id, $keyword_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1DeleteKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |
| **keyword_ids** | [**string[]**](../Model/string.md)| One or more keyword IDs to delete. Repeat the parameter for multiple values (e.g. &#x60;?keywordIds&#x3D;X&amp;keywordIds&#x3D;Y&#x60;). | |

### Return type

[**\OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1**](../Model/KeywordWriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1DeleteTargets()`

```php
sponsoredProductAdsV1DeleteTargets($campaign_id, $target_ids): \OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1
```

Delete targets

Deletes one or more targets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_ids = ["00000002-0000-4000-8000-000000000002"]; // string[] | One or more target IDs to delete. Repeat the parameter for multiple values (e.g. `?targetIds=X&targetIds=Y`).

try {
    $result = $apiInstance->sponsoredProductAdsV1DeleteTargets($campaign_id, $target_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1DeleteTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_ids** | [**string[]**](../Model/string.md)| One or more target IDs to delete. Repeat the parameter for multiple values (e.g. &#x60;?targetIds&#x3D;X&amp;targetIds&#x3D;Y&#x60;). | |

### Return type

[**\OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1**](../Model/WriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetCampaign()`

```php
sponsoredProductAdsV1GetCampaign($campaign_id): \OpenAPI\Client\Model\CampaignDTOSponsoredProductAdsV1
```

Get campaign

Retrieve details of a specific campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.

try {
    $result = $apiInstance->sponsoredProductAdsV1GetCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |

### Return type

[**\OpenAPI\Client\Model\CampaignDTOSponsoredProductAdsV1**](../Model/CampaignDTOSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetCampaignKeywords()`

```php
sponsoredProductAdsV1GetCampaignKeywords($campaign_id, $target_id, $cursor, $limit): \OpenAPI\Client\Model\PaginatedKeywordsResponseSponsoredProductAdsV1
```

Get keywords

Retrieve a paginated list of keywords for one target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.
$cursor = eyJjcmVhdGVkQXQi...; // string | Opaque cursor for pagination. Use the value of `nextCursor` or `prevCursor` from the previous response.
$limit = 100; // int | Results per page (max 1000)

try {
    $result = $apiInstance->sponsoredProductAdsV1GetCampaignKeywords($campaign_id, $target_id, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetCampaignKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |
| **cursor** | **string**| Opaque cursor for pagination. Use the value of &#x60;nextCursor&#x60; or &#x60;prevCursor&#x60; from the previous response. | [optional] |
| **limit** | **int**| Results per page (max 1000) | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PaginatedKeywordsResponseSponsoredProductAdsV1**](../Model/PaginatedKeywordsResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetCampaignTargets()`

```php
sponsoredProductAdsV1GetCampaignTargets($campaign_id, $cursor, $limit): \OpenAPI\Client\Model\PaginatedTargetsResponseSponsoredProductAdsV1
```

Get targets

Retrieve a paginated list of targets with keywords and bids for one campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$cursor = eyJjcmVhdGVkQXQi...; // string | Opaque cursor for pagination. Use the value of `nextCursor` or `prevCursor` from the previous response.
$limit = 100; // int | Results per page (max 1000)

try {
    $result = $apiInstance->sponsoredProductAdsV1GetCampaignTargets($campaign_id, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetCampaignTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **cursor** | **string**| Opaque cursor for pagination. Use the value of &#x60;nextCursor&#x60; or &#x60;prevCursor&#x60; from the previous response. | [optional] |
| **limit** | **int**| Results per page (max 1000) | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PaginatedTargetsResponseSponsoredProductAdsV1**](../Model/PaginatedTargetsResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetCampaigns()`

```php
sponsoredProductAdsV1GetCampaigns($cursor, $limit): \OpenAPI\Client\Model\PaginatedCampaignsResponseSponsoredProductAdsV1
```

Get campaigns

Retrieve a paginated list of campaigns for the authenticated partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = eyJjcmVhdGVkQXQi...; // string | Opaque cursor for pagination. Use the value of `nextCursor` or `prevCursor` from the previous response.
$limit = 100; // int | Results per page (max 1000)

try {
    $result = $apiInstance->sponsoredProductAdsV1GetCampaigns($cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Opaque cursor for pagination. Use the value of &#x60;nextCursor&#x60; or &#x60;prevCursor&#x60; from the previous response. | [optional] |
| **limit** | **int**| Results per page (max 1000) | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\PaginatedCampaignsResponseSponsoredProductAdsV1**](../Model/PaginatedCampaignsResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetChangeRequest()`

```php
sponsoredProductAdsV1GetChangeRequest($request_id): \OpenAPI\Client\Model\ChangeRequestResponseSponsoredProductAdsV1
```

Get change request

Retrieve the current status and details of a change request. Use this endpoint to check whether a previously submitted write operation was accepted or rejected, and to obtain the rejection reason if applicable.  Common rejection reasons: - `\"The specified SKU does not exist in the product catalog.\"` — SKU provided in a target creation was not found in OTTO's product catalog. - `\"The partner account is blocked and cannot create or modify campaigns.\"` — the partner has been blocked; no write operations will be processed until the block is lifted. - `\"An internal error occurred while processing the request. Please retry.\"` — transient internal failure; the entity was not modified and the request can be safely retried.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = 00000004-0000-4000-8000-000000000004; // string | Unique change request identifier.

try {
    $result = $apiInstance->sponsoredProductAdsV1GetChangeRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetChangeRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| Unique change request identifier. | |

### Return type

[**\OpenAPI\Client\Model\ChangeRequestResponseSponsoredProductAdsV1**](../Model/ChangeRequestResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetKeyword()`

```php
sponsoredProductAdsV1GetKeyword($campaign_id, $target_id, $keyword_id): \OpenAPI\Client\Model\KeywordDTOSponsoredProductAdsV1
```

Get keyword

Retrieve details of a specific keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.
$keyword_id = 00000003-0000-4000-8000-000000000003; // string | Unique keyword identifier.

try {
    $result = $apiInstance->sponsoredProductAdsV1GetKeyword($campaign_id, $target_id, $keyword_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |
| **keyword_id** | **string**| Unique keyword identifier. | |

### Return type

[**\OpenAPI\Client\Model\KeywordDTOSponsoredProductAdsV1**](../Model/KeywordDTOSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1GetTarget()`

```php
sponsoredProductAdsV1GetTarget($campaign_id, $target_id): \OpenAPI\Client\Model\TargetDTOSponsoredProductAdsV1
```

Get target

Retrieve details of a specific target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.

try {
    $result = $apiInstance->sponsoredProductAdsV1GetTarget($campaign_id, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1GetTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |

### Return type

[**\OpenAPI\Client\Model\TargetDTOSponsoredProductAdsV1**](../Model/TargetDTOSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1UpdateCampaign()`

```php
sponsoredProductAdsV1UpdateCampaign($campaign_id, $patch_campaign_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1
```

Update campaign

Partially updates a campaign using [JSON Merge Patch (RFC 7386)](https://datatracker.ietf.org/doc/html/rfc7386). Only include the fields you want to change; omitted fields remain unchanged. Setting a nullable field to `null` clears its value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$patch_campaign_request_sponsored_product_ads_v1 = {"name":"My updated campaign name","status":"PAUSED"}; // \OpenAPI\Client\Model\PatchCampaignRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1UpdateCampaign($campaign_id, $patch_campaign_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1UpdateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **patch_campaign_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\PatchCampaignRequestSponsoredProductAdsV1**](../Model/PatchCampaignRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1**](../Model/WriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1UpdateKeywords()`

```php
sponsoredProductAdsV1UpdateKeywords($campaign_id, $target_id, $update_keywords_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1
```

Update keywords

Updates one or more keywords using [JSON Merge Patch (RFC 7386)](https://datatracker.ietf.org/doc/html/rfc7386) semantics. For each item in `keywords`, only include the fields you want to change alongside `keywordId`; omitted fields remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$target_id = 00000002-0000-4000-8000-000000000002; // string | Unique target identifier.
$update_keywords_request_sponsored_product_ads_v1 = {"keywords":[{"keywordId":"00000003-0000-4000-8000-000000000003","bid":{"amount":75,"currency":"EUR"}}]}; // \OpenAPI\Client\Model\UpdateKeywordsRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1UpdateKeywords($campaign_id, $target_id, $update_keywords_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1UpdateKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **target_id** | **string**| Unique target identifier. | |
| **update_keywords_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\UpdateKeywordsRequestSponsoredProductAdsV1**](../Model/UpdateKeywordsRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\KeywordWriteOperationResponseSponsoredProductAdsV1**](../Model/KeywordWriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsV1UpdateTargets()`

```php
sponsoredProductAdsV1UpdateTargets($campaign_id, $update_targets_request_sponsored_product_ads_v1): \OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1
```

Update targets

Updates one or more targets using [JSON Merge Patch (RFC 7386)](https://datatracker.ietf.org/doc/html/rfc7386) semantics. For each item in `targets`, only include the fields you want to change alongside `targetId`; omitted fields remain unchanged. Only targets for a campaign with campaign type `AUTOMATIC` can be updated, as targets with campaign type `MANUAL` only contain the immutable `sku` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 00000001-0000-4000-8000-000000000001; // string | Unique campaign identifier.
$update_targets_request_sponsored_product_ads_v1 = {"targets":[{"targetId":"00000002-0000-4000-8000-000000000002","bid":{"amount":150,"currency":"EUR"}}]}; // \OpenAPI\Client\Model\UpdateTargetsRequestSponsoredProductAdsV1

try {
    $result = $apiInstance->sponsoredProductAdsV1UpdateTargets($campaign_id, $update_targets_request_sponsored_product_ads_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsV1Api->sponsoredProductAdsV1UpdateTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign identifier. | |
| **update_targets_request_sponsored_product_ads_v1** | [**\OpenAPI\Client\Model\UpdateTargetsRequestSponsoredProductAdsV1**](../Model/UpdateTargetsRequestSponsoredProductAdsV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WriteOperationResponseSponsoredProductAdsV1**](../Model/WriteOperationResponseSponsoredProductAdsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

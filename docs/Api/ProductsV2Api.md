# OpenAPI\Client\ProductsV2Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsV2CreateOrUpdateProductVariations()**](ProductsV2Api.md#productsV2CreateOrUpdateProductVariations) | **POST** /v2/products | Create or update product variations |
| [**productsV2FailedByProcessId()**](ProductsV2Api.md#productsV2FailedByProcessId) | **GET** /v2/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery |
| [**productsV2GetActiveStatus()**](ProductsV2Api.md#productsV2GetActiveStatus) | **GET** /v2/products/active-status | Read active status |
| [**productsV2GetBrands()**](ProductsV2Api.md#productsV2GetBrands) | **GET** /v2/products/brands | List of allowed brands |
| [**productsV2GetCategoryGroups()**](ProductsV2Api.md#productsV2GetCategoryGroups) | **GET** /v2/products/categories | Read product categories |
| [**productsV2GetContentChanges()**](ProductsV2Api.md#productsV2GetContentChanges) | **GET** /v2/products/{sku}/content-changes | Read content changes for a single product variation |
| [**productsV2GetContentChanges2()**](ProductsV2Api.md#productsV2GetContentChanges2) | **GET** /v2/products/content-changes | Read content changes within time period |
| [**productsV2GetMarketPlaceStatus()**](ProductsV2Api.md#productsV2GetMarketPlaceStatus) | **GET** /v2/products/{sku}/marketplace-status | Read marketplace status for a single product variation |
| [**productsV2GetMarketPlaceStatusList()**](ProductsV2Api.md#productsV2GetMarketPlaceStatusList) | **GET** /v2/products/marketplace-status | Read marketplace status of product variations |
| [**productsV2GetPartnerProducts()**](ProductsV2Api.md#productsV2GetPartnerProducts) | **GET** /v2/products | Read product variations |
| [**productsV2GetProductVariation()**](ProductsV2Api.md#productsV2GetProductVariation) | **GET** /v2/products/{sku} | Read a single product variation |
| [**productsV2GetProductVariationPrice()**](ProductsV2Api.md#productsV2GetProductVariationPrice) | **GET** /v2/products/{sku}/prices | Read product variations prices |
| [**productsV2GetProductVariationPrices()**](ProductsV2Api.md#productsV2GetProductVariationPrices) | **GET** /v2/products/prices | Read product variations prices |
| [**productsV2GetVariationActiveStatus()**](ProductsV2Api.md#productsV2GetVariationActiveStatus) | **GET** /v2/products/{sku}/active-status | Read the active status of a single product variation |
| [**productsV2ProgressByProcessId()**](ProductsV2Api.md#productsV2ProgressByProcessId) | **GET** /v2/products/update-tasks/{processUuid} | Request the results of a product data delivery |
| [**productsV2SucceededByProcessId()**](ProductsV2Api.md#productsV2SucceededByProcessId) | **GET** /v2/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery |
| [**productsV2UnchangedByProcessId()**](ProductsV2Api.md#productsV2UnchangedByProcessId) | **GET** /v2/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery |
| [**productsV2UpdateActiveStatus()**](ProductsV2Api.md#productsV2UpdateActiveStatus) | **POST** /v2/products/active-status | Update active status |
| [**productsV2UpdateProductVariationPrices()**](ProductsV2Api.md#productsV2UpdateProductVariationPrices) | **POST** /v2/products/prices | Update product variation prices |


## `productsV2CreateOrUpdateProductVariations()`

```php
productsV2CreateOrUpdateProductVariations($x_request_timestamp, $product_variation_products_v2): \OpenAPI\Client\Model\ProductProcessProgressProductsV2
```

Create or update product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp
$product_variation_products_v2 = array(new \OpenAPI\Client\Model\ProductVariationProductsV2()); // \OpenAPI\Client\Model\ProductVariationProductsV2[]

try {
    $result = $apiInstance->productsV2CreateOrUpdateProductVariations($x_request_timestamp, $product_variation_products_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2CreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional] |
| **product_variation_products_v2** | [**\OpenAPI\Client\Model\ProductVariationProductsV2[]**](../Model/ProductVariationProductsV2.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2FailedByProcessId()`

```php
productsV2FailedByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV2
```

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2FailedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2FailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetActiveStatus()`

```php
productsV2GetActiveStatus($sku, $product_reference, $category, $brand, $page, $limit): \OpenAPI\Client\Model\ActiveStatusListResponseProductsV2
```

Read active status

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space. Replaces corresponding online-status endpoint which now is marked as deprecated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand = 'brand_example'; // string | search for product variations by their brand value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetActiveStatus($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand** | **string**| search for product variations by their brand value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ActiveStatusListResponseProductsV2**](../Model/ActiveStatusListResponseProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetBrands()`

```php
productsV2GetBrands(): \OpenAPI\Client\Model\BrandProductsV2[]
```

List of allowed brands

Read the list of brands that are known on the Otto market place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productsV2GetBrands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BrandProductsV2[]**](../Model/BrandProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetCategoryGroups()`

```php
productsV2GetCategoryGroups($page, $limit): \OpenAPI\Client\Model\CategoryGroupsProductsV2
```

Read product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)

try {
    $result = $apiInstance->productsV2GetCategoryGroups($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryGroupsProductsV2**](../Model/CategoryGroupsProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetContentChanges()`

```php
productsV2GetContentChanges($sku, $from_date, $page, $limit): \OpenAPI\Client\Model\ContentChangesApiResultProductsV2
```

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of entries per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetContentChanges($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetContentChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |
| **from_date** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of entries per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentChangesApiResultProductsV2**](../Model/ContentChangesApiResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetContentChanges2()`

```php
productsV2GetContentChanges2($sku, $from_date, $page, $limit): \OpenAPI\Client\Model\ContentChangesApiResultProductsV2
```

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = array('sku_example'); // string[] | search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash ('/') or dot ('.') characters. You may separate multiple sku values by comma or state each one with a &sku= in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &sku= at the end of the query string or use the other endpoint.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of content changes per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetContentChanges2($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetContentChanges2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | [**string[]**](../Model/string.md)| search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. You may separate multiple sku values by comma or state each one with a &amp;sku&#x3D; in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &amp;sku&#x3D; at the end of the query string or use the other endpoint. | [optional] |
| **from_date** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of content changes per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentChangesApiResultProductsV2**](../Model/ContentChangesApiResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetMarketPlaceStatus()`

```php
productsV2GetMarketPlaceStatus($sku): \OpenAPI\Client\Model\MarketPlaceStatusProductsV2
```

Read marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV2GetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a marketplace status by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\MarketPlaceStatusProductsV2**](../Model/MarketPlaceStatusProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetMarketPlaceStatusList()`

```php
productsV2GetMarketPlaceStatusList($sku, $product_reference, $category, $brand, $from_date, $page, $limit, $market_place_status): \OpenAPI\Client\Model\MarketPlaceStatusApiResultProductsV2
```

Read marketplace status of product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search marketplace status by the productReference value of the related product variations
$category = 'category_example'; // string | search marketplace status by the category value of the related product variations
$brand = 'brand_example'; // string | search marketplace status by the brand value of the related product variations
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | search marketplace status for a time range starting with the given date (in ISO8601, like '2021-10-09T07:52:19.820Z' or '2021-10-09T07:52:19.820+01:00')
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$market_place_status = array('market_place_status_example'); // string[] | only include items that match any of the provided status

try {
    $result = $apiInstance->productsV2GetMarketPlaceStatusList($sku, $product_reference, $category, $brand, $from_date, $page, $limit, $market_place_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search marketplace status by the productReference value of the related product variations | [optional] |
| **category** | **string**| search marketplace status by the category value of the related product variations | [optional] |
| **brand** | **string**| search marketplace status by the brand value of the related product variations | [optional] |
| **from_date** | **\DateTime**| search marketplace status for a time range starting with the given date (in ISO8601, like &#39;2021-10-09T07:52:19.820Z&#39; or &#39;2021-10-09T07:52:19.820+01:00&#39;) | [optional] |
| **page** | **int**| page to load | [optional] |
| **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional] |
| **market_place_status** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketPlaceStatusApiResultProductsV2**](../Model/MarketPlaceStatusApiResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetPartnerProducts()`

```php
productsV2GetPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit): \OpenAPI\Client\Model\ProductVariationApiResultProductsV2
```

Read product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand = 'brand_example'; // string | search for product variations by their brand value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetPartnerProducts($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetPartnerProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand** | **string**| search for product variations by their brand value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductVariationApiResultProductsV2**](../Model/ProductVariationApiResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetProductVariation()`

```php
productsV2GetProductVariation($sku): \OpenAPI\Client\Model\ProductVariationProductsV2
```

Read a single product variation

Returns a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\ProductVariationProductsV2**](../Model/ProductVariationProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetProductVariationPrice()`

```php
productsV2GetProductVariationPrice($sku): \OpenAPI\Client\Model\SkuPricingProductsV2
```

Read product variations prices

Read the price data of a single product variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\SkuPricingProductsV2**](../Model/SkuPricingProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetProductVariationPrices()`

```php
productsV2GetProductVariationPrices($sku, $product_reference, $category, $brand, $page, $limit): \OpenAPI\Client\Model\PriceApiResultProductsV2
```

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand = 'brand_example'; // string | search for product variations by their brand value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV2GetProductVariationPrices($sku, $product_reference, $category, $brand, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand** | **string**| search for product variations by their brand value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PriceApiResultProductsV2**](../Model/PriceApiResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2GetVariationActiveStatus()`

```php
productsV2GetVariationActiveStatus($sku): \OpenAPI\Client\Model\ActiveStatusProductsV2
```

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV2GetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2GetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\ActiveStatusProductsV2**](../Model/ActiveStatusProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2ProgressByProcessId()`

```php
productsV2ProgressByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessProgressProductsV2
```

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV2ProgressByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2ProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for a product data delivery result by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2SucceededByProcessId()`

```php
productsV2SucceededByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV2
```

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2SucceededByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2SucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2UnchangedByProcessId()`

```php
productsV2UnchangedByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV2
```

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV2UnchangedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV2**](../Model/ProductProcessResultProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2UpdateActiveStatus()`

```php
productsV2UpdateActiveStatus($x_request_timestamp, $active_status_list_request_products_v2): \OpenAPI\Client\Model\ProductProcessProgressProductsV2
```

Update active status

Returns a process-id to query results. The limit for the number of product active statuses in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$active_status_list_request_products_v2 = new \OpenAPI\Client\Model\ActiveStatusListRequestProductsV2(); // \OpenAPI\Client\Model\ActiveStatusListRequestProductsV2

try {
    $result = $apiInstance->productsV2UpdateActiveStatus($x_request_timestamp, $active_status_list_request_products_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **active_status_list_request_products_v2** | [**\OpenAPI\Client\Model\ActiveStatusListRequestProductsV2**](../Model/ActiveStatusListRequestProductsV2.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV2UpdateProductVariationPrices()`

```php
productsV2UpdateProductVariationPrices($x_request_timestamp, $sku_pricing_products_v2): \OpenAPI\Client\Model\ProductProcessProgressProductsV2
```

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Holds the client side update request timestamp
$sku_pricing_products_v2 = array(new \OpenAPI\Client\Model\SkuPricingProductsV2()); // \OpenAPI\Client\Model\SkuPricingProductsV2[]

try {
    $result = $apiInstance->productsV2UpdateProductVariationPrices($x_request_timestamp, $sku_pricing_products_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV2Api->productsV2UpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **\DateTime**| Holds the client side update request timestamp | [optional] |
| **sku_pricing_products_v2** | [**\OpenAPI\Client\Model\SkuPricingProductsV2[]**](../Model/SkuPricingProductsV2.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV2**](../Model/ProductProcessProgressProductsV2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPI\Client\ProductsV5Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsV5CreateOrUpdateProductVariations()**](ProductsV5Api.md#productsV5CreateOrUpdateProductVariations) | **POST** /v5/products | Create or update product variations |
| [**productsV5FailedByProcessId()**](ProductsV5Api.md#productsV5FailedByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery |
| [**productsV5GetActiveStatus()**](ProductsV5Api.md#productsV5GetActiveStatus) | **GET** /v5/products/active-status | Read active status |
| [**productsV5GetBrands()**](ProductsV5Api.md#productsV5GetBrands) | **GET** /v5/products/brands | List of allowed brands |
| [**productsV5GetCategoryGroups()**](ProductsV5Api.md#productsV5GetCategoryGroups) | **GET** /v5/products/categories | Read product categories |
| [**productsV5GetContentChanges()**](ProductsV5Api.md#productsV5GetContentChanges) | **GET** /v5/products/{sku}/content-changes | Read content changes for a single product variation |
| [**productsV5GetContentChanges2()**](ProductsV5Api.md#productsV5GetContentChanges2) | **GET** /v5/products/content-changes | Read content changes within time period |
| [**productsV5GetMarketPlaceStatus()**](ProductsV5Api.md#productsV5GetMarketPlaceStatus) | **GET** /v5/products/{sku}/marketplace-status | Read marketplace status for a single product variation |
| [**productsV5GetMarketPlaceStatusList()**](ProductsV5Api.md#productsV5GetMarketPlaceStatusList) | **GET** /v5/products/marketplace-status | Read marketplace status of product variations |
| [**productsV5GetPartnerProducts()**](ProductsV5Api.md#productsV5GetPartnerProducts) | **GET** /v5/products | Read product variations |
| [**productsV5GetProductVariation()**](ProductsV5Api.md#productsV5GetProductVariation) | **GET** /v5/products/{sku} | Read a single product variation |
| [**productsV5GetProductVariationPrice()**](ProductsV5Api.md#productsV5GetProductVariationPrice) | **GET** /v5/products/{sku}/prices | Read a single product variation price |
| [**productsV5GetProductVariationPrices()**](ProductsV5Api.md#productsV5GetProductVariationPrices) | **GET** /v5/products/prices | Read product variations prices |
| [**productsV5GetVariationActiveStatus()**](ProductsV5Api.md#productsV5GetVariationActiveStatus) | **GET** /v5/products/{sku}/active-status | Read the active status of a single product variation |
| [**productsV5ProgressByProcessId()**](ProductsV5Api.md#productsV5ProgressByProcessId) | **GET** /v5/products/update-tasks/{processUuid} | Request the results of a product data delivery |
| [**productsV5SucceededByProcessId()**](ProductsV5Api.md#productsV5SucceededByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery |
| [**productsV5UnchangedByProcessId()**](ProductsV5Api.md#productsV5UnchangedByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery |
| [**productsV5UpdateActiveStatus()**](ProductsV5Api.md#productsV5UpdateActiveStatus) | **POST** /v5/products/active-status | Update active status |
| [**productsV5UpdateProductVariationPrices()**](ProductsV5Api.md#productsV5UpdateProductVariationPrices) | **POST** /v5/products/prices | Update product variation prices |


## `productsV5CreateOrUpdateProductVariations()`

```php
productsV5CreateOrUpdateProductVariations($x_request_timestamp, $product_variation_products_v5): \OpenAPI\Client\Model\ProductProcessProgressProductsV5
```

Create or update product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$product_variation_products_v5 = array(new \OpenAPI\Client\Model\ProductVariationProductsV5()); // \OpenAPI\Client\Model\ProductVariationProductsV5[]

try {
    $result = $apiInstance->productsV5CreateOrUpdateProductVariations($x_request_timestamp, $product_variation_products_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5CreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **product_variation_products_v5** | [**\OpenAPI\Client\Model\ProductVariationProductsV5[]**](../Model/ProductVariationProductsV5.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV5**](../Model/ProductProcessProgressProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5FailedByProcessId()`

```php
productsV5FailedByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV5
```

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5FailedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5FailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV5**](../Model/ProductProcessResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetActiveStatus()`

```php
productsV5GetActiveStatus($sku, $product_reference, $category, $brand_id, $page, $limit): \OpenAPI\Client\Model\ActiveStatusListResponseProductsV5
```

Read active status

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand_id = 'brand_id_example'; // string | search for product variations by their brand ID value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->productsV5GetActiveStatus($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand_id** | **string**| search for product variations by their brand ID value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ActiveStatusListResponseProductsV5**](../Model/ActiveStatusListResponseProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetBrands()`

```php
productsV5GetBrands($if_match, $if_none_match, $if_modified_since, $if_unmodified_since, $page, $limit): \OpenAPI\Client\Model\BrandListResponseProductsV5
```

List of allowed brands

Read the list of brands that are known on the Otto market place. The list of brands will be paginated. Brands consist of a name, a brand Id, a (link to a) logo and a boolean useable that lets you know wheter you are allowed to set up variants with this brand on the Otto Marketplace. The default page length is 100 entries per response, the page size upper limit is 1000. The links specified in the result can be used to page through the total result space. Note that there will be no prev link on the first page and no next link on the last page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_match = 7da7a728f910; // string | The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1).
$if_none_match = 7da7a728f910; // string | The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is `*`, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2)
$if_modified_since = Sat, 29 Oct 1994 19:43:31 GMT; // string | The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation's modification date being more recent than the date provided in the field-value. Transfer of the selected representation's data is avoided if that data has not changed.
$if_unmodified_since = Sat, 29 Oct 1994 19:43:31 GMT; // string | The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation's last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation.
$page = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->productsV5GetBrands($if_match, $if_none_match, $if_modified_since, $if_unmodified_since, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **if_match** | **string**| The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1). | [optional] |
| **if_none_match** | **string**| The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is &#x60;*&#x60;, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2) | [optional] |
| **if_modified_since** | **string**| The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation&#39;s modification date being more recent than the date provided in the field-value. Transfer of the selected representation&#39;s data is avoided if that data has not changed. | [optional] |
| **if_unmodified_since** | **string**| The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation&#39;s last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BrandListResponseProductsV5**](../Model/BrandListResponseProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetCategoryGroups()`

```php
productsV5GetCategoryGroups($page, $limit, $category): \OpenAPI\Client\Model\CategoryGroupsProductsV5
```

Read product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | the number (starting with 0) of the page, that should be delivered.
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)
$category = 'category_example'; // string | read a single category

try {
    $result = $apiInstance->productsV5GetCategoryGroups($page, $limit, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| the number (starting with 0) of the page, that should be delivered. | [optional] |
| **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional] |
| **category** | **string**| read a single category | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryGroupsProductsV5**](../Model/CategoryGroupsProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetContentChanges()`

```php
productsV5GetContentChanges($sku, $from_date, $page, $limit): \OpenAPI\Client\Model\ContentChangesApiResultProductsV5
```

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of entries per response page (at most 100)

try {
    $result = $apiInstance->productsV5GetContentChanges($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetContentChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |
| **from_date** | **\DateTime**| search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of entries per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContentChangesApiResultProductsV5**](../Model/ContentChangesApiResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetContentChanges2()`

```php
productsV5GetContentChanges2($sku, $from_date, $page, $limit): \OpenAPI\Client\Model\ContentChangesApiResultProductsV5
```

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = array('sku_example'); // string[] | search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash ('/') or dot ('.') characters. You may separate multiple sku values by comma or state each one with a &sku= in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &sku= at the end of the query string or use the other endpoint.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of content changes per response page (at most 100)

try {
    $result = $apiInstance->productsV5GetContentChanges2($sku, $from_date, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetContentChanges2: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ContentChangesApiResultProductsV5**](../Model/ContentChangesApiResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetMarketPlaceStatus()`

```php
productsV5GetMarketPlaceStatus($sku): \OpenAPI\Client\Model\MarketPlaceStatusProductsV5
```

Read marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV5GetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a marketplace status by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\MarketPlaceStatusProductsV5**](../Model/MarketPlaceStatusProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetMarketPlaceStatusList()`

```php
productsV5GetMarketPlaceStatusList($sku, $product_reference, $category, $brand_id, $from_date, $page, $limit, $market_place_status, $sort_order): \OpenAPI\Client\Model\MarketPlaceStatusApiResultProductsV5
```

Read marketplace status of product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search marketplace status by the productReference value of the related product variations
$category = 'category_example'; // string | search marketplace status by the category value of the related product variations
$brand_id = 'brand_id_example'; // string | search marketplace status by the brand ID value of the related product variations
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search marketplace status for a time range starting with the given date (in ISO8601, like '2021-10-09T07:52:19.820Z' or '2021-10-09T07:52:19.820+01:00')
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$market_place_status = array('market_place_status_example'); // string[] | only include items that match any of the provided status
$sort_order = 'sort_order_example'; // string | Define the sort order of the resulting entries. Available values are 'desc' for 'newest lastModified first' and 'asc' for 'oldest lastModified first' - default is 'desc'

try {
    $result = $apiInstance->productsV5GetMarketPlaceStatusList($sku, $product_reference, $category, $brand_id, $from_date, $page, $limit, $market_place_status, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search marketplace status by the productReference value of the related product variations | [optional] |
| **category** | **string**| search marketplace status by the category value of the related product variations | [optional] |
| **brand_id** | **string**| search marketplace status by the brand ID value of the related product variations | [optional] |
| **from_date** | **\DateTime**| search marketplace status for a time range starting with the given date (in ISO8601, like &#39;2021-10-09T07:52:19.820Z&#39; or &#39;2021-10-09T07:52:19.820+01:00&#39;) | [optional] |
| **page** | **int**| page to load | [optional] |
| **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional] |
| **market_place_status** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional] |
| **sort_order** | **string**| Define the sort order of the resulting entries. Available values are &#39;desc&#39; for &#39;newest lastModified first&#39; and &#39;asc&#39; for &#39;oldest lastModified first&#39; - default is &#39;desc&#39; | [optional] |

### Return type

[**\OpenAPI\Client\Model\MarketPlaceStatusApiResultProductsV5**](../Model/MarketPlaceStatusApiResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetPartnerProducts()`

```php
productsV5GetPartnerProducts($sku, $product_reference, $category, $brand_id, $page, $limit): \OpenAPI\Client\Model\ProductVariationApiResultProductsV5
```

Read product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand_id = 'brand_id_example'; // string | search for product variations by their brandId value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV5GetPartnerProducts($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetPartnerProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand_id** | **string**| search for product variations by their brandId value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductVariationApiResultProductsV5**](../Model/ProductVariationApiResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetProductVariation()`

```php
productsV5GetProductVariation($sku): \OpenAPI\Client\Model\ProductVariationProductsV5
```

Read a single product variation

Returns a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5GetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetProductVariation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\ProductVariationProductsV5**](../Model/ProductVariationProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetProductVariationPrice()`

```php
productsV5GetProductVariationPrice($sku): \OpenAPI\Client\Model\SkuPricingProductsV5
```

Read a single product variation price

Read the price data of a single product variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5GetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\SkuPricingProductsV5**](../Model/SkuPricingProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetProductVariationPrices()`

```php
productsV5GetProductVariationPrices($sku, $product_reference, $category, $brand_id, $page, $limit): \OpenAPI\Client\Model\PriceApiResultProductsV5
```

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$product_reference = 'product_reference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brand_id = 'brand_id_example'; // string | search for product variations by their ID value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV5GetProductVariationPrices($sku, $product_reference, $category, $brand_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **product_reference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brand_id** | **string**| search for product variations by their ID value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PriceApiResultProductsV5**](../Model/PriceApiResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5GetVariationActiveStatus()`

```php
productsV5GetVariationActiveStatus($sku): \OpenAPI\Client\Model\ActiveStatusProductsV5
```

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5GetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5GetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Model\ActiveStatusProductsV5**](../Model/ActiveStatusProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5ProgressByProcessId()`

```php
productsV5ProgressByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessProgressProductsV5
```

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV5ProgressByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5ProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for a product data delivery result by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV5**](../Model/ProductProcessProgressProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SucceededByProcessId()`

```php
productsV5SucceededByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV5
```

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5SucceededByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV5**](../Model/ProductProcessResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5UnchangedByProcessId()`

```php
productsV5UnchangedByProcessId($process_uuid): \OpenAPI\Client\Model\ProductProcessResultProductsV5
```

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 'process_uuid_example'; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5UnchangedByProcessId($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5UnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_uuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Model\ProductProcessResultProductsV5**](../Model/ProductProcessResultProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5UpdateActiveStatus()`

```php
productsV5UpdateActiveStatus($x_request_timestamp, $active_status_list_request_products_v5): \OpenAPI\Client\Model\ProductProcessProgressProductsV5
```

Update active status

Returns a process-id to query results. The limit for the number of product active statuses in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$active_status_list_request_products_v5 = new \OpenAPI\Client\Model\ActiveStatusListRequestProductsV5(); // \OpenAPI\Client\Model\ActiveStatusListRequestProductsV5

try {
    $result = $apiInstance->productsV5UpdateActiveStatus($x_request_timestamp, $active_status_list_request_products_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5UpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **active_status_list_request_products_v5** | [**\OpenAPI\Client\Model\ActiveStatusListRequestProductsV5**](../Model/ActiveStatusListRequestProductsV5.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV5**](../Model/ProductProcessProgressProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5UpdateProductVariationPrices()`

```php
productsV5UpdateProductVariationPrices($x_request_timestamp, $sku_pricing_products_v5): \OpenAPI\Client\Model\ProductProcessProgressProductsV5
```

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_timestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$sku_pricing_products_v5 = array(new \OpenAPI\Client\Model\SkuPricingProductsV5()); // \OpenAPI\Client\Model\SkuPricingProductsV5[]

try {
    $result = $apiInstance->productsV5UpdateProductVariationPrices($x_request_timestamp, $sku_pricing_products_v5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5UpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_timestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **sku_pricing_products_v5** | [**\OpenAPI\Client\Model\SkuPricingProductsV5[]**](../Model/SkuPricingProductsV5.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductProcessProgressProductsV5**](../Model/ProductProcessProgressProductsV5.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPI\Client\SponsoredProductAdsReportingV1Api



All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost) | **POST** /v1/spa-reporting/campaign-performance | Create Campaign Performance Report |
| [**sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost) | **POST** /v1/spa-reporting/keyword-performance | Create Keyword Performance Report |
| [**sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost) | **POST** /v1/spa-reporting/product-performance | Create Product Performance Report |
| [**sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet) | **GET** /v1/spa-reporting/reports/download | Download a report by ID |
| [**sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet) | **GET** /v1/spa-reporting/campaign-performance/status | Get Campaign Performance Report Status |
| [**sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet) | **GET** /v1/spa-reporting/campaign-performance | Get campaign performance with flexible date filtering |
| [**sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet) | **GET** /v1/spa-reporting/keyword-performance/status | Get Keyword Performance Report Status |
| [**sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet) | **GET** /v1/spa-reporting/product-performance/status | Get Product Performance Report Status |
| [**sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet()**](SponsoredProductAdsReportingV1Api.md#sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet) | **GET** /v1/spa-reporting/product-performance | Get product&#39;s performance with flexible date filtering |


## `sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost()`

```php
sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost($campaign_report_request_sponsored_product_ads_reporting_v1): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Create Campaign Performance Report

Request generation of a campaign performance report for the specified date range. The report will be generated asynchronously and can be retrieved using the report ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_report_request_sponsored_product_ads_reporting_v1 = {"name":"Campaign KPIs Report","fromDate":"2026-03-01","toDate":"2026-03-23","configuration":{"columns":["TOTAL_VIEWS","TOTAL_CLICKS","TOTAL_COSTS"],"format":"CSV"}}; // \OpenAPI\Client\Model\CampaignReportRequestSponsoredProductAdsReportingV1

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost($campaign_report_request_sponsored_product_ads_reporting_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1CreateCampaignPerformanceReportV1SpaReportingCampaignPerformancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_report_request_sponsored_product_ads_reporting_v1** | [**\OpenAPI\Client\Model\CampaignReportRequestSponsoredProductAdsReportingV1**](../Model/CampaignReportRequestSponsoredProductAdsReportingV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost()`

```php
sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost($keyword_report_request_sponsored_product_ads_reporting_v1): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Create Keyword Performance Report

Request generation of a keyword performance report for the specified date range. The report will be generated asynchronously and can be retrieved using the report ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_report_request_sponsored_product_ads_reporting_v1 = {"name":"Keyword Performance Report","fromDate":"2026-03-01","toDate":"2026-03-23","configuration":{"columns":["TOTAL_VIEWS","TOTAL_CLICKS","TOTAL_COSTS"],"format":"CSV"}}; // \OpenAPI\Client\Model\KeywordReportRequestSponsoredProductAdsReportingV1

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost($keyword_report_request_sponsored_product_ads_reporting_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1CreateKeywordPerformanceReportV1SpaReportingKeywordPerformancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyword_report_request_sponsored_product_ads_reporting_v1** | [**\OpenAPI\Client\Model\KeywordReportRequestSponsoredProductAdsReportingV1**](../Model/KeywordReportRequestSponsoredProductAdsReportingV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost()`

```php
sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost($product_report_request_sponsored_product_ads_reporting_v1): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Create Product Performance Report

Request generation of a product performance report for the specified date range. The report will be generated asynchronously and can be retrieved using the report ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_report_request_sponsored_product_ads_reporting_v1 = {"name":"Product Performance Report","fromDate":"2026-03-01","toDate":"2026-03-23","configuration":{"columns":["SKU","TOTAL_VIEWS","TOTAL_CLICKS","TOTAL_COSTS"],"format":"CSV"}}; // \OpenAPI\Client\Model\ProductReportRequestSponsoredProductAdsReportingV1

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost($product_report_request_sponsored_product_ads_reporting_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1CreateProductPerformanceReportV1SpaReportingProductPerformancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_report_request_sponsored_product_ads_reporting_v1** | [**\OpenAPI\Client\Model\ProductReportRequestSponsoredProductAdsReportingV1**](../Model/ProductReportRequestSponsoredProductAdsReportingV1.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet()`

```php
sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet($report_id): mixed
```

Download a report by ID

Download a generated report by its report ID. The report must have status READY. Returns the report file as a CSV attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The unique identifier of the report to download

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1DownloadReportV1SpaReportingReportsDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the report to download | |

### Return type

**mixed**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet()`

```php
sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet($report_id): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Get Campaign Performance Report Status

Retrieve the status of a campaign performance report generation using the report ID as a query parameter. The response will indicate whether the report is still in progress, completed, or if there was an error during generation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The unique identifier of the campaign performance report

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1GetCampaignPerformanceReportStatusV1SpaReportingCampaignPerformanceStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the campaign performance report | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet()`

```php
sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet($campaign_id, $from_date, $to_date): \OpenAPI\Client\Model\SponsoredProductAdsCampaignPerformanceSponsoredProductAdsReportingV1
```

Get campaign performance with flexible date filtering

Retrieve aggregated performance metrics for the specified campaign. Defaults to last 7 days if no date range is provided. Both fromDate and toDate must be provided together, or neither.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The unique identifier of the campaign
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of the range (format YYYY-MM-DD). Must be provided with toDate, or omit both for 7-day default.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of the range (format YYYY-MM-DD). Must be provided with fromDate, or omit both for 7-day default.

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet($campaign_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1GetCampaignPerformanceV1SpaReportingCampaignPerformanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The unique identifier of the campaign | |
| **from_date** | **\DateTime**| Start date of the range (format YYYY-MM-DD). Must be provided with toDate, or omit both for 7-day default. | [optional] |
| **to_date** | **\DateTime**| End date of the range (format YYYY-MM-DD). Must be provided with fromDate, or omit both for 7-day default. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SponsoredProductAdsCampaignPerformanceSponsoredProductAdsReportingV1**](../Model/SponsoredProductAdsCampaignPerformanceSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet()`

```php
sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet($report_id): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Get Keyword Performance Report Status

Retrieve the status of a keyword performance report generation using the report ID as a query parameter. The response will indicate whether the report is still in progress, completed, or if there was an error during generation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The unique identifier of the keyword performance report

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1GetKeywordPerformanceReportStatusV1SpaReportingKeywordPerformanceStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the keyword performance report | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet()`

```php
sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet($report_id): \OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1
```

Get Product Performance Report Status

Retrieve the status of a product performance report generation using the report ID as a query parameter. The response will indicate whether the report is still in progress, completed, or if there was an error during generation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | The unique identifier of the product performance report

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1GetProductPerformanceReportStatusV1SpaReportingProductPerformanceStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the product performance report | |

### Return type

[**\OpenAPI\Client\Model\ReportStatusResponseSponsoredProductAdsReportingV1**](../Model/ReportStatusResponseSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet()`

```php
sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet($campaign_id, $sku, $from_date, $to_date): \OpenAPI\Client\Model\SponsoredProductAdsProductPerformanceSponsoredProductAdsReportingV1
```

Get product's performance with flexible date filtering

Retrieve performance metrics for the specified campaign and SKU. Defaults to last 7 days if no date range is provided. Both fromDate and toDate must be provided together, or neither.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SponsoredProductAdsReportingV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The unique identifier of the campaign
$sku = 'sku_example'; // string | The SKU
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date of the range (format YYYY-MM-DD). Must be provided with toDate, or omit both for 7-day default.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date of the range (format YYYY-MM-DD). Must be provided with fromDate, or omit both for 7-day default.

try {
    $result = $apiInstance->sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet($campaign_id, $sku, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SponsoredProductAdsReportingV1Api->sponsoredProductAdsReportingV1GetSkuPerformanceV1SpaReportingProductPerformanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The unique identifier of the campaign | |
| **sku** | **string**| The SKU | |
| **from_date** | **\DateTime**| Start date of the range (format YYYY-MM-DD). Must be provided with toDate, or omit both for 7-day default. | [optional] |
| **to_date** | **\DateTime**| End date of the range (format YYYY-MM-DD). Must be provided with fromDate, or omit both for 7-day default. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SponsoredProductAdsProductPerformanceSponsoredProductAdsReportingV1**](../Model/SponsoredProductAdsProductPerformanceSponsoredProductAdsReportingV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

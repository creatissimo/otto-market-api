<?php
/**
 * CategoryGroupsProductsV2
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Otto\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OTTO Market API
 *
 * # Home Welcome to OTTO Market API Documentation. On this page you will find all information on how to use the API for your business. Please scroll to the top if you´re looking for the OpenAPI specification to download.  ## Become an OTTO Market partner (seller) Follow these steps: - Go visit [otto.market](https://www.otto.market) - Inform yourself about our benefits - Register as a partner - Get access to our partner portal \"OTTO Partner Connect (OPC)\" - Provide all necessary documents and data & sign the contract - Request your API user on OPC  ## Process Workflow  Given below is the overall process workflow of how different services interact within otto market.  <img src=\"/docs/process_information.png\" alt=\"Process Workflow\"/>  ## General Changelog This changelog will contain information about important changes. Most important things are legal issues, version upgrades and not backward compatible changes. Newest information will be placed on top of the table.  | Date       | Interface                           | Classification | Description                                                                                     | |------------|-------------------------------------|----------------|-------------------------------------------------------------------------------------------------| | 2022-09-22 | [Products](../docs#tagProducts-V3) | New Version     | Version 3 is now live. We plan to go offline with Version 2 (v2) by 2023-03-31 | | 2022-05-25 | General | Documentation        | Starting 2022-11-01 redundant domains to access OTTO Market API doc will be decomissioned. Please use access docs using api.otto.market | | 2022-03-17 | [Quantities](../docs#tag/Quantities-V2) | Sandbox        | Version 2 of /quantities is now available in the sandbox environment.                       | | 2022-01-19 | [Price reductions](../docs#tag/Price-Reductions-V1) | New API        | Added price reduction APIs                                                      | | 2021-11-26 | [Products](../docs#tag/Products-V2) | Sandbox        | Version 2 of /products is now available in the sandbox environment.                             | | 2021-04-30 | [Orders](../docs#tag/Orders-V4)     | New Version    | Version 4 is now live. We plan to go offline with Version 3 (v3) by  2021-10-31                 | | 2021-04-06 | [Products](../docs#tag/Products-V2) | New Version    | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 01.11.2021.        | | 2020-04-14 | [Receipts](../docs#tag/Receipts-V2) | New Version    | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 14th October,2020. | | 2020-04-20 | [Orders](../docs#tag/Orders-V4)     | New Version    | Version 3 is now live. We plan to go offline with Version 2 (v2) earliest by 01.11.2020.        | | 2019-09-01 | [Orders](../docs#tag/Orders-V4)     | New Version    | Version 1 will be outdated in some time. Please change to version 2, if it is marked as ready.  | | 2022-02-28 | [Price Reductions](../docs#tag/Price-Reductions-V1)     | New Version    | Version 1 is now live. |  ## Feedback  We are very interested in learning how to enhance our API-Documentation for you and would love to hear from you! [Send Feedback.](https://forms.office.com/r/cbnr6tVyyg)  ## Get Support If you have any questions, remarks or if you need support, please don't hesitate to contact us and we will get back to you as soon as possible.  - As a **partner** the quickest way to get support is to open a new ticket in [OTTO Partner Connect](https://account.otto.market/s/ticketanlegen) via the Partner Helpdesk choosing the sub-category \"Technische Schnittstellen\". - As a **service provider** please [send an e-mail](mailto:partnerintegration@otto.market) to our OTTO Market team.  ## Access to the API  | Environment | Base URL                        | |-------------|---------------------------------| | Sandbox     | https://sandbox.api.otto.market | | Production  | https://api.otto.market         |  # OTTO Market API Developer's Guide The Developer's Guide is targeted at developers and people with technical background who are already a partner (seller) of OTTO Market or are interested in becoming a partner. The aim is to help you as a partner of OTTO Market to connect to and to work with the OTTO Market API. It describes some common implementation patterns and helps you to understand how processes work. Detailed information about the concrete interfaces can be accessed by clicking onto the single tabs.  ## Authorization (OAuth2)  <!-- ReDoc-Inject: <security-definitions> -->  ### Fetch access token  In order to fetch an authorization token you must have an API user with a password. You can use the following cURL command to receive your token. Make sure to include your username and password in the command (without leading and trailing < >) and to URL-encode special characters appropriately. ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'Cache-Control: no-cache' \\   -d 'username=<YourUsername>&password=<YourPassword>&grant_type=password&client_id=token-otto-api' ```  Alternatively, you can let cURL encode the POST data by using `--data-urlencode` instead: ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'Cache-Control: no-cache' \\   --data-urlencode username=<YourUsername> \\   --data-urlencode password=<YourPassword> \\   --data-urlencode grant_type=password \\   --data-urlencode client_id=token-otto-api ```  The response of the request will look like the following example. The token itself can be extracted from the <code class=\"inline\">access_token</code> value. Please use the same access token as long as possible instead of fetching new access tokens over and over again. Whether a token is still valid can be checked using the attribute <code class=\"inline\">refresh_expires_in</code>. ``` {   \"access_token\": \"eyJhbGciOiJSUzI1NiISInR5cCIgOiAiSldUIiwia2lkIiA6ICJTd3ExRDRvYVBKUFQzMER3dmlZRkVVV2hRaEJtMEdPRlpWVWIwYWEteDBjIn0.eyJqdGkiOiIyMTg5Y2NjNC02NjU5LTQ1YmMtYjliMS1jYTIzMDMxOGQ3NmQiLCJleHAiOjE1ODQ5ODg3NjQsIm5iZiI6MCwiaWF0IjoxNTg0OTg1MTY0LCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvb3R0by1wYXJ0bmVyIiwic3ViIjoiODkwYmZkYjEtMTJkZS00OTY0LWJmMzgtYWQ1NzEyOTc4NjU4IiwidHlwIjoiQmVhcmVyIiwiYXpwIjoidG9rZW4tb3R0by1hcGkiLCJhdXRoX3RpbWUiOjAsInNlc3Npb25fc3RhdGUiOiIzZTA3MTBiMi1iNTdhLTRjYjAtYTUxZC02ZGU2MGE5OTczNTYiLCJhY3IiOiIxIiwic2NvcGUiOiJwdW1iYS1yb2xlcy1hcHAtcG9ydGFsIHBhcnRuZXIgZW1haWwgcHJvZmlsZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsiUHJvZHVjdHNfV3JpdGUiLCJSZWNlaXB0c19OYXZpZ2F0aW9uX1JlYWQiLCJTZXBhTWFuZGF0ZXNfQ3VzdG9tZXJTdXBwb3J0X1dyaXRlIiwiQnJhbmRzaG9wX05hdmlnYXRpb25fUmVhZCIsIkNhcnJpZXJBbmRSZXR1cm5fTmF2aWdhdGlvbl9SZWFkIiwiUGFydG5lcl9OYXZpZ2F0aW9uX1JlYWQiLCJTZXJ2aWNlc19OYXZpZ2F0aW9uX1JlYWQiLCJBbmFseXRpY3NfTmF2aWdhdGlvbl9SZWFkIiwiUHJvZHVjdHNfTmF2aWdhdGlvbl9SZWFkIl19LCJuYW1lIjoiVGVzdCBVc2VyIiwicHJlZmVycmVkX3VzZXJuYW1lIjoiYXBpX3Rlc3QiLCJsb2NhbGUiOiJkZSIsImdpdmVuX25hbWUiOiJUZXN0IiwiZmFtaWx5X25hbWUiOiJVc2VyIiwiZW1haWwiOiJhbmRyZS5lcmtAb3R0by5kZSJ9.Rszr6jXUUGGHzqw2XVo7HcaZ0pHvwYyJdg0olZEwpkz2lNBPejFPDuHK5eUrKEBxOhAsu3zKXwrfcyMWW8iufAbfCEonlDjle7U3NafLT-ITcjiL0wf1oI0D33h37RKmd0KjBXcoZRyvGZEUoItMp1WNGLn0JV8UvSOqDiGeCHvuurLNb91aIIHNMuN8lRQLaOhCKRmKsnxpUOytNcOER0_Z_sbK3x4fWJuaEDLIf6OGmx6TXZQr5e2UnvtOIWpt_JMvnKoJOC2-cPN5MP-PiMKTodi7ajhavUxo7dWyE0eBvc2stMFhjwSJO1KUkGjHdk0PWt-4GNlAdBze3laR2Q\",   \"expires_in\": 1800,   \"refresh_expires_in\": 7200,   \"refresh_token\": \"eyJhbGciOiJIUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICI5YjRjZjM1Yi0yZDBkLTQzZGUtYWVjMC1kZTUzMDNiYjM3YjEifQ.eyJqdGkiOiI2NDI0ZTg5OC0yMTBkLTRhZGYtYWNhOS1hZmI1YjA4NTU0NDMiLCJleHAiOjE1ODQ5OTIzNjQsIm5iZiI6MCwiaWF0IjoxNTg0OTg1MTY0LCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvb3R0by1wYXJ0bmVyIiwiYXVkIjoiaHR0cHM6Ly9lc2Itd3Mub3R0by5kZS9zZWMtYXBpL2F1dGgvcmVhbG1zL290dG8tcGFydG5lciIsInN1YiI6Ijg5MGJmZGIxLTEyZGUtNDk2NC1iZjM4LWFkNTcxMjk3ODY1OCIsInR5cCI6IlJlZnJlc2giLCJhenAiOiJ0b2tlbi1vdHRvLWFwaSIsImF1dGhfdGltZSI6MCwic2Vzc2lvbl9zdGF0ZSI6IjNlMDcxMGIyLWI1N2EtNGNiMC1hNTFkLTZkZTYwYTk5NzM1NiIsInNjb3BlIjoicHVtYmEtcm9sZXMtYXBwLXBvcnRhbCBwYXJ0bmVyIGVtYWlsIHByb2ZpbGUifQ.X02NuyvlIhGL6L6fDGvdW-NSLCpFFIc4Cf8XbA_bBdk\",   \"token_type\": \"bearer\",   \"not-before-policy\": 0,   \"session_state\": \"3e0710b2-b57a-4cb0-a51d-6de60a997356\",   \"scope\": \"pumba-roles-app-portal partner email profile\" } ``` #### Best-practice  Use available tokens as long as possible before fetching a new `access_token`. In general new access_tokens should be fetched by using the `refresh_token`. Expiration date of token is indicated by the attribute `expires_in` for access_tokens and `refresh_expires_in` for refresh_tokens. Access tokens should only be fetched using username and password if the `refresh_token` has expired.  ### Use refresh token The refresh token can be extracted from the <code class=\"inline\">refresh_token</code> value. Once the access token is expired you can use the refresh token to get a new access token, without using your users credentials again. You can use the following cURL command. Include the refresh token (without leading and trailing < >). ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'cache-control: no-cache' \\   -d 'refresh_token=<refresh_token>&grant_type=refresh_token&client_id=token-otto-api' ```  The reponse of this request will look like the example above, the access token can be extracted from <code class=\"inline\">access_token</code> and the new refresh token from <code class=\"inline\">refresh_token</code>.  ### Use access token  When you decode the access token you will see information including your email, name and roles as well as usual token metadata:  ``` {   \"jti\": \"b76250a9-a69f-45fe-9191-d42c68da051e\",   \"exp\": 1584988534,   \"nbf\": 0,   \"iat\": 1584984934,   \"iss\": \"https://esb-ws.otto.de/sec-api/auth/realms/otto-partner\",   \"sub\": \"790bfdb1-12de-4964-bf38-ad5712978658\",   \"typ\": \"Bearer\",   \"azp\": \"token-otto-api\",   \"auth_time\": 0,   \"session_state\": \"81476119-17a4-414b-a4da-aec6f737ddf4\",   \"acr\": \"1\",   \"scope\": \"openid pumba-roles-app-portal partner email profile\",   \"email_verified\": true,   \"partner_id\": \"1000000\",   \"realm_access\": {     \"roles\": [       \"Products_Read\",       ...     ]   },   \"name\": \"Example User\",   \"preferred_username\": \"api_example\",   \"given_name\": \"Example\",   \"family_name\": \"User\",   \"email\": \"example.user@example.org\" } ``` ### Create Apps As an OTTO Partner, if you want to leverage OTTO Market API, follow the below steps. 1. Login to [OTTO Partner Connect (OPC)](https://portal.otto.market) portal 2. Navigate to [API access (\"API Zugriff\")](https://portal.otto.market/settings/API).    There are two environments, Sandbox & Production. 3. Choose the environment where you want to create an app in. Create a new app by clicking on the button \"Neue App erstellen\". 4. Provide an app name and at least one scope your app needs access to and click on the button \"App erstellen\". 5. Done! Your app was created, and you will be directed to the credentials tab.  Refer [Access Token endpoint](/docs#operation/Developer-V1__createAccessToken) for generating an access token using the client ID and secret from the above step. With this token you can access the OTTO Market API.  **Please note** - The number of apps you can create is limited. If you reach this limit but need to create a new app, you have to delete an old one first. - The client secret for the app is shown only once. If missed or forgotten, you have to rotate the client secret.  ## API Access for Partner cooperating with a Service Provider `Note:` *This feature is in beta and not available for all partners. If you want access, get it touch with [OTTO Market Team](mailto:partnerintegration@otto.market)*  If you are cooperating with a Service Provider you will get a link for installing an app of this Service Provider. In order to do so follow the steps below: 1. Login to [OTTO Partner Connect (OPC)](https://portal.otto.market) portal. 2. Click on the link you got from the Service Provider (either directly or from e.g. the homepage of this Service Provider). 3. You will be asked to grant consent that the app is allowed to access the scopes displayed in the consent screen (e.g., products or orders).    If you don't grant consent nothing will happen. The app won't be installed and thus won't be able to access your data.    `Note:` *In order to install the app you have to grant access to all the specified scopes. Allowing only a part of them is not possible.* 4. If you grant consent the app is \"installed\" and you can use it. It is now also displayed in the installed apps tab (\"Installierte Apps\") on the [service provider page (\"Dienstleister\")](https://portal.otto.market/settings/Dienstleister)  ### Revoke Consent  If you want to revoke your consent you can do so by navigating to the overview of your installed apps (\"Installierte Apps\") on the [service provider page (\"Dienstleister\")](https://portal.otto.market/settings/Dienstleister). Hover over the app name to get the Button for revoking consent (\"Zugriff entziehen\"). When clicking on this button you get a popup window asking you to confirm that you want to revoke your consent. If you do so, the app gets uninstalled meaning it has no longer access to your data and you cannot use it any longer. Of course, you can re-install the app if you want to.  ## API Access for Service Providers Refer [Developer Program](/docs#section/Developer-Program) section below for more details about authentication and authorization. Once you have authentication and authorization, read further for the next steps.  ## Calling an Endpoint All endpoints are secured via authorization. You add the HTTP <code class=\"inline\">Authorization</code> -Header with value <code class=\"inline\">Bearer ey...</code> and will get access. ``` curl -X GET \\   https://api.otto.market/v2/orders \\   -H 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5jdhstdheSldUIiwia2lkIiA6ICI4T1d6MjhuZ01GbHBURDl5TGtxQkRHMThuYXZNVFgyTWtqNVhkY0RITDBZIn0.eyJqdGkiOiI5OTM1NDk3OS1iNDdhLTQ3MzctOWYyMy0yNTMyMmI5MGVmYmMiLCJleHAiOjE1NTM3NjQ4NjMsIm5iZiI6MCwiaWF0IjoxNTUzNzYxMjYzLCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvcGFydG5lci1hcGktdGVzdCIsImF1ZCI6ImFjY291bnQiLCJzdWIiOiI0MWUwNGQ1OS0xMTk0LTRiYjMtODhkYS1hYjRmNTk2NDkwZGUiLCJ0eXAiOiJCZWFyZXIiLCJhenAiOiJwYXJ0bmVyLWFwaSIsImF1dGhfdGltZSI6MCwic2Vzc2lvbl9zdGF0ZSI6IjliNjk1ZDA1LTY5YzQtNDkwZS1hZGIzLTc2YWE5NmJmZjA0YyIsImFjciI6IjEiLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsib2ZmbGluZV9hY2Nlc3MiLCJ1bWFfYXV0aG9yaXphdGlvbiJdfSwicmVzb3VyY2VfYWNjZXNzIjp7ImFjY291bnQiOnsicm9sZXMiOlsibWFuYWdlLWFjY291bnQiLCJtYW5hZ2UtYWNjb3VudC1saW5rcyIsInZpZXctcHJvZmlsZSJdfX0sInNjb3BlIjoiZW1haWwgcHJvZmlsZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJwYXJ0bmVyIjoiMTAwMDYyNCIsIm5hbWUiOiJTb3VsZXdheSIsInByZWZlcnJlZF91c2VybmFtZSI6IjEwMDA2MjQiLCJnaXZlbl9uYW1lIjoiU291bGV3YXkifQ.SleUexNdapaY5RmrVTbKRMiVpRrbNLjIUi7fILsW1hkpqQbX4IQRaSufSt98Ar0OkEmIvZvYPpGVecmjwYvD3YQzBmlcdU0V544Y0h8y01RyxZAYGZbRXfA1kOsFDucnrClCcj1JIaQMU4629wU9OM_SdQaLvfTA2l5prma94RekdWR3S-6DzXqJDtHrrcYS8BsfohkuLdi1U8vPUjwee9lsY3RTa9YZVekH4hFVWMl0Pbwub8jwum6zRjTu-ZAiLhZSnl8mSaMtrJFmkzRi3-s9eN7k0lnLKWGt7JuqZ_vbiJT8ZhHvPur4eLrY02ehF6-lwSUyjWMCzCi5TjBgYg' ```  The expected result has an HTTP 200 code with a probably empty list.  ## Rate Limiting A high volume of calls on API services at any given time would increase server resource consumption. If the load is due to an unauthorized intrusion it would be a chaos. Thus, rate limiting becomes extremely important.  In general authenticated API calls are limited for each partner to 20 requests per second. Exceeding the rate limit results in a HTTP 429 \"too many requests\" error. For some endpoints the rate limit is lower to ensure the best quality for all API users. Please see below:  |Endpoint path|HTTP method|Max requests per time unit| |:-|:-|:-| |/products|GET|10 per second| |/products|POST|20 per second| |/products/active-status|GET|10 per second| |/products/active-status|POST|3600 per day| |/products/marketplace-status|GET|10 per second| |/products/categories|GET|10 per second| |/products/brands|GET|10 per second| |/v1/token|POST|10 per second for each IP| |other endpoints|POST & GET|20 per second|  ### User Based API Throttling A general method of limiting usage of API resource is to allocate a pre-configured static or dynamic quota for a consumer. The API rate limiting is done on the basis of partner-id. A particular partner-id can make 20 requests per second.  ### Best Practice Please divide your requests over the day and avoid sending all data at once. Make use of the individual limits for the interfaces. This helps preventing our systems from clogging and ensures a flawless experience for everyone.  ## Timeouts and Defaults | Name            | Value | Description                                                                                                     | |-----------------|-------|-----------------------------------------------------------------------------------------------------------------| | request timeout | 10s   | The maximum HTTP request timeout for all interfaces                                                             | | limit           | 128   | The default for limit query parameter. See Paging. The default limit can be overwritten in specific interfaces. |  ## Common Patterns ### Interface Definition Our REST interface definitions are basically using swagger.io. All interface definitions can be automatically used by you to generate necessary API objects and similar in your chosen implementation language. In order to remain technically extensible and up-to-date, individual interfaces may have been described in new or different definition schemes. We are constantly trying to keep all interfaces technically up to date.  ### Versioning The OTTO Market API uses different versions for the single endpoints. The version number is included in the URL path. [Semantic versioning](https://semver.org/) scheme is used, but only the major version. Breaking changes are only introduced in new major versions. API version is required in all urls.  Endpoints may introduce new optional fields at any time in the request and any new fields in the response. The client must skip all unknown fields.  For every endpoint, a changelog exists which displays the latest released changes and the upcoming unreleased changes. Additionally, an overall [Changelog](/) exists with the most exciting changes about the API in general.  ### Supporting old versions The OTTO Partner API continues to support old versions of an API for **6 months** from the time of public announcement for the new version of a given API. It is recommanded to check regularly. This can be be automated by checking HTTP headers for the attribute `SunsetHeader`, which indicates when versions go offline.  #### Best-practice Regurlarly check for the `SunsetHeader` and act as soon as the attribute appears by updating your integration to the new version within the presented time frame.  __example:__ ``` Warning: v2 is deprecated. Please migrate to v3 Sunset: Sun, 01 Nov 2020 00:00:00 GMT Deprecation: Wed, 11 Nov 2018 23:59:59 GMT Link: <https://api.otto.market/v3/orders>; rel=\"successor-version\" ```  ## Header Some common headers should be set by clients:  1. Set the <code class=\"inline\">X-Request-Timestamp</code> header according to the [ISO-8601](https://tools.ietf.org/html/rfc3339#section-5.6) standard. You can use this regex pattern: <code class=\"inline\">^\\d{4}-(0\\d|1[0-2])-([0-2]\\d|3[01])T(2[0-3]|[01]\\d):[0-5]\\d:[0-5]\\d(\\.\\d+)?(\\[+-](2[0-3]|[01]\\d):[0-5]\\d|Z)$</code> 2. Set <code class=\"inline\">Accept</code> to the desired response format e.g. <code class=\"inline\">application/json</code> 3. Set the <code class=\"inline\">Content-Type</code> header to define the used format in the request body, only applicable if you send a request body  ## HTTP Methods The interfaces describe which HTTP methods are allowed and how to use them. Our basic concern is that basically all HTTP Methods are allowed in the [standardized way](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol). Note that these methods should behave as specified by their [standardized meaning (idempotency)](http://restcookbook.com/HTTP%20Methods/idempotency/). The following is a description of a few special features, relevant facts or ways to use some of the HTTP methods. <details>   <summary>Click to expand for details</summary>  ### POST POST will update specific fields **and** returns the result like a GET would do (error response is independent).  ### PUT PUT will create or replace the whole entity independent of an existing entity.  ### PATCH PATCH will update specific fields **and** not return data like a GET would do (error response is independent). PATCH body is structured in the same way as PUT and POST (entity body). All fields added into your body will be updated, other fields will not be affected.  __example:__ ``` {   \"username\" : \"myusername\",   \"email\" : null } ``` </details>  ## HTTP Status Codes We are using [standardized HTTP status code](https://www.restapitutorial.com/httpstatuscodes.html) with a body only if needed (it also just can be empty), but details about that you can find at the concrete interface implementation.  | Verb   | Description                                                                                                                                                                                                                                                                                            | |--------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | HEAD   | Can be issued against any resource to get just the HTTP header info.                                                                                                                                                                                                                                   | | GET    | Used for retrieving resources.                                                                                                                                                                                                                                                                         | | POST   | Used for creating resources.                                                                                                                                                                                                                                                                           | | PATCH  | Used for updating resources with partial JSON data. For instance, an Issue resource has title and body attributes. A PATCH request may accept one or more of the attributes to update the resource. PATCH is a relatively new and uncommon HTTP verb, so resource endpoints also accept POST requests. | | PUT    | Used for replacing resources or collections. For PUT requests with no body attribute, be sure to set the Content-Length header to zero.                                                                                                                                                                | | DELETE | Used for deleting resources.                                                                                                                                                                                                                                                                           |  ## Error Message Style Error messages are returned as content type \"application/json;charset=utf-8\" in the following format: ``` {   \"errors\": [     {       \"path\": \"/orders/1000331\",       \"title\":  \"Invalid Attribute\",       \"code\": \"490\",       \"detail\": \"First name must contain at least three characters.\",       \"detail-structured\": {...},       \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/firstname\",       \"logref\": \"key to find in the log\"     }   ],   \"warnings\": [       {         \"path\": \"/orders/1000331\",         \"title\":  \"Warning Attribute\",         \"code\": \"WRONG_SPELLING\",         \"detail\": \"Last name should start with big letter.\",         \"detail-structured\": {...},         \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/lastname\",         \"logref\": \"key to find in the log\"       }     ] } ```  | Field            | Mandatory | Description                                                                                          | |------------------|-----------|------------------------------------------------------------------------------------------------------| | path             | yes       | called REST path                                                                                     | | path             | yes       | short description of the error                                                                       | | path             | no        | internal error code (number or enum) of your application / domain (do not use the HTTP status codes) | | pathl            | no        | long description of the error, perhaps technical details                                             | | pathl-structured | no        | technical details in JSON structure                                                                  | | pathath          | no        | JSON field in request which caused the error                                                         | | pathf            | no        | reference key to find more stuff in the log (as example traceId)                                     |  ## Pagination Interfaces may return a list with resources (orders, shipments...) and a way to navigate these lists. Please pay attention to the response pattern to identify how to handle lists. There are two common ways list handling is implemented. One way to retrieve the next entry of a list is by using links for navigation the entries. The other is by providing list pages to iterate through lists.  For pagination, the basic query parameter \"limit\" (e.g. <code class=\"inline\">?limit=10</code>) can be used to define the maximum amount of resulting entities returned per call. The interface itself can reduce the limit lower than your client limit.  An example entity using links (not pages) to navigate would be: ``` {   resources: [     {       ...data of the entity if all or some information will be provided directly...,       links: [         {           href: \"/v1/orders/1234\",  <--- Link to single partner order           rel: \"self\"         }       ]     }   ],   links: [     {       href: \"/v1/orders?idGt=1234\", <--- Link to next list of ressources. If not present, no more records exist, currently       rel: \"next\"     }   ] } ```  ## Bulk requests Attention: When sending bulk requests to any /products API endpoint, it will be processed asynchronously at the backend.  ### Synchronous Answer Synchronously will be delivered an endpoint to check the asynchronous processing state. ``` HTTP STATUS 202 (Accepted) {     \"task\": {         \"href\": \"/interface/foo/123\",         \"id\": \"123\"     } } ```  ### Check the State of an Endpoint The client can follow the <code class=\"inline\">href</code> to check the state of processing.  #### Best-practice: As long as the `state = pending` the attribute `pingAfter` dictates when to send a new request.  An example entity would be: ``` {   \"state\": \"pending\",   \"message\": \"is running boy\",   \"progress\": \"35\",   \"total\": \"100\",   \"pingAfter\": \"2019-05-01T13:25:12+0200\",   \"links\": [     {       \"rel\": \"self\",       \"href\": \"/foo/bar/123\"     },     {       \"rel\": \"failed\",       \"href\": \"/foo/bar/123/failed\"     },     {       \"rel\": \"succeeded\",       \"href\": \"/foo/bar/123/succeeded\"     }   ] } ```  ### Fetching files like PDF and CSV  Clients don't have to know the filetype that will be returned from a resource. Resources serving files will have the appropriate file extension in the URL as shown in the example below.  **Request Headers** ``` GET /SomeInvoice.pdf HTTP/1.1 Accept: *_/_* ```  Clients can find out the mime-type from the Content-Type header that will be sent in the response (e.g. application/pdf for PDF files and application/csv for CSV files).  **Response Headers**    ``` HTTP/1.1 200 OK Content-Length: 514493 Content-Type: application/pdf ```  ## Common fields Common fields like time, currency, country codes etc need to follow the standard ISO guidelines unless mentioned otherwise. The fields must report the format they are following on the docs.  ### Some standard formats: - Time: Accept in any time zone in ISO-8601 format and always reply in UTC.    Example: `YYYY-MM-DD` and `hh:mm:ss.sss`: `2020-03-12` and `22:33:34.400` - Currency: ISO-4217.    Example: `EUR` for Euros, `GBP` for British Pound Sterling. - Country code: ISO-3166-1 alpha-3    Example: `DEU` for Germany, `NOR` for Norway.  # Sandbox  ### General **Sandbox is the test environment,** used for testing an API connection. It provides all the functionalities of the live OTTO Market Interface. All actions and orders there are simulated for testing purposes.  The login session and the API key in the sandbox environment are completely separated from the production environment.  REST API: **https://sandbox.api.otto.market**  ## Getting started Follow these steps to start testing on our sandbox environment:  1.  Make yourself familiar with sandbox functionalities. 2.  Request a sandbox API user:     As a **partner (seller)** the fastest way is to open a new ticket in [OTTO Partner Connect](https://account.otto.market/s/ticketanlegen) through the Partner Helpdesk choosing the sub-category \"Technische Schnittstellen\".     As a **service provider** please register in our [OTTO Market Developer Program](https://developer.otto.market/).  3.  Authenticate to our sandbox environment. See [DevelopersGuide](/docs#section/Partner-API-Developer's-Guide) for further information. 4.  Use our Order generator to create fictional orders. See Technical Advice below to know, which orders are created. 5.  Test the API functionality of your application.  ## Technical Advice Please note the following information: ### Authorization For the endpoint like all the other endpoints a valid authorization token has to be sent. If you need further information, please consult the [Developers Guide](/docs#section/Partner-API-Developer's-Guide).  ### GET-Returns Endpoint Since there are no real costumers, returns cannot be announced. Hence, the GET endpoint of returns is retrieving an empty string.  ### Sandbox Reset To prevent data overload, our sandbox and its orders are reset monthly at first Sunday from 6 p.m. to 10 p.m.\\ Any dynamic data (shipments, returns) is deleted. Old shipments will not be available anymore.\\ Therefore, you have to create new orders every month.  ### Order Generator To test your API implementation you can generate test orders only on the sandbox environment by sending an empty POST request to the following generation endpoint:  [https://sandbox.api.otto.market/v4/orders/testorders]()  This will run 8 predefined scenarios on our sandbox. After the POST request, you will receive 6 orders in \"PROCESSABLE\" status with different combinations of positions and items (e.g. standard and freight delivery). You will also receive 1 prepayment order in \"ANNOUNCED\" and 1 order in \"CANCELLED_BY_MARKETPLACE\" status.  The generated orders will contain one or more position items with the following products:  | Product Title                       | EAN           | SKU                   | |-------------------------------------|---------------|-----------------------| | Smartphone »CallMe 1000«            | 1245780164732 | SmartCM1000-schwarz-1 | | Fancy Shirt »Flower«                | 4851278936452 | FancyFlower-m-pi      | | Rasenmaeher »Turbo V1«              | 9821393948573 | 0440-Rasen-T-V1       | | Spedition Wohnlandschaft 3.tlg.     | 8263748321943 | Sped-Wohn-3-98735     | | Spedition Kühlschrank »COOL EXTREM« | 7263000981290 | Sped-Kühl084-kombi    |  Scenarios:  | Scenarios        | Status                   | Comment                                                                                                              | |------------------|--------------------------|----------------------------------------------------------------------------------------------------------------------| | 1, 2, 3, 4, 7, 8 | PROCESSABLE              | Scenario 4 inclusive discount                                                                                        | | 5                | ANNOUNCED                | Order with payment method PREPAYMENT awaiting customer's payment<br>Order includes weeePickup on position item level | | 6                | CANCELLED_BY_MARKETPLACE | Order with payment method PREPAYMENT which has been cancelled since the customer didn't pay                          |  Please use the generated orders to test the interaction with Orders, Shipments and Returns.  If you want to create a single scenario you can do that by sending an empty POST to:  [https://sandbox.api.otto.market/v4/orders/testorders/scenario\\{scenarionumber\\}]()  e.g. [https://sandbox.api.otto.market/v4/orders/testorders/scenario1]()  ## Best-practice test cases  We´ve come up with mulitple test cases to help you test the basic functionalities needed for each endpoint when offering your service to an OTTO Market Seller. The test cases should be tested within the sandbox environment. If you´re interested in feedback from our service provider management you can send screenshots of the test results [here](mailto:partnerintegration@otto.market?subject=[OTTO%20Market%20API]%20Service%20Provider%20test%20cases).  We´re referring to the test orders created using the *test order generator* within the sandbox environment. Please read the section [Order Generator](#order-generator) on how to create test orders.  ### Products We want to test the successful and incorrect creation of several products as well as the deactivation of the products. The successful display of the errors and OTTO categories should also be tested.  1. Download the valid category list over the appropriate endpoint and load it into your mapping interface.  **Attention:** Please remember to show your customer the `featureRelevance` and `relevance` of attributes. `LEGAL` attributes are mandatory.  2. Download the valid brand list over the appropriate endpoint and load it into your system.  3. List a product with 8 SKUs of a valid brand and a valid category.  4. Try listing a product with a wrong brand, a wrong category, an attribute with a wrong name and a wrong value.  5. Please deactivate a SKU from the product created in test case 1 and send us a screenshot of the deactivation display in your    system.  ### Quantities We want to test the successful transfer of inventory to existing SKUs.  6. Please send a positive inventory via the interface for three of the successfully submitted SKUs.  **Attention:** Inventory updates should only be updated when the quanities have changed for a product. That being said a  common best practice is to atleast align the stock keeping system with the OTTO Market once a day. Maybe at night.  ### Orders We want to test the processes for pulling orders in different statuses using self-generated test orders. The cancellation process is also to be tested.  7. Generate the collection of 16 test orders (in 8 scenarios) via the order generator and pull the orders in the status \"PROCESSABLE\".  8. GET the orders in the status \"ANNOUNCED\".  9. Use one of the orders from test scenario 2 and cancel it via the corresponding interface.  10. Use one of the orders from scenario 7 and simply cancel an item from the order using the appropriate interface.  ### Shipments We want to test the shipping processes and consider the special feature of the returnTrackingKey for parcel shipping. Test cases for parcel shipping and forwarding shipping are to be executed.  11. Use one of the orders from scenario 1 and report the items in a shipment as shipped.  12. Use one of the orders from scenario 1 and report two different shipments (two package shipments) for the four items.  13. Use one of the orders from scenario 3 and report the item as shipped in a shipment.  14. Use one of the orders from scenario 8 and report all items in separate shipments as shipped (parcel shipping + freight     forwarding shipping)  ### Returns Finally, the return case should be checked and a return accepted and rejected for an item successfully marked as shipped.  15. Use the order marked as shipped from test case 10 and report the items as accepted returns (acceptance).  16. Use the order marked as shipped from test case 12 and report the item as an unaccepted return (rejection).  ## Products: Validation and test cases  We want to test the successful and incorrect creation of several products as well as the deactivation of the products. The successful display of product related errors, OTTO categories and brands should also be tested.  ### Validation  Submitted product data is validated in two steps:  **1. Technical validation**  The first technical validation (syntax and required attributes) takes place after you´ve sent product data using a POST request. Read more about uploading products here: OTTO Market API: Create or update your product variations. If your http request was successful (http response state 200), you´ll be provided with four different links (pending, succeeded, failed, unchanged). Following the links you´ll be able to check which products have been successfully listed, failed, unchanged or are still being processed.  |Status|Explanation| |:-|:-| |Pending|The product listing is still being processed| |Succeeded|The shown products listing was successful| |Failed|Listing of all shown products has failed| |Unchanged|The request for the listed products is unchanged to the last request|  **2. Shop validation**  The second step is the shop validation. Results of the shop validation are retrievable using the marketplace-status endpoint. Please read OTTO Market API: Read the marketplace status on how to use the marketplace status endpoint. Submitted product data always has one of the following four marketplace statuses:  | Status     | Explanation                                                                                                                                                                       | |------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | Pending    | Submitted product data is currently proceeded.                                                                                                                                    | | Online     | The SKU is displayed at otto.de. You can find the SKU using the shop link. <br />In some cases, additional information will be shown on how to improve the visibility on otto.de. | | Restricted | The SKU is not displayed at otto.de because of an error shown within the error’s container.                                                                                       | | Inactive   | The SKU was set inactive via the active-status endpoint and could be reactivated via the active-status endpoint.                                                                  |  **Attention:** Since the sandbox is missing a direct shop integration the second validation is simulated.  ### Test cases  To ensure you´re able to test every marketplace status including different errors we´ve added specific EAN´s to our sandbox environment. Below you´ll find predefined test cases to simulate possible cases from the live environment. As mentioned before the different states are retrievable fetching the marketplace status.  **Test case #1: Status Online with poor data quality:**  A product status can be online but still have poor data quality. To increase the visibility please add the listed attributes from the error message (“{0}”).  This state can be tested by listing SKU´s using one or more of the following EAN´s:  - “6250000000010” - “6250000000027” - “6250000000034” - “6250000000041” - “6250000000058”  You should receive an error message that looks anything like this:  800001 - DATAQUALITY_NOTICE_SIGNIFICANT_ATTRIBUTE_AND_INFORMATION: “Durch die Pflege folgender Attribute kann die Sichtbarkeit des Produktes gesteigert werden: ''{0}''”  **Test case #2: Status Restricted – Brand blocked**  Some brands are reserved for specific sellers. By listing a product with one of those reserved brands you should receive the following error message:  600007- BRAND_BLOCKED and error title: “Die Marke ist gesperrt und darf nicht eingespielt werden.“ This state can be tested by listing SKU´s using one or more of the following EAN´s:  - “6250000000065” - “6250000000072” - “6250000000089” - “6250000000096” - “6250000000102”  **Test case #3: Status Restricted – EAN already known**  To ensure a great customer experience, product listings using the same EAN are grouped on the OTTO market. This leads to seller competition. By listing a product with a yet unknown EAN a new moin will be generated and must be included in all future updates / listings for that EAN. The moin is retrievable via the marketplace status.  By listing a product with an already known EAN you´ll be prompted with the following error message:  700001 - MOIN_ALREADY_KNOWN and the error title: “Diese Variante ist auf dem OTTO Marktplatz bereits bekannt. Um die Variante zum Verkauf anbieten zu können, bestätigen Sie uns bitte den Content, indem sie die MOIN beim nächsten Update an uns zurückschicken.“  The error message says that the EAN is already known and can only be sold by including the moin. The moin is retrievable from the marketplace status. Including the moin means you´re agreeing that you´re selling the exact same product which has initially generated the moin for the EAN you´re trying to sell. If you disagree, please contact support@otto.market.  The listing of a product with an already known EAN is possible by listing SKU´s using one or more of the following EAN´s:  - “6250000000201” - “6250000000300” - “6250000000409” - “6250000000508” - “6250000000607” - “6250000000706” - “6250000000805” - “6250000000904” - “6250000001000”  **Test case #4: Status Restricted – MOIN incorrect**  It´s possible that you´re trying to submit a product including the moin but the moin has a typo / is wrong in general. You´ll receive the following error message then:  700002 – MOIN_INCORRECT and the error title: “Die von Ihnen zu dieser Variante übertragene MOIN entspricht nicht der von uns für diese Variante vergebenen MOIN. Bitte überprüfen Sie ihre Daten und korrigieren die MOIN entsprechend.“  This is solved by including the correct moin.   # Developer Program This section describes how a service provider can integrate with OTTO Market API. Our new developer program aims at equipping the service providers with authentication and authorization for accessing the OTTO Market API `on belhaf of the partner`.  **Attention: The Developer Program and the functionalities are in closed beta. Partners (sellers) and service providers do not have public access yet.**  ## Registration as Service Provider If you are a service provider who needs to access Partner data, you will be required to register with us in our [developer portal](https://developer.otto.market/register). During the registration, you need to specify the scopes that you'll need. Find the list of scopes [here](/docs#section/Developer-Program/Scopes). You'll receive email notifications for any approval / denial of registration requests.  Upon successful registration, service provider will be created with private access which can later be changed by raising request in OPC. In addition to to the scopes you requested during registration, you can also request for more scopes from the [profile page](https://portal.otto.market/profile/Dienstleisterprofil) in the OTTO Partner Connect portal. Requests for additional scopes will also be reviewed by OTTO Market developer team. You'll receive email notifications for approval / denial of additional scopes requests.  The below diagram depicts the lifecycle of a service provider in OTTO Marketplace:  <img src=\"/docs/service_provider_lifecycle.jpg\" alt=\"Service provider lifecycle\"/>  ## Private and Public Access for Service Provider  Once your registration was successful you have private access to the OTTO Partner Connect portal meaning you can create only private apps in Production environment. (Read more about the difference between private and public apps [here](/docs#section/Developer-Program/Private-and-Public-Apps).)  ### Getting Public Access  If you want to get public access follow the steps below:  1. Login to OTTO Partner Connect portal and navigate to your [profile page (\"Dienstleisterprofil\")](https://portal.otto.market/profile/Dienstleisterprofil) 2. Check the box at the very bottom stating that you want to get public access 3. Click on save (\"Speichern\"). 4. Done! Your request will be reviewed by OTTO Market developer team. You'll receive email notifications for approval / denial of your request.  *Please note: Once you have public access this cannot be reverted meaning you cannot request only private access!*  ## Private and Public Apps  *This applies only for PRODUCTION environment. In Sandbox environment we don't differentiate between public and private apps.*  #### Private Apps  Private apps can be created by private as well as public service providers. If a OTTO Market partner wants to install a private app, an unique app invitation link (\"Einladungslink\") is required.  **Generate an app invitation link** You can generate an unique app invitation link for an app by following the steps below:  1. Login to the [OTTO Partner Connect](https://portal.otto.market/profile/Dienstleisterprofil) portal. 2. Navigate to the [OTTO Market Apps](https://portal.otto.market/app-management/service-provider/apps) page. 3. Click on the three dots (…) right to the app name for which you want to create an invitation link. 4. In the dropdown menu select \"Einladungslink generieren\". 5. A popup window will be displayed. Copy the link from this window - it will not show up again. 6. Done! You can now share the app invitation link with a OTTO Market partner.  `Note:` You should be aware of the following: - After closing the popup window with the invitation link you won't be able to see this exact invitation link again. - You can create as much inviation links as you want to. - There is no possibility to show all invitation links created for a specific app. - Every app invitation link is only valid for 24 hours and can be used only once. (When it is used or expired the link will become invalid and you have to create a new one.) - If a partner clicks on the link but don't grant consent the link remains valid (until it is either expired or consent is granted).  #### Public Apps  Public apps can only be created by public service providers. (For getting public access refer to [Getting Public Access](/docs#section/Developer-Program/Getting-Public-Access).) In order to install a public app, an universally valid installation link (\"Installationslink\") is required. After creating a public app this link is displayed in the app details page. You can share this link whereever you want. But be aware that it is universally valid meaning you cannot control which partner will install your app.  #### Converting a private app into a public app  Only public service providers have the option to convert private apps into public ones. (For getting public access refer to [Getting Public Access](/docs#section/Developer-Program/Getting-Public-Access).)  `Note:` BEFORE CONVERTING an app to public you should be aware of the following: - This action CANNOT be undone meaning you cannot convert a public app back to private. - This action has no effect on existing installations of your app. This means that every partner who has installed this app before (via an one-time use app invitation link) can still use it. (They don't need to re-install it or do anything.) - Every app invitation link you created before converting the app becomes invalid. - An universally valid installation link will be generated and displayed on the app details page.  In order to convert your private app into a public app follow the steps below:  1. Login to the [OTTO Partner Connect](https://portal.otto.market/profile/Dienstleisterprofil) portal. 2. Navigate to the [OTTO Market Apps](https://portal.otto.market/app-management/service-provider/apps) page. 3. Click on the three dots (…) right to the app name for which you want to create an invitation link. 4. In the dropdown menu select \"App Typ zu 'Public' ändern\". 5. A popup window will be displayed asking you to confirm that you want to convert this app to public. 6. Done! Your app is now public.  ## Scopes Scopes corresponds to [OAuth scopes](https://oauth.net/2/scope/). They are used for providing fine-grained access control to the OTTO Market APIs.  ### Scopes for OTTO Market APIs The below table gives mapping of displayed scope names in UI to the scope names to be used for fetching token  | Display Name    | Scope Name (To be used in fetching token) | |-----------------|-------------------------------------------| | Installation    | installation                              | | PartnerId       | partnerId                                 | | Developer       | developer                                 | | Products        | products                                  | | Orders          | orders                                    | | Receipts        | receipts                                  | | Returns         | returns                                   | | Price Reduction | price-reduction                           | | Shipments       | shipments                                 | | Quantities      | quantities                                |  ### Content declaration of available scopes  #### Installation The installation interface allows a service provider to get the installation details of a Partner  #### PartnerId The partnerId interface allows a service provider, access to the partner's partner id.  #### Developer The developer interface allows a service provider to fetch an installation token  #### Products  The product interfaces allow partners to manage their product data in the OTTO Market, which means to send products for publishing on OTTO.de, to view the sent data, and to manage the visibility of the products on otto.de.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Products-V2).  #### Quantities  Once the products have been successfully transmitted using the products scope, only the quantities are missing to make the products available to the end customer on otto.de. For this purpose the Quantity Interface allows partners and service providers to update the available quantity for a specific SKU.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Quantities-V2).  #### Orders  This interface allows partners and service providers to view orders and associated position items. It also allows to send cancellations on order and position item level.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Orders-V4).  #### Shipments  This interface should be used to report that shipments have been handed over to the carrier for final delivery to the customer.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Shipments-V1).  #### Returns  This scope enables the user to manage returns. This includes retrieving a list of announced returns, accepting and declining returns.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Returns-V2).  #### Receipts  OTTO Market provides receipts to the customers to document financial processes. The scopes enables users to download these documents as a PDF or a JSON.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Receipts-V2).  #### Price Reduction  This endpoint enables sellers to apply price reductions to shipped products if the customer is unsatisfied and asks for a partial refund instead of returning the product completely.  Read more about the technical possibilities [here](https://api.otto.market/docs#tag/Price-Reductions-V1).  ## Sandbox vs Production Sandbox apps are used to test your API in sandbox environment, when you are approved for sandbox by the OTTO Market team. These apps have unrestricted scopes access, so you can create sandbox apps for any scope even if you have not yet been approved of it. For creating and testing with sandbox apps, please see [Access to Sandbox and Creating Sandbox Apps](/docs#section/Developer-Program/Access-to-Sandbox-and-Creating-Sandbox-Apps).  As the name states, production apps are for production environment. This can be created after you have an approval from OTTO Market team for the production environment. Once you have the approval, you can request for public service provider access, to create public apps. An OTTO Market Partner has to provide consent, in order for you to access their production data. The detailed flow is described in the [Access to Production and Creating Production Apps](/docs#section/Developer-Program/Access-to-Production-and-Creating-Production-Apps) section below.  ## Access to Sandbox and Creating Sandbox Apps Once your service provider registration request is approved, you can start using [Sandbox Apps](https://portal.otto.market/app-management/sp-sandbox-apps).  ### Creating sandbox app In create sandbox apps UI, you the following details are required, - name - [scopes](docs#section/Developer-Program/Scopes) - all possible scopes will be shown  After creation of sandbox app, details like Client ID, Client Secret and Installation ID will be displayed.  _Note: Installation ID will be autogenerated upon creation, this Installation ID will be required for fetching accessToken._  ### Accessing Sandbox OTTO Market API Using client credential flow, fetch an access token with the scope `developer` ```shell curl --request POST \\   --url https://sandbox.api.otto.market/v1/token \\   --header 'Content-Type: application/x-www-form-urlencoded' \\   --data client_id=<your app's client id> \\   --data client_secret=<your app's client secret> \\   --data grant_type=client_credentials \\   --data scope=developer ``` Using this token, fetch Installation access token for sandbox environment. Refer [API docs for fetching installation access token](/docs#operation/Developer-V1__createInstallationAccessToken) This installation access token will contain all the requested scopes.  Using this installation access token, you can access the Sandbox OTTO Market API.  ## Access to Production and Integration of Production Apps Once you are satisfied with everything you have tested in the sandbox, email [OTTO Market](mailto://partnerintegration@otto.market) to get access to Production. When approved, you can start creating production apps using [OTTO Market Apps](https://portal.otto.market/app-management/service-provider/apps) in OTTO Partner Connect. After getting production access, the service provider can request for public service provider access via OPC to create public apps  ### Creating apps In create apps UI, you need to provide the following details, - unique name - homepage URL - authorization callback URL - Refer below section for more info - [scopes](docs#section/Developer-Program/Scopes) - Only scopes approved for you will be shown - app type (only if the service provider has public access)  #### Authorization callback URL You will receive two types of callbacks to this URL: 1. Partner gives consent to your app. 2. Partner verifies their identity with OTTO for your app.  #### App ID A unique app ID which will be used for identifying a service provider app. When a partner installs this app, this app ID will be used for fetching the installation details.  #### Installation Link This unique, publicly accessible link will be used by OTTO Market partners for installation. You can simply use this link as a hyperlink into your website.  #### Client ID & Client Secret Credentials to be used for authenticating & authorising your app with OTTO authorisation server for fetching installation details of partner  ### Installation of app by an OTTO Partner <img src=\"/docs/app_installation_flow.jpg\" alt=\"App Installation\"/>  1. Partner navigates to your app's installation link and grants consent for the requested scopes. 2. On granting consent, partner will be redirected to your app's auth callback URL. 3. In your callback logic, you have to initiate authorization code flow by redirecting to `/oauth2/auth` ``` redirect('https://portal.otto.market/oauth2/auth?response_type=code&client_id=<your client id>&scope=\"installation partnerId\"') ``` 4. Partner logs in and verifies their identity 5. On verifying identity, partner will be redirected to your app's auth callback URL with auth code. 6. Exchange the Authorization Code for an Access Token ```shell curl --request POST \\   --url https://portal.otto.market/oauth2/token \\   --header 'Content-Type: application/x-www-form-urlencoded' \\   --data client_id=<your app's client id> \\   --data client_secret=<your app's client secret> \\   --data grant_type=authorization_code \\   --data code=<auth code given in the redirect> ``` 7. Using the above token, fetch Installation id. Refer [API docs for fetching installation id](/docs#operation/Developer-V1__getInstallation).    It is essential that you store this installation id for fetching an installation access token. 8. Using client credential flow, fetch an access token with the scope `developer` ```shell curl --request POST \\   --url https://api.otto.market/v1/token \\   --header 'Content-Type: application/x-www-form-urlencoded' \\   --data client_id=<your app's client id> \\   --data client_secret=<your app's client secret> \\   --data grant_type=client_credentials \\   --data scope=developer ``` Using this token, fetch Installation access token. Refer [API docs for fetching installation access token](/docs#operation/Developer-V1__createInstallationAccessToken) This installation access token will contain all the requested scopes.  ### Accessing OTTO Market API Using this installation access token, you can access the OTTO Market API on behalf of partner.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Otto\Client\Model;

use \ArrayAccess;
use \Otto\Client\ObjectSerializer;

/**
 * CategoryGroupsProductsV2 Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategoryGroupsProductsV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryGroups__Products-V2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_groups' => '\Otto\Client\Model\CategoryGroupProductsV2[]',
        'links' => '\Otto\Client\Model\LinkProductsV2[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category_groups' => null,
        'links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category_groups' => false,
		'links' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category_groups' => 'categoryGroups',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_groups' => 'setCategoryGroups',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_groups' => 'getCategoryGroups',
        'links' => 'getLinks'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('category_groups', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category_groups
     *
     * @return \Otto\Client\Model\CategoryGroupProductsV2[]|null
     */
    public function getCategoryGroups()
    {
        return $this->container['category_groups'];
    }

    /**
     * Sets category_groups
     *
     * @param \Otto\Client\Model\CategoryGroupProductsV2[]|null $category_groups a list of the category groups defined on the OTTO market place.
     *
     * @return self
     */
    public function setCategoryGroups($category_groups)
    {
        if (is_null($category_groups)) {
            throw new \InvalidArgumentException('non-nullable category_groups cannot be null');
        }
        $this->container['category_groups'] = $category_groups;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Otto\Client\Model\LinkProductsV2[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Otto\Client\Model\LinkProductsV2[]|null $links a list of links that can be used for pagination (among others).
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



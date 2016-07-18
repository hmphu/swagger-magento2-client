# SwaggerClient-php

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Package version: 
- Build date: 2016-07-18T14:22:51.349Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CheckoutGuestPaymentInformationManagementVApi();
$cart_id = "cart_id_example"; // string | 

try {
    $result = $api_instance->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementVApi->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://springimport.net/rest/default*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CheckoutGuestPaymentInformationManagementVApi* | [**checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**](docs/Api/CheckoutGuestPaymentInformationManagementVApi.md#checkoutguestpaymentinformationmanagementv1getpaymentinformationget) | **GET** /V1/guest-carts/{cartId}/payment-information | 
*CheckoutGuestPaymentInformationManagementVApi* | [**checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](docs/Api/CheckoutGuestPaymentInformationManagementVApi.md#checkoutguestpaymentinformationmanagementv1savepaymentinformationandplaceorderpost) | **POST** /V1/guest-carts/{cartId}/payment-information | 
*CheckoutGuestPaymentInformationManagementVApi* | [**checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**](docs/Api/CheckoutGuestPaymentInformationManagementVApi.md#checkoutguestpaymentinformationmanagementv1savepaymentinformationpost) | **POST** /V1/guest-carts/{cartId}/set-payment-information | 
*CheckoutGuestShippingInformationManagementVApi* | [**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](docs/Api/CheckoutGuestShippingInformationManagementVApi.md#checkoutguestshippinginformationmanagementv1saveaddressinformationpost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 
*CheckoutGuestTotalsInformationManagementVApi* | [**checkoutGuestTotalsInformationManagementV1CalculatePost**](docs/Api/CheckoutGuestTotalsInformationManagementVApi.md#checkoutguesttotalsinformationmanagementv1calculatepost) | **POST** /V1/guest-carts/{cartId}/totals-information | 
*CustomerAccountManagementVApi* | [**customerAccountManagementV1CreateAccountPost**](docs/Api/CustomerAccountManagementVApi.md#customeraccountmanagementv1createaccountpost) | **POST** /V1/customers | 
*CustomerAccountManagementVApi* | [**customerAccountManagementV1InitiatePasswordResetPut**](docs/Api/CustomerAccountManagementVApi.md#customeraccountmanagementv1initiatepasswordresetput) | **PUT** /V1/customers/password | 
*CustomerAccountManagementVApi* | [**customerAccountManagementV1IsEmailAvailablePost**](docs/Api/CustomerAccountManagementVApi.md#customeraccountmanagementv1isemailavailablepost) | **POST** /V1/customers/isEmailAvailable | 
*CustomerAccountManagementVApi* | [**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](docs/Api/CustomerAccountManagementVApi.md#customeraccountmanagementv1validateresetpasswordlinktokenget) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 
*DirectoryCountryInformationAcquirerVApi* | [**directoryCountryInformationAcquirerV1GetCountriesInfoGet**](docs/Api/DirectoryCountryInformationAcquirerVApi.md#directorycountryinformationacquirerv1getcountriesinfoget) | **GET** /V1/directory/countries | 
*DirectoryCountryInformationAcquirerVApi* | [**directoryCountryInformationAcquirerV1GetCountryInfoGet**](docs/Api/DirectoryCountryInformationAcquirerVApi.md#directorycountryinformationacquirerv1getcountryinfoget) | **GET** /V1/directory/countries/{countryId} | 
*DirectoryCurrencyInformationAcquirerVApi* | [**directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**](docs/Api/DirectoryCurrencyInformationAcquirerVApi.md#directorycurrencyinformationacquirerv1getcurrencyinfoget) | **GET** /V1/directory/currency | 
*GiftMessageGuestCartRepositoryVApi* | [**giftMessageGuestCartRepositoryV1GetGet**](docs/Api/GiftMessageGuestCartRepositoryVApi.md#giftmessageguestcartrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/gift-message | 
*GiftMessageGuestCartRepositoryVApi* | [**giftMessageGuestCartRepositoryV1SavePost**](docs/Api/GiftMessageGuestCartRepositoryVApi.md#giftmessageguestcartrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/gift-message | 
*GiftMessageGuestItemRepositoryVApi* | [**giftMessageGuestItemRepositoryV1GetGet**](docs/Api/GiftMessageGuestItemRepositoryVApi.md#giftmessageguestitemrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
*GiftMessageGuestItemRepositoryVApi* | [**giftMessageGuestItemRepositoryV1SavePost**](docs/Api/GiftMessageGuestItemRepositoryVApi.md#giftmessageguestitemrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
*IntegrationAdminTokenServiceVApi* | [**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](docs/Api/IntegrationAdminTokenServiceVApi.md#integrationadmintokenservicev1createadminaccesstokenpost) | **POST** /V1/integration/admin/token | 
*IntegrationCustomerTokenServiceVApi* | [**integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**](docs/Api/IntegrationCustomerTokenServiceVApi.md#integrationcustomertokenservicev1createcustomeraccesstokenpost) | **POST** /V1/integration/customer/token | 
*QuoteGuestBillingAddressManagementVApi* | [**quoteGuestBillingAddressManagementV1AssignPost**](docs/Api/QuoteGuestBillingAddressManagementVApi.md#quoteguestbillingaddressmanagementv1assignpost) | **POST** /V1/guest-carts/{cartId}/billing-address | 
*QuoteGuestBillingAddressManagementVApi* | [**quoteGuestBillingAddressManagementV1GetGet**](docs/Api/QuoteGuestBillingAddressManagementVApi.md#quoteguestbillingaddressmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/billing-address | 
*QuoteGuestCartItemRepositoryVApi* | [**quoteGuestCartItemRepositoryV1DeleteByIdDelete**](docs/Api/QuoteGuestCartItemRepositoryVApi.md#quoteguestcartitemrepositoryv1deletebyiddelete) | **DELETE** /V1/guest-carts/{cartId}/items/{itemId} | 
*QuoteGuestCartItemRepositoryVApi* | [**quoteGuestCartItemRepositoryV1GetListGet**](docs/Api/QuoteGuestCartItemRepositoryVApi.md#quoteguestcartitemrepositoryv1getlistget) | **GET** /V1/guest-carts/{cartId}/items | 
*QuoteGuestCartItemRepositoryVApi* | [**quoteGuestCartItemRepositoryV1SavePost**](docs/Api/QuoteGuestCartItemRepositoryVApi.md#quoteguestcartitemrepositoryv1savepost) | **POST** /V1/guest-carts/{cartId}/items | 
*QuoteGuestCartItemRepositoryVApi* | [**quoteGuestCartItemRepositoryV1SavePut**](docs/Api/QuoteGuestCartItemRepositoryVApi.md#quoteguestcartitemrepositoryv1saveput) | **PUT** /V1/guest-carts/{cartId}/items/{itemId} | 
*QuoteGuestCartManagementVApi* | [**quoteGuestCartManagementV1CreateEmptyCartPost**](docs/Api/QuoteGuestCartManagementVApi.md#quoteguestcartmanagementv1createemptycartpost) | **POST** /V1/guest-carts | 
*QuoteGuestCartManagementVApi* | [**quoteGuestCartManagementV1PlaceOrderPut**](docs/Api/QuoteGuestCartManagementVApi.md#quoteguestcartmanagementv1placeorderput) | **PUT** /V1/guest-carts/{cartId}/order | 
*QuoteGuestCartRepositoryVApi* | [**quoteGuestCartRepositoryV1GetGet**](docs/Api/QuoteGuestCartRepositoryVApi.md#quoteguestcartrepositoryv1getget) | **GET** /V1/guest-carts/{cartId} | 
*QuoteGuestCartTotalManagementVApi* | [**quoteGuestCartTotalManagementV1CollectTotalsPut**](docs/Api/QuoteGuestCartTotalManagementVApi.md#quoteguestcarttotalmanagementv1collecttotalsput) | **PUT** /V1/guest-carts/{cartId}/collect-totals | 
*QuoteGuestCartTotalRepositoryVApi* | [**quoteGuestCartTotalRepositoryV1GetGet**](docs/Api/QuoteGuestCartTotalRepositoryVApi.md#quoteguestcarttotalrepositoryv1getget) | **GET** /V1/guest-carts/{cartId}/totals | 
*QuoteGuestCouponManagementVApi* | [**quoteGuestCouponManagementV1GetGet**](docs/Api/QuoteGuestCouponManagementVApi.md#quoteguestcouponmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/coupons | 
*QuoteGuestCouponManagementVApi* | [**quoteGuestCouponManagementV1RemoveDelete**](docs/Api/QuoteGuestCouponManagementVApi.md#quoteguestcouponmanagementv1removedelete) | **DELETE** /V1/guest-carts/{cartId}/coupons | 
*QuoteGuestCouponManagementVApi* | [**quoteGuestCouponManagementV1SetPut**](docs/Api/QuoteGuestCouponManagementVApi.md#quoteguestcouponmanagementv1setput) | **PUT** /V1/guest-carts/{cartId}/coupons/{couponCode} | 
*QuoteGuestPaymentMethodManagementVApi* | [**quoteGuestPaymentMethodManagementV1GetGet**](docs/Api/QuoteGuestPaymentMethodManagementVApi.md#quoteguestpaymentmethodmanagementv1getget) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
*QuoteGuestPaymentMethodManagementVApi* | [**quoteGuestPaymentMethodManagementV1GetListGet**](docs/Api/QuoteGuestPaymentMethodManagementVApi.md#quoteguestpaymentmethodmanagementv1getlistget) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
*QuoteGuestPaymentMethodManagementVApi* | [**quoteGuestPaymentMethodManagementV1SetPut**](docs/Api/QuoteGuestPaymentMethodManagementVApi.md#quoteguestpaymentmethodmanagementv1setput) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 
*QuoteGuestShippingMethodManagementVApi* | [**quoteGuestShippingMethodManagementV1EstimateByAddressPost**](docs/Api/QuoteGuestShippingMethodManagementVApi.md#quoteguestshippingmethodmanagementv1estimatebyaddresspost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 
*QuoteGuestShippingMethodManagementVApi* | [**quoteGuestShippingMethodManagementV1GetListGet**](docs/Api/QuoteGuestShippingMethodManagementVApi.md#quoteguestshippingmethodmanagementv1getlistget) | **GET** /V1/guest-carts/{cartId}/shipping-methods | 
*SearchVApi* | [**searchV1SearchGet**](docs/Api/SearchVApi.md#searchv1searchget) | **GET** /V1/search | 


## Documentation For Models

 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body11](docs/Model/Body11.md)
 - [Body12](docs/Model/Body12.md)
 - [Body13](docs/Model/Body13.md)
 - [Body14](docs/Model/Body14.md)
 - [Body15](docs/Model/Body15.md)
 - [Body16](docs/Model/Body16.md)
 - [Body17](docs/Model/Body17.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [BundleDataBundleOptionExtensionInterface](docs/Model/BundleDataBundleOptionExtensionInterface.md)
 - [BundleDataBundleOptionInterface](docs/Model/BundleDataBundleOptionInterface.md)
 - [CatalogDataCustomOptionExtensionInterface](docs/Model/CatalogDataCustomOptionExtensionInterface.md)
 - [CatalogDataCustomOptionInterface](docs/Model/CatalogDataCustomOptionInterface.md)
 - [CheckoutDataPaymentDetailsExtensionInterface](docs/Model/CheckoutDataPaymentDetailsExtensionInterface.md)
 - [CheckoutDataPaymentDetailsInterface](docs/Model/CheckoutDataPaymentDetailsInterface.md)
 - [CheckoutDataShippingInformationExtensionInterface](docs/Model/CheckoutDataShippingInformationExtensionInterface.md)
 - [CheckoutDataShippingInformationInterface](docs/Model/CheckoutDataShippingInformationInterface.md)
 - [CheckoutDataTotalsInformationExtensionInterface](docs/Model/CheckoutDataTotalsInformationExtensionInterface.md)
 - [CheckoutDataTotalsInformationInterface](docs/Model/CheckoutDataTotalsInformationInterface.md)
 - [ConfigurableProductDataConfigurableItemOptionValueExtensionInterface](docs/Model/ConfigurableProductDataConfigurableItemOptionValueExtensionInterface.md)
 - [ConfigurableProductDataConfigurableItemOptionValueInterface](docs/Model/ConfigurableProductDataConfigurableItemOptionValueInterface.md)
 - [CustomerDataAddressExtensionInterface](docs/Model/CustomerDataAddressExtensionInterface.md)
 - [CustomerDataAddressInterface](docs/Model/CustomerDataAddressInterface.md)
 - [CustomerDataCustomerExtensionInterface](docs/Model/CustomerDataCustomerExtensionInterface.md)
 - [CustomerDataCustomerInterface](docs/Model/CustomerDataCustomerInterface.md)
 - [CustomerDataRegionExtensionInterface](docs/Model/CustomerDataRegionExtensionInterface.md)
 - [CustomerDataRegionInterface](docs/Model/CustomerDataRegionInterface.md)
 - [DirectoryDataCountryInformationExtensionInterface](docs/Model/DirectoryDataCountryInformationExtensionInterface.md)
 - [DirectoryDataCountryInformationInterface](docs/Model/DirectoryDataCountryInformationInterface.md)
 - [DirectoryDataCurrencyInformationExtensionInterface](docs/Model/DirectoryDataCurrencyInformationExtensionInterface.md)
 - [DirectoryDataCurrencyInformationInterface](docs/Model/DirectoryDataCurrencyInformationInterface.md)
 - [DirectoryDataExchangeRateExtensionInterface](docs/Model/DirectoryDataExchangeRateExtensionInterface.md)
 - [DirectoryDataExchangeRateInterface](docs/Model/DirectoryDataExchangeRateInterface.md)
 - [DirectoryDataRegionInformationExtensionInterface](docs/Model/DirectoryDataRegionInformationExtensionInterface.md)
 - [DirectoryDataRegionInformationInterface](docs/Model/DirectoryDataRegionInformationInterface.md)
 - [DownloadableDataDownloadableOptionInterface](docs/Model/DownloadableDataDownloadableOptionInterface.md)
 - [ErrorErrors](docs/Model/ErrorErrors.md)
 - [ErrorErrorsItem](docs/Model/ErrorErrorsItem.md)
 - [ErrorParameters](docs/Model/ErrorParameters.md)
 - [ErrorParametersItem](docs/Model/ErrorParametersItem.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FrameworkAttributeInterface](docs/Model/FrameworkAttributeInterface.md)
 - [FrameworkDataImageContentInterface](docs/Model/FrameworkDataImageContentInterface.md)
 - [FrameworkFilter](docs/Model/FrameworkFilter.md)
 - [FrameworkSearchAggregationInterface](docs/Model/FrameworkSearchAggregationInterface.md)
 - [FrameworkSearchAggregationValueInterface](docs/Model/FrameworkSearchAggregationValueInterface.md)
 - [FrameworkSearchBucketInterface](docs/Model/FrameworkSearchBucketInterface.md)
 - [FrameworkSearchDocumentInterface](docs/Model/FrameworkSearchDocumentInterface.md)
 - [FrameworkSearchFilterGroup](docs/Model/FrameworkSearchFilterGroup.md)
 - [FrameworkSearchSearchCriteriaInterface](docs/Model/FrameworkSearchSearchCriteriaInterface.md)
 - [FrameworkSearchSearchResultInterface](docs/Model/FrameworkSearchSearchResultInterface.md)
 - [FrameworkSortOrder](docs/Model/FrameworkSortOrder.md)
 - [GiftMessageDataMessageExtensionInterface](docs/Model/GiftMessageDataMessageExtensionInterface.md)
 - [GiftMessageDataMessageInterface](docs/Model/GiftMessageDataMessageInterface.md)
 - [QuoteDataAddressExtensionInterface](docs/Model/QuoteDataAddressExtensionInterface.md)
 - [QuoteDataAddressInterface](docs/Model/QuoteDataAddressInterface.md)
 - [QuoteDataCartExtensionInterface](docs/Model/QuoteDataCartExtensionInterface.md)
 - [QuoteDataCartInterface](docs/Model/QuoteDataCartInterface.md)
 - [QuoteDataCartItemExtensionInterface](docs/Model/QuoteDataCartItemExtensionInterface.md)
 - [QuoteDataCartItemInterface](docs/Model/QuoteDataCartItemInterface.md)
 - [QuoteDataCurrencyExtensionInterface](docs/Model/QuoteDataCurrencyExtensionInterface.md)
 - [QuoteDataCurrencyInterface](docs/Model/QuoteDataCurrencyInterface.md)
 - [QuoteDataEstimateAddressExtensionInterface](docs/Model/QuoteDataEstimateAddressExtensionInterface.md)
 - [QuoteDataEstimateAddressInterface](docs/Model/QuoteDataEstimateAddressInterface.md)
 - [QuoteDataPaymentExtensionInterface](docs/Model/QuoteDataPaymentExtensionInterface.md)
 - [QuoteDataPaymentInterface](docs/Model/QuoteDataPaymentInterface.md)
 - [QuoteDataPaymentMethodInterface](docs/Model/QuoteDataPaymentMethodInterface.md)
 - [QuoteDataProductOptionExtensionInterface](docs/Model/QuoteDataProductOptionExtensionInterface.md)
 - [QuoteDataProductOptionInterface](docs/Model/QuoteDataProductOptionInterface.md)
 - [QuoteDataShippingAssignmentExtensionInterface](docs/Model/QuoteDataShippingAssignmentExtensionInterface.md)
 - [QuoteDataShippingAssignmentInterface](docs/Model/QuoteDataShippingAssignmentInterface.md)
 - [QuoteDataShippingExtensionInterface](docs/Model/QuoteDataShippingExtensionInterface.md)
 - [QuoteDataShippingInterface](docs/Model/QuoteDataShippingInterface.md)
 - [QuoteDataShippingMethodExtensionInterface](docs/Model/QuoteDataShippingMethodExtensionInterface.md)
 - [QuoteDataShippingMethodInterface](docs/Model/QuoteDataShippingMethodInterface.md)
 - [QuoteDataTotalSegmentExtensionInterface](docs/Model/QuoteDataTotalSegmentExtensionInterface.md)
 - [QuoteDataTotalSegmentInterface](docs/Model/QuoteDataTotalSegmentInterface.md)
 - [QuoteDataTotalsAdditionalDataExtensionInterface](docs/Model/QuoteDataTotalsAdditionalDataExtensionInterface.md)
 - [QuoteDataTotalsAdditionalDataInterface](docs/Model/QuoteDataTotalsAdditionalDataInterface.md)
 - [QuoteDataTotalsExtensionInterface](docs/Model/QuoteDataTotalsExtensionInterface.md)
 - [QuoteDataTotalsInterface](docs/Model/QuoteDataTotalsInterface.md)
 - [QuoteDataTotalsItemExtensionInterface](docs/Model/QuoteDataTotalsItemExtensionInterface.md)
 - [QuoteDataTotalsItemInterface](docs/Model/QuoteDataTotalsItemInterface.md)
 - [TaxDataGrandTotalDetailsInterface](docs/Model/TaxDataGrandTotalDetailsInterface.md)
 - [TaxDataGrandTotalRatesInterface](docs/Model/TaxDataGrandTotalRatesInterface.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author





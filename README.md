# .
A minimal Electio client

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

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
      "url": "https://github.com/chrishemmings/electio.git"
    }
  ],
  "require": {
    "chrishemmings/electio": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\AllocationApi();
$allocation = new \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService(); // \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService | Consignment to create

try {
    $api_instance->allocateWithCarrierService($allocation);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithCarrierService: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.electioapp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AllocationApi* | [**allocateWithCarrierService**](docs/Api/AllocationApi.md#allocatewithcarrierservice) | **PUT** /allocation/allocateWithCarrierService | Allocate a consignment to a specified delivery service
*ConsignmentApi* | [**createConsignment**](docs/Api/ConsignmentApi.md#createconsignment) | **POST** /consignments | Create a consignment
*ConsignmentApi* | [**getConsignment**](docs/Api/ConsignmentApi.md#getconsignment) | **GET** /consignments/{consignmentReference} | Fetch a consignment by reference
*ConsignmentApi* | [**getConsignmentSummary**](docs/Api/ConsignmentApi.md#getconsignmentsummary) | **GET** /consignments/summary | Fetch a summary of consignment statuses
*DeliveryOptionsApi* | [**getConsignmentDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getconsignmentdeliveryoptions) | **GET** /deliveryoptions/consignment/{consignmentReference} | Fetch delivery options for a consignment
*DeliveryOptionsApi* | [**getDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptions) | **POST** /deliveryoptions | Get delivery options for passed consignment details
*DocumentsApi* | [**getConsignmentDocuments**](docs/Api/DocumentsApi.md#getconsignmentdocuments) | **GET** /consignments/docs/{consignmentReference} | Fetch customs documents
*DocumentsApi* | [**getConsignmentLabels**](docs/Api/DocumentsApi.md#getconsignmentlabels) | **GET** /documents/labels/{consignmentReference} | Fetch labels for a specified consignment
*TrackingApi* | [**getConsignmentTracking**](docs/Api/TrackingApi.md#getconsignmenttracking) | **GET** /tracking/{consignmentReference} | Fetch tracking information for given reference


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressType](docs/Model/AddressType.md)
 - [AllocateWithCarrierService](docs/Model/AllocateWithCarrierService.md)
 - [Allocation](docs/Model/Allocation.md)
 - [Barcode](docs/Model/Barcode.md)
 - [CategoryType](docs/Model/CategoryType.md)
 - [Consignment](docs/Model/Consignment.md)
 - [ConsignmentLeg](docs/Model/ConsignmentLeg.md)
 - [ConsignmentState](docs/Model/ConsignmentState.md)
 - [Contact](docs/Model/Contact.md)
 - [Country](docs/Model/Country.md)
 - [CreateConsignment](docs/Model/CreateConsignment.md)
 - [CreateConsignmentResponse](docs/Model/CreateConsignmentResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [CustomsDocumentation](docs/Model/CustomsDocumentation.md)
 - [DeliveryOption](docs/Model/DeliveryOption.md)
 - [DeliveryOptionsRequest](docs/Model/DeliveryOptionsRequest.md)
 - [DeliveryOptionsResponse](docs/Model/DeliveryOptionsResponse.md)
 - [DeliveryWindow](docs/Model/DeliveryWindow.md)
 - [Dimensions](docs/Model/Dimensions.md)
 - [EstimatedDeliveryDate](docs/Model/EstimatedDeliveryDate.md)
 - [EventViewModel](docs/Model/EventViewModel.md)
 - [FailedAllocation](docs/Model/FailedAllocation.md)
 - [IsoCode](docs/Model/IsoCode.md)
 - [Item](docs/Model/Item.md)
 - [LabelResponse](docs/Model/LabelResponse.md)
 - [LatitudeLongitude](docs/Model/LatitudeLongitude.md)
 - [LocationInformation](docs/Model/LocationInformation.md)
 - [MetaData](docs/Model/MetaData.md)
 - [Money](docs/Model/Money.md)
 - [Package](docs/Model/Package.md)
 - [PackageViewModel](docs/Model/PackageViewModel.md)
 - [Rate](docs/Model/Rate.md)
 - [RequiredDeliveryDate](docs/Model/RequiredDeliveryDate.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ResponseErrorDetail](docs/Model/ResponseErrorDetail.md)
 - [ShippingTerms](docs/Model/ShippingTerms.md)
 - [SummaryItem](docs/Model/SummaryItem.md)
 - [SummaryResponse](docs/Model/SummaryResponse.md)
 - [TrackingResponse](docs/Model/TrackingResponse.md)
 - [VatRate](docs/Model/VatRate.md)
 - [VatRateType](docs/Model/VatRateType.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization


## Ocp-Apim-Subscription-Key

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header


## Author

chris@hemmin.gs



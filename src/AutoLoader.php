<?php declare(strict_types=1);
require_once ('Support/CollectionProxy.php');
require_once ('Support/Arr.php');
require_once ('Support/Collection.php');
require_once ('Support/Helpers.php');
require_once ('Support/HigherOrderCollectionProxy.php');
require_once ('Support/Str.php');
require_once ('Helper/RequestError.php');
require_once ('Helper/MyParcelCollection.php');
require_once ('Helper/MyParcelCurl.php');
require_once ('Helper/SplitStreet.php');
require_once ('Helper/LabelHelper.php');
require_once ('Helper/CheckoutFields.php');
require_once ('Services/CheckApiKeyService.php');
require_once ('Services/ConsignmentEncode.php');
require_once ('Services/CollectionEncode.php');
require_once ('Concerns/HasCheckoutFields.php');
require_once ('Model/MyParcelRequest.php');
require_once ('Model/AbstractConsignment.php');
require_once ('Adapter/ConsignmentAdapter.php');
require_once ('Model/MyParcelConsignment.php');
require_once ('Model/MyParcelCustomsItem.php');

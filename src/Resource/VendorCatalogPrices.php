<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorCatalogPrices\GetVendorQuotesCatalogsVendorPrice;
use StevenGrant\SimproSdk\Requests\VendorCatalogPrices\ListVendorQuotesCatalogsVendorPrices;
use StevenGrant\SimproSdk\Requests\VendorCatalogPrices\UpdateVendorQuotesCatalogsVendorPrice;

class VendorCatalogPrices extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorQuotesCatalogsVendorPrices(
        mixed $companyId,
        mixed $vendorQuoteId,
        mixed $catalogId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorQuotesCatalogsVendorPrices($companyId, $vendorQuoteId, $catalogId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorQuotesCatalogsVendorPrice(
        mixed $companyId,
        mixed $vendorQuoteId,
        mixed $catalogId,
        mixed $vendorId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorQuotesCatalogsVendorPrice($companyId, $vendorQuoteId, $catalogId, $vendorId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $vendorId  A valid vendor id
     */
    public function updateVendorQuotesCatalogsVendorPrice(
        mixed $companyId,
        mixed $vendorQuoteId,
        mixed $catalogId,
        mixed $vendorId,
    ): Response {
        return $this->connector->send(new UpdateVendorQuotesCatalogsVendorPrice($companyId, $vendorQuoteId, $catalogId, $vendorId));
    }
}

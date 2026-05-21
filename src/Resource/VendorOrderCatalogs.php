<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorOrderCatalogs\GetVendorOrderCatalog;
use StevenGrant\SimproSdk\Requests\VendorOrderCatalogs\ListVendorOrderCatalogs;

class VendorOrderCatalogs extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorOrderCatalogs(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorOrderCatalogs($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderCatalogId  A composite identifier formatted as {VendorOrderID}-{CatalogID} that uniquely identifies a vendor order catalog entry by combining the vendor order ID and the catalog item ID with a hyphen delimiter.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorOrderCatalog(mixed $companyId, mixed $vendorOrderCatalogId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetVendorOrderCatalog($companyId, $vendorOrderCatalogId, $columns));
    }
}

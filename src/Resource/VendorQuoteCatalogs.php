<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs\CreateVendorQuotesCatalogs;
use StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs\DeleteVendorQuotesCatalog;
use StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs\GetVendorQuotesCatalog;
use StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs\ListVendorQuotesCatalogs;
use StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs\UpdateVendorQuotesCatalog;

class VendorQuoteCatalogs extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listVendorQuotesCatalogs(
        mixed $companyId,
        mixed $vendorQuoteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListVendorQuotesCatalogs($companyId, $vendorQuoteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     */
    public function createVendorQuotesCatalogs(mixed $companyId, mixed $vendorQuoteId): Response
    {
        return $this->connector->send(new CreateVendorQuotesCatalogs($companyId, $vendorQuoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getVendorQuotesCatalog(
        mixed $companyId,
        mixed $vendorQuoteId,
        mixed $catalogId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetVendorQuotesCatalog($companyId, $vendorQuoteId, $catalogId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function deleteVendorQuotesCatalog(mixed $companyId, mixed $vendorQuoteId, mixed $catalogId): Response
    {
        return $this->connector->send(new DeleteVendorQuotesCatalog($companyId, $vendorQuoteId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function updateVendorQuotesCatalog(mixed $companyId, mixed $vendorQuoteId, mixed $catalogId): Response
    {
        return $this->connector->send(new UpdateVendorQuotesCatalog($companyId, $vendorQuoteId, $catalogId));
    }
}

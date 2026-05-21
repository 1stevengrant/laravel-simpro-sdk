<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogVendors\CreateCatalogsVendors;
use StevenGrant\SimproSdk\Requests\CatalogVendors\DeleteCatalogsVendor;
use StevenGrant\SimproSdk\Requests\CatalogVendors\GetCatalogsVendor;
use StevenGrant\SimproSdk\Requests\CatalogVendors\ListCatalogsVendors;
use StevenGrant\SimproSdk\Requests\CatalogVendors\UpdateCatalogsVendor;

class CatalogVendors extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCatalogsVendors(
        mixed $companyId,
        mixed $catalogId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCatalogsVendors($companyId, $catalogId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function createCatalogsVendors(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new CreateCatalogsVendors($companyId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $catalogVendorId  A valid catalog vendor id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalogsVendor(
        mixed $companyId,
        mixed $catalogId,
        mixed $catalogVendorId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCatalogsVendor($companyId, $catalogId, $catalogVendorId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $catalogVendorId  A valid catalog vendor id
     */
    public function deleteCatalogsVendor(mixed $companyId, mixed $catalogId, mixed $catalogVendorId): Response
    {
        return $this->connector->send(new DeleteCatalogsVendor($companyId, $catalogId, $catalogVendorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $catalogVendorId  A valid catalog vendor id
     */
    public function updateCatalogsVendor(mixed $companyId, mixed $catalogId, mixed $catalogVendorId): Response
    {
        return $this->connector->send(new UpdateCatalogsVendor($companyId, $catalogId, $catalogVendorId));
    }
}

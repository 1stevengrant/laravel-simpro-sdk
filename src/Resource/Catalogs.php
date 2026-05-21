<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Catalogs\CreateCatalogs;
use StevenGrant\SimproSdk\Requests\Catalogs\DeleteCatalog;
use StevenGrant\SimproSdk\Requests\Catalogs\GetCatalog;
use StevenGrant\SimproSdk\Requests\Catalogs\ListCatalogs;
use StevenGrant\SimproSdk\Requests\Catalogs\UpdateCatalog;

class Catalogs extends BaseResource
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
     * @param  mixed  $searchText  Set a wildcard search text to filter catalogs by search term, name or part number.
     */
    public function listCatalogs(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $searchText = null,
    ): Response {
        return $this->connector->send(new ListCatalogs($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $searchText));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createCatalogs(mixed $companyId): Response
    {
        return $this->connector->send(new CreateCatalogs($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalog(mixed $companyId, mixed $catalogId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetCatalog($companyId, $catalogId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function deleteCatalog(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new DeleteCatalog($companyId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function updateCatalog(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new UpdateCatalog($companyId, $catalogId));
    }
}

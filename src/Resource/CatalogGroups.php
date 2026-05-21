<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogGroups\CreateCatalogGroups;
use StevenGrant\SimproSdk\Requests\CatalogGroups\DeleteCatalogGroup;
use StevenGrant\SimproSdk\Requests\CatalogGroups\GetCatalogGroup;
use StevenGrant\SimproSdk\Requests\CatalogGroups\ListCatalogGroups;
use StevenGrant\SimproSdk\Requests\CatalogGroups\UpdateCatalogGroup;

class CatalogGroups extends BaseResource
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
    public function listCatalogGroups(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCatalogGroups($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createCatalogGroups(mixed $companyId): Response
    {
        return $this->connector->send(new CreateCatalogGroups($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalogGroup(mixed $companyId, mixed $groupId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetCatalogGroup($companyId, $groupId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     */
    public function deleteCatalogGroup(mixed $companyId, mixed $groupId): Response
    {
        return $this->connector->send(new DeleteCatalogGroup($companyId, $groupId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     */
    public function updateCatalogGroup(mixed $companyId, mixed $groupId): Response
    {
        return $this->connector->send(new UpdateCatalogGroup($companyId, $groupId));
    }
}

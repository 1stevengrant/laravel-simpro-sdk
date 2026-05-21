<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PrebuildGroups\CreatePrebuildGroups;
use StevenGrant\SimproSdk\Requests\PrebuildGroups\DeletePrebuildGroup;
use StevenGrant\SimproSdk\Requests\PrebuildGroups\GetPrebuildGroup;
use StevenGrant\SimproSdk\Requests\PrebuildGroups\ListPrebuildGroups;
use StevenGrant\SimproSdk\Requests\PrebuildGroups\UpdatePrebuildGroup;

class PrebuildGroups extends BaseResource
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
    public function listPrebuildGroups(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPrebuildGroups($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createPrebuildGroups(mixed $companyId): Response
    {
        return $this->connector->send(new CreatePrebuildGroups($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPrebuildGroup(mixed $companyId, mixed $groupId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetPrebuildGroup($companyId, $groupId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     */
    public function deletePrebuildGroup(mixed $companyId, mixed $groupId): Response
    {
        return $this->connector->send(new DeletePrebuildGroup($companyId, $groupId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     */
    public function updatePrebuildGroup(mixed $companyId, mixed $groupId): Response
    {
        return $this->connector->send(new UpdatePrebuildGroup($companyId, $groupId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateSubGroups\CreateTakeOffTemplateGroupsSubGroups;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateSubGroups\DeleteTakeOffTemplateGroupsSubGroup;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateSubGroups\GetTakeOffTemplateGroupsSubGroup;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateSubGroups\ListTakeOffTemplateGroupsSubGroups;
use StevenGrant\SimproSdk\Requests\TakeOffTemplateSubGroups\UpdateTakeOffTemplateGroupsSubGroup;

class TakeOffTemplateSubGroups extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listTakeOffTemplateGroupsSubGroups(
        mixed $companyId,
        mixed $groupId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTakeOffTemplateGroupsSubGroups($companyId, $groupId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     */
    public function createTakeOffTemplateGroupsSubGroups(mixed $companyId, mixed $groupId): Response
    {
        return $this->connector->send(new CreateTakeOffTemplateGroupsSubGroups($companyId, $groupId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $subGroupId  A valid sub group id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTakeOffTemplateGroupsSubGroup(
        mixed $companyId,
        mixed $groupId,
        mixed $subGroupId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTakeOffTemplateGroupsSubGroup($companyId, $groupId, $subGroupId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $subGroupId  A valid sub group id
     */
    public function deleteTakeOffTemplateGroupsSubGroup(mixed $companyId, mixed $groupId, mixed $subGroupId): Response
    {
        return $this->connector->send(new DeleteTakeOffTemplateGroupsSubGroup($companyId, $groupId, $subGroupId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $groupId  A valid group id
     * @param  mixed  $subGroupId  A valid sub group id
     */
    public function updateTakeOffTemplateGroupsSubGroup(mixed $companyId, mixed $groupId, mixed $subGroupId): Response
    {
        return $this->connector->send(new UpdateTakeOffTemplateGroupsSubGroup($companyId, $groupId, $subGroupId));
    }
}

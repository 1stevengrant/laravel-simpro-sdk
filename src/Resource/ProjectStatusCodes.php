<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ProjectStatusCodes\CreateSetupStatusCodesProjects;
use StevenGrant\SimproSdk\Requests\ProjectStatusCodes\DeleteSetupStatusCodesProject;
use StevenGrant\SimproSdk\Requests\ProjectStatusCodes\GetSetupStatusCodesProject;
use StevenGrant\SimproSdk\Requests\ProjectStatusCodes\ListSetupStatusCodesProjects;
use StevenGrant\SimproSdk\Requests\ProjectStatusCodes\UpdateSetupStatusCodesProject;

class ProjectStatusCodes extends BaseResource
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
    public function listSetupStatusCodesProjects(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupStatusCodesProjects($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupStatusCodesProjects(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupStatusCodesProjects($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $statusCodeId  A valid status code id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupStatusCodesProject(mixed $companyId, mixed $statusCodeId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupStatusCodesProject($companyId, $statusCodeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $statusCodeId  A valid status code id
     */
    public function deleteSetupStatusCodesProject(mixed $companyId, mixed $statusCodeId): Response
    {
        return $this->connector->send(new DeleteSetupStatusCodesProject($companyId, $statusCodeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $statusCodeId  A valid status code id
     */
    public function updateSetupStatusCodesProject(mixed $companyId, mixed $statusCodeId): Response
    {
        return $this->connector->send(new UpdateSetupStatusCodesProject($companyId, $statusCodeId));
    }
}

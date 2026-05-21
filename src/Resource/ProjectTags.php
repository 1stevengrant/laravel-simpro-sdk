<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ProjectTags\CreateSetupTagsProjects;
use StevenGrant\SimproSdk\Requests\ProjectTags\DeleteSetupTagsProject;
use StevenGrant\SimproSdk\Requests\ProjectTags\GetSetupTagsProject;
use StevenGrant\SimproSdk\Requests\ProjectTags\ListSetupTagsProjects;
use StevenGrant\SimproSdk\Requests\ProjectTags\UpdateSetupTagsProject;

class ProjectTags extends BaseResource
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
    public function listSetupTagsProjects(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupTagsProjects($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupTagsProjects(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupTagsProjects($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $projectTagId  A valid project tag id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupTagsProject(mixed $companyId, mixed $projectTagId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupTagsProject($companyId, $projectTagId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $projectTagId  A valid project tag id
     */
    public function deleteSetupTagsProject(mixed $companyId, mixed $projectTagId): Response
    {
        return $this->connector->send(new DeleteSetupTagsProject($companyId, $projectTagId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $projectTagId  A valid project tag id
     */
    public function updateSetupTagsProject(mixed $companyId, mixed $projectTagId): Response
    {
        return $this->connector->send(new UpdateSetupTagsProject($companyId, $projectTagId));
    }
}

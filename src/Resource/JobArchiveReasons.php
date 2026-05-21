<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobArchiveReasons\CreateSetupArchiveReasonsJobs;
use StevenGrant\SimproSdk\Requests\JobArchiveReasons\DeleteSetupArchiveReasonsJob;
use StevenGrant\SimproSdk\Requests\JobArchiveReasons\GetSetupArchiveReasonsJob;
use StevenGrant\SimproSdk\Requests\JobArchiveReasons\ListSetupArchiveReasonsJobs;
use StevenGrant\SimproSdk\Requests\JobArchiveReasons\UpdateSetupArchiveReasonsJob;

class JobArchiveReasons extends BaseResource
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
    public function listSetupArchiveReasonsJobs(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupArchiveReasonsJobs($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupArchiveReasonsJobs(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupArchiveReasonsJobs($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupArchiveReasonsJob(mixed $companyId, mixed $archiveReasonId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupArchiveReasonsJob($companyId, $archiveReasonId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     */
    public function deleteSetupArchiveReasonsJob(mixed $companyId, mixed $archiveReasonId): Response
    {
        return $this->connector->send(new DeleteSetupArchiveReasonsJob($companyId, $archiveReasonId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $archiveReasonId  A valid archive reason id
     */
    public function updateSetupArchiveReasonsJob(mixed $companyId, mixed $archiveReasonId): Response
    {
        return $this->connector->send(new UpdateSetupArchiveReasonsJob($companyId, $archiveReasonId));
    }
}

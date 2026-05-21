<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\CreateJobsSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\DeleteJobsSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\GetJobsSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\ListJobsSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\ReplaceJobsSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\JobCostCenterOneOffItems\UpdateJobsSectionsCostCentersOneOff;

class JobCostCenterOneOffItems extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listJobsSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersOneOffs($companyId, $jobId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function replaceJobsSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new ReplaceJobsSectionsCostCentersOneOffs($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createJobsSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersOneOffs($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersOneOff($companyId, $jobId, $sectionId, $costCenterId, $oneOffId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function deleteJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersOneOff($companyId, $jobId, $sectionId, $costCenterId, $oneOffId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function updateJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersOneOff($companyId, $jobId, $sectionId, $costCenterId, $oneOffId));
    }
}

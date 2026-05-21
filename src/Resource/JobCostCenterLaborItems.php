<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\CreateJobsSectionsCostCentersLabor;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\DeleteJobsSectionsCostCentersLabor;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\GetJobsSectionsCostCentersLabor;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\ListJobsSectionsCostCentersLabor;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\ReplaceJobsSectionsCostCentersLabor;
use StevenGrant\SimproSdk\Requests\JobCostCenterLaborItems\UpdateJobsSectionsCostCentersLabor;

class JobCostCenterLaborItems extends BaseResource
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
    public function listJobsSectionsCostCentersLabor(
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
        return $this->connector->send(new ListJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function replaceJobsSectionsCostCentersLabor(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new ReplaceJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createJobsSectionsCostCentersLabor(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $laborId  A valid labor id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersLabor(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $laborId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId, $laborId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $laborId  A valid labor id
     */
    public function deleteJobsSectionsCostCentersLabor(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $laborId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId, $laborId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $laborId  A valid labor id
     */
    public function updateJobsSectionsCostCentersLabor(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $laborId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersLabor($companyId, $jobId, $sectionId, $costCenterId, $laborId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\CreateJobsSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\DeleteJobsSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\GetJobsSectionsCostCentersPrebuild;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\ListJobsSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\ReplaceJobsSectionsCostCentersPrebuilds;
use StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems\UpdateJobsSectionsCostCentersPrebuild;

class JobCostCenterPrebuildItems extends BaseResource
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
    public function listJobsSectionsCostCentersPrebuilds(
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
        return $this->connector->send(new ListJobsSectionsCostCentersPrebuilds($companyId, $jobId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function replaceJobsSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new ReplaceJobsSectionsCostCentersPrebuilds($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createJobsSectionsCostCentersPrebuilds(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersPrebuilds($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getJobsSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersPrebuild($companyId, $jobId, $sectionId, $costCenterId, $prebuildId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function deleteJobsSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new DeleteJobsSectionsCostCentersPrebuild($companyId, $jobId, $sectionId, $costCenterId, $prebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function updateJobsSectionsCostCentersPrebuild(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $prebuildId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersPrebuild($companyId, $jobId, $sectionId, $costCenterId, $prebuildId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterStockItems\CreateJobsSectionsCostCentersStock;
use StevenGrant\SimproSdk\Requests\JobCostCenterStockItems\GetJobsSectionsCostCentersStock;
use StevenGrant\SimproSdk\Requests\JobCostCenterStockItems\ListJobsSectionsCostCentersStock;
use StevenGrant\SimproSdk\Requests\JobCostCenterStockItems\UpdateJobsSectionsCostCentersStock;

class JobCostCenterStockItems extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function listJobsSectionsCostCentersStock(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersStock($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createJobsSectionsCostCentersStock(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateJobsSectionsCostCentersStock($companyId, $jobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $stockId  A valid stock id
     */
    public function getJobsSectionsCostCentersStock(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $stockId,
    ): Response {
        return $this->connector->send(new GetJobsSectionsCostCentersStock($companyId, $jobId, $sectionId, $costCenterId, $stockId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $stockId  A valid stock id
     */
    public function updateJobsSectionsCostCentersStock(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $stockId,
    ): Response {
        return $this->connector->send(new UpdateJobsSectionsCostCentersStock($companyId, $jobId, $sectionId, $costCenterId, $stockId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderMobileSignatures\ListJobsSectionsCostCentersWorkOrdersMobileSignatures;

class JobCostCenterWorkOrderMobileSignatures extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     */
    public function listJobsSectionsCostCentersWorkOrdersMobileSignatures(
        mixed $companyId,
        mixed $jobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $workOrderId,
    ): Response {
        return $this->connector->send(new ListJobsSectionsCostCentersWorkOrdersMobileSignatures($companyId, $jobId, $sectionId, $costCenterId, $workOrderId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Requests\JobCostCenterWorkOrderAssetTestResultAttachments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile
 */
class UpdateJobsSectionsCostCentersWorkOrdersAssetsTestResultsAttachmentsFile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/jobs/{$this->jobId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/workOrders/{$this->workOrderId}/assets/{$this->assetId}/testResults/attachments/files/{$this->fileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $workOrderId  A valid work order id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $fileId  A valid file id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $jobId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $workOrderId,
        protected mixed $assetId,
        protected mixed $fileId,
    ) {}
}

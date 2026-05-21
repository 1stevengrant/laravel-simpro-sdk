<?php

namespace StevenGrant\SimproSdk\Requests\JobCostCenterTasks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getJobsSectionsCostCentersTask
 */
class GetJobsSectionsCostCentersTask extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/jobs/{$this->jobId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/tasks/{$this->taskId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $taskId  A valid task id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $jobId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $taskId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

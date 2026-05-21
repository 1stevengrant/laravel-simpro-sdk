<?php

namespace StevenGrant\SimproSdk\Requests\JobCostCenterPrebuildItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getJobsSectionsCostCentersPrebuild
 */
class GetJobsSectionsCostCentersPrebuild extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/jobs/{$this->jobId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/prebuilds/{$this->prebuildId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $jobId  A valid job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $jobId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $prebuildId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

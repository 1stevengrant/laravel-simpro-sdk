<?php

namespace StevenGrant\SimproSdk\Requests\RecurringJobCostCenters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteRecurringJobsSectionsCostCenter
 */
class DeleteRecurringJobsSectionsCostCenter extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/recurringJobs/{$this->recurringJobId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $recurringJobId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
    ) {}
}

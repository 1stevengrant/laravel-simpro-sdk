<?php

namespace StevenGrant\SimproSdk\Requests\LeadSchedules;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateLeadsSchedule
 */
class UpdateLeadsSchedule extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/leads/{$this->leadId}/schedules/{$this->scheduleId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $scheduleId  A valid schedule id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $leadId,
        protected mixed $scheduleId,
    ) {}
}

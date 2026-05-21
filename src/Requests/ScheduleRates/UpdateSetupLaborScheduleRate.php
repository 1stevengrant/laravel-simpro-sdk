<?php

namespace StevenGrant\SimproSdk\Requests\ScheduleRates;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateSetupLaborScheduleRate
 */
class UpdateSetupLaborScheduleRate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/labor/scheduleRates/{$this->scheduleRateId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $scheduleRateId  A valid schedule rate id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $scheduleRateId,
    ) {}
}

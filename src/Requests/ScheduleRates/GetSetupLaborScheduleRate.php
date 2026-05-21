<?php

namespace StevenGrant\SimproSdk\Requests\ScheduleRates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSetupLaborScheduleRate
 */
class GetSetupLaborScheduleRate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/labor/scheduleRates/{$this->scheduleRateId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $scheduleRateId  A valid schedule rate id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $scheduleRateId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

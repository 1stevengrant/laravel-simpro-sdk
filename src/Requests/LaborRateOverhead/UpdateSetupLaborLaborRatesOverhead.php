<?php

namespace StevenGrant\SimproSdk\Requests\LaborRateOverhead;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateSetupLaborLaborRatesOverhead
 */
class UpdateSetupLaborLaborRatesOverhead extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/labor/laborRates/overhead";
    }

    public function __construct() {}
}

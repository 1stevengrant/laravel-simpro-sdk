<?php

namespace StevenGrant\SimproSdk\Requests\LaborRateOverhead;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSetupLaborLaborRatesOverhead
 */
class ListSetupLaborLaborRatesOverhead extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/labor/laborRates/overhead";
    }

    public function __construct() {}
}

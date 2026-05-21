<?php

namespace StevenGrant\SimproSdk\Requests\Prebuilds;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updatePrebuildsStandardPrice
 */
class UpdatePrebuildsStandardPrice extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/prebuilds/standardPrice/{$this->standardPricePrebuildId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $standardPricePrebuildId  A valid standard price prebuild id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $standardPricePrebuildId,
    ) {}
}

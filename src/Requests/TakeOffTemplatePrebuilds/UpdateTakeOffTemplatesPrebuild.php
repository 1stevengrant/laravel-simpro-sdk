<?php

namespace StevenGrant\SimproSdk\Requests\TakeOffTemplatePrebuilds;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateTakeOffTemplatesPrebuild
 */
class UpdateTakeOffTemplatesPrebuild extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/takeOffTemplates/{$this->takeOffTemplateId}/prebuilds/{$this->prebuildsId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $prebuildsId  A valid prebuilds id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $takeOffTemplateId,
        protected mixed $prebuildsId,
    ) {}
}

<?php

namespace StevenGrant\SimproSdk\Requests\TakeOffTemplateOneOffs;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateTakeOffTemplatesOneOff
 */
class UpdateTakeOffTemplatesOneOff extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/takeOffTemplates/{$this->takeOffTemplateId}/oneOffs/{$this->oneOffsId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $oneOffsId  A valid one offs id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $takeOffTemplateId,
        protected mixed $oneOffsId,
    ) {}
}

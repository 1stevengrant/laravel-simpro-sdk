<?php

namespace StevenGrant\SimproSdk\Requests\TakeOffTemplateServiceFees;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteTakeOffTemplatesServiceFee
 */
class DeleteTakeOffTemplatesServiceFee extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/takeOffTemplates/{$this->takeOffTemplateId}/serviceFees/{$this->serviceFeeId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $serviceFeeId  A valid service fee id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $takeOffTemplateId,
        protected mixed $serviceFeeId,
    ) {}
}

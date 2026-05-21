<?php

namespace StevenGrant\SimproSdk\Requests\TakeOffTemplateCatalogs;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateTakeOffTemplatesCatalog
 */
class UpdateTakeOffTemplatesCatalog extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/takeOffTemplates/{$this->takeOffTemplateId}/catalogs/{$this->catalogId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $takeOffTemplateId  A valid take off template id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $takeOffTemplateId,
        protected mixed $catalogId,
    ) {}
}

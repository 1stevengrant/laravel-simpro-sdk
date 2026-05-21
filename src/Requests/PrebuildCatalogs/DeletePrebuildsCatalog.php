<?php

namespace StevenGrant\SimproSdk\Requests\PrebuildCatalogs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePrebuildsCatalog
 */
class DeletePrebuildsCatalog extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/prebuilds/{$this->prebuildId}/catalogs/{$this->catalogId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $prebuildId,
        protected mixed $catalogId,
    ) {}
}

<?php

namespace StevenGrant\SimproSdk\Requests\CatalogCurrencies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCatalogsCurrency
 */
class DeleteCatalogsCurrency extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogs/{$this->catalogId}/currencies/{$this->currencyId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $currencyId  A valid currency id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $catalogId,
        protected mixed $currencyId,
    ) {}
}

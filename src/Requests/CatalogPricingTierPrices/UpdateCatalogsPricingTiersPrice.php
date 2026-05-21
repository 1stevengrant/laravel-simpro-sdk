<?php

namespace StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateCatalogsPricingTiersPrice
 */
class UpdateCatalogsPricingTiersPrice extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogs/{$this->catalogId}/pricingTiers/{$this->pricingTierId}/prices/{$this->priceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  mixed  $priceId  A valid price id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $catalogId,
        protected mixed $pricingTierId,
        protected mixed $priceId,
    ) {}
}

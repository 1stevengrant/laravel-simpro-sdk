<?php

namespace StevenGrant\SimproSdk\Requests\CatalogPricingTierPrices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listCatalogsPricingTiersPrices
 */
class ListCatalogsPricingTiersPrices extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogs/{$this->catalogId}/pricingTiers/{$this->pricingTierId}/prices";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $catalogId,
        protected mixed $pricingTierId,
        protected mixed $search = null,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['search' => $this->search, 'columns' => $this->columns]);
    }
}

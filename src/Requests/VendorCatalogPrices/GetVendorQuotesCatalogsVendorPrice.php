<?php

namespace StevenGrant\SimproSdk\Requests\VendorCatalogPrices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVendorQuotesCatalogsVendorPrice
 */
class GetVendorQuotesCatalogsVendorPrice extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorQuotes/{$this->vendorQuoteId}/catalogs/{$this->catalogId}/vendorPrices/{$this->vendorId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $vendorId  A valid vendor id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorQuoteId,
        protected mixed $catalogId,
        protected mixed $vendorId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

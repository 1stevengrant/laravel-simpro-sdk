<?php

namespace StevenGrant\SimproSdk\Requests\VendorCreditCatalogs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVendorCreditCatalog
 */
class GetVendorCreditCatalog extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorCreditCatalogs/{$this->vendorCreditCatalogId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorCreditCatalogId  A composite identifier formatted as {VendorCreditID}-{CatalogID} that uniquely identifies a vendor credit catalog entry by combining the vendor credit ID and the catalog item ID with a hyphen delimiter.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorCreditCatalogId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

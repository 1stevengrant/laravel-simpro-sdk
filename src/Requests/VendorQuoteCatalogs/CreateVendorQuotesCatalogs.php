<?php

namespace StevenGrant\SimproSdk\Requests\VendorQuoteCatalogs;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createVendorQuotesCatalogs
 */
class CreateVendorQuotesCatalogs extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorQuotes/{$this->vendorQuoteId}/catalogs";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorQuoteId  A valid vendor quote id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorQuoteId,
    ) {}
}

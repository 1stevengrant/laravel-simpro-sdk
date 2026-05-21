<?php

namespace StevenGrant\SimproSdk\Requests\CatalogVendors;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateCatalogsVendor
 */
class UpdateCatalogsVendor extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogs/{$this->catalogId}/vendors/{$this->catalogVendorId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $catalogVendorId  A valid catalog vendor id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $catalogId,
        protected mixed $catalogVendorId,
    ) {}
}

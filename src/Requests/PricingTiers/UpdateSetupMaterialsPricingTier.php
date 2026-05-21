<?php

namespace StevenGrant\SimproSdk\Requests\PricingTiers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateSetupMaterialsPricingTier
 */
class UpdateSetupMaterialsPricingTier extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/materials/pricingTiers/{$this->pricingTierId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $pricingTierId  A valid pricing tier id
     * @param  null|mixed  $makeDefault  Making Pricing Tier Default
     * @param  null|mixed  $updateCustomers  Update customers default pricing tier, only works with makeDefault parameter
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $pricingTierId,
        protected mixed $makeDefault = null,
        protected mixed $updateCustomers = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['makeDefault' => $this->makeDefault, 'updateCustomers' => $this->updateCustomers]);
    }
}

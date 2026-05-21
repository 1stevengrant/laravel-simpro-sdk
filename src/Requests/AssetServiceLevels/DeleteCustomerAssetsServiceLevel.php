<?php

namespace StevenGrant\SimproSdk\Requests\AssetServiceLevels;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomerAssetsServiceLevel
 */
class DeleteCustomerAssetsServiceLevel extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customerAssets/{$this->customerAssetId}/serviceLevels/{$this->serviceLevelId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerAssetId  A valid customer asset id
     * @param  mixed  $serviceLevelId  A valid service level id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerAssetId,
        protected mixed $serviceLevelId,
    ) {}
}

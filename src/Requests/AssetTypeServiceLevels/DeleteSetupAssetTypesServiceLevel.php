<?php

namespace StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupAssetTypesServiceLevel
 */
class DeleteSetupAssetTypesServiceLevel extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/assetTypes/{$this->assetTypeId}/serviceLevels/{$this->assetTypeServiceLevelId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $assetTypeId,
        protected mixed $assetTypeServiceLevelId,
    ) {}
}

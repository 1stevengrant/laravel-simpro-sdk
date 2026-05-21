<?php

namespace StevenGrant\SimproSdk\Requests\Recommendations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSetupAssetTypesServiceLevelsFailurePointsRecommendation
 */
class GetSetupAssetTypesServiceLevelsFailurePointsRecommendation extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/assetTypes/{$this->assetTypeId}/serviceLevels/{$this->assetTypeServiceLevelId}/failurePoints/{$this->failurePointId}/recommendations/{$this->recommendationId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $recommendationId  A valid recommendation id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $assetTypeId,
        protected mixed $assetTypeServiceLevelId,
        protected mixed $failurePointId,
        protected mixed $recommendationId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

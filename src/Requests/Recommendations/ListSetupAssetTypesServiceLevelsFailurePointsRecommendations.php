<?php

namespace StevenGrant\SimproSdk\Requests\Recommendations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSetupAssetTypesServiceLevelsFailurePointsRecommendations
 */
class ListSetupAssetTypesServiceLevelsFailurePointsRecommendations extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/assetTypes/{$this->assetTypeId}/serviceLevels/{$this->assetTypeServiceLevelId}/failurePoints/{$this->failurePointId}/recommendations";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  null|mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  null|mixed  $page  Set the page number on paginated request
     * @param  null|mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  null|mixed  $limit  Set the limit of number of records in a request
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $assetTypeId,
        protected mixed $assetTypeServiceLevelId,
        protected mixed $failurePointId,
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $pageSize = null,
        protected mixed $page = null,
        protected mixed $orderby = null,
        protected mixed $limit = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'search' => $this->search,
            'columns' => $this->columns,
            'pageSize' => $this->pageSize,
            'page' => $this->page,
            'orderby' => $this->orderby,
            'limit' => $this->limit,
        ]);
    }
}

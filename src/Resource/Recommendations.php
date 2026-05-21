<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Recommendations\CreateSetupAssetTypesServiceLevelsFailurePointsRecommendations;
use StevenGrant\SimproSdk\Requests\Recommendations\DeleteSetupAssetTypesServiceLevelsFailurePointsRecommendation;
use StevenGrant\SimproSdk\Requests\Recommendations\GetSetupAssetTypeRecommendation;
use StevenGrant\SimproSdk\Requests\Recommendations\GetSetupAssetTypesServiceLevelsFailurePointsRecommendation;
use StevenGrant\SimproSdk\Requests\Recommendations\ListSetupAssetTypeRecommendations;
use StevenGrant\SimproSdk\Requests\Recommendations\ListSetupAssetTypesServiceLevelsFailurePointsRecommendations;
use StevenGrant\SimproSdk\Requests\Recommendations\UpdateSetupAssetTypesServiceLevelsFailurePointsRecommendation;

class Recommendations extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupAssetTypeRecommendations(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypeRecommendations($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeRecommendationId  A valid asset type recommendation id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypeRecommendation(
        mixed $companyId,
        mixed $assetTypeRecommendationId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypeRecommendation($companyId, $assetTypeRecommendationId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupAssetTypesServiceLevelsFailurePointsRecommendations(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesServiceLevelsFailurePointsRecommendations($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     */
    public function createSetupAssetTypesServiceLevelsFailurePointsRecommendations(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
    ): Response {
        return $this->connector->send(new CreateSetupAssetTypesServiceLevelsFailurePointsRecommendations($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $recommendationId  A valid recommendation id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesServiceLevelsFailurePointsRecommendation(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
        mixed $recommendationId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesServiceLevelsFailurePointsRecommendation($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId, $recommendationId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $recommendationId  A valid recommendation id
     */
    public function deleteSetupAssetTypesServiceLevelsFailurePointsRecommendation(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
        mixed $recommendationId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesServiceLevelsFailurePointsRecommendation($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId, $recommendationId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $recommendationId  A valid recommendation id
     */
    public function updateSetupAssetTypesServiceLevelsFailurePointsRecommendation(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
        mixed $recommendationId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesServiceLevelsFailurePointsRecommendation($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId, $recommendationId));
    }
}

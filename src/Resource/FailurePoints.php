<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\FailurePoints\CreateSetupAssetTypesServiceLevelsFailurePoints;
use StevenGrant\SimproSdk\Requests\FailurePoints\DeleteSetupAssetTypesServiceLevelsFailurePoint;
use StevenGrant\SimproSdk\Requests\FailurePoints\GetSetupAssetTypeFailurePoint;
use StevenGrant\SimproSdk\Requests\FailurePoints\GetSetupAssetTypesServiceLevelsFailurePoint;
use StevenGrant\SimproSdk\Requests\FailurePoints\ListSetupAssetTypeFailurePoints;
use StevenGrant\SimproSdk\Requests\FailurePoints\ListSetupAssetTypesServiceLevelsFailurePoints;
use StevenGrant\SimproSdk\Requests\FailurePoints\UpdateSetupAssetTypesServiceLevelsFailurePoint;

class FailurePoints extends BaseResource
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
    public function listSetupAssetTypeFailurePoints(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypeFailurePoints($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeFailurePointId  A valid asset type failure point id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypeFailurePoint(
        mixed $companyId,
        mixed $assetTypeFailurePointId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypeFailurePoint($companyId, $assetTypeFailurePointId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupAssetTypesServiceLevelsFailurePoints(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesServiceLevelsFailurePoints($companyId, $assetTypeId, $assetTypeServiceLevelId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     */
    public function createSetupAssetTypesServiceLevelsFailurePoints(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
    ): Response {
        return $this->connector->send(new CreateSetupAssetTypesServiceLevelsFailurePoints($companyId, $assetTypeId, $assetTypeServiceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesServiceLevelsFailurePoint(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesServiceLevelsFailurePoint($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     */
    public function deleteSetupAssetTypesServiceLevelsFailurePoint(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesServiceLevelsFailurePoint($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $failurePointId  A valid failure point id
     */
    public function updateSetupAssetTypesServiceLevelsFailurePoint(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $failurePointId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesServiceLevelsFailurePoint($companyId, $assetTypeId, $assetTypeServiceLevelId, $failurePointId));
    }
}

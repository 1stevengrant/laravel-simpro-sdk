<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels\CreateSetupAssetTypesServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels\DeleteSetupAssetTypesServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels\GetSetupAssetTypesServiceLevel;
use StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels\ListSetupAssetTypesServiceLevels;
use StevenGrant\SimproSdk\Requests\AssetTypeServiceLevels\UpdateSetupAssetTypesServiceLevel;

class AssetTypeServiceLevels extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSetupAssetTypesServiceLevels(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesServiceLevels($companyId, $assetTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function createSetupAssetTypesServiceLevels(mixed $companyId, mixed $assetTypeId): Response
    {
        return $this->connector->send(new CreateSetupAssetTypesServiceLevels($companyId, $assetTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesServiceLevel(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesServiceLevel($companyId, $assetTypeId, $assetTypeServiceLevelId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     */
    public function deleteSetupAssetTypesServiceLevel(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesServiceLevel($companyId, $assetTypeId, $assetTypeServiceLevelId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeServiceLevelId  A valid asset type service level id
     */
    public function updateSetupAssetTypesServiceLevel(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeServiceLevelId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesServiceLevel($companyId, $assetTypeId, $assetTypeServiceLevelId));
    }
}

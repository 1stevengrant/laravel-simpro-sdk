<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTypeCustomFields\CreateSetupAssetTypesCustomFields;
use StevenGrant\SimproSdk\Requests\AssetTypeCustomFields\DeleteSetupAssetTypesCustomField;
use StevenGrant\SimproSdk\Requests\AssetTypeCustomFields\GetSetupAssetTypesCustomField;
use StevenGrant\SimproSdk\Requests\AssetTypeCustomFields\ListSetupAssetTypesCustomFields;
use StevenGrant\SimproSdk\Requests\AssetTypeCustomFields\UpdateSetupAssetTypesCustomField;

class AssetTypeCustomFields extends BaseResource
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
    public function listSetupAssetTypesCustomFields(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesCustomFields($companyId, $assetTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function createSetupAssetTypesCustomFields(mixed $companyId, mixed $assetTypeId): Response
    {
        return $this->connector->send(new CreateSetupAssetTypesCustomFields($companyId, $assetTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeCustomFieldId  A valid asset type custom field id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesCustomField(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeCustomFieldId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesCustomField($companyId, $assetTypeId, $assetTypeCustomFieldId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeCustomFieldId  A valid asset type custom field id
     */
    public function deleteSetupAssetTypesCustomField(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeCustomFieldId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesCustomField($companyId, $assetTypeId, $assetTypeCustomFieldId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $assetTypeCustomFieldId  A valid asset type custom field id
     */
    public function updateSetupAssetTypesCustomField(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $assetTypeCustomFieldId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesCustomField($companyId, $assetTypeId, $assetTypeCustomFieldId));
    }
}

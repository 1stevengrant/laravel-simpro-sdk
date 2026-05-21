<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachments\CreateSetupAssetTypesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachments\DeleteSetupAssetTypesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachments\GetSetupAssetTypesAttachmentsFile;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachments\ListSetupAssetTypesAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachments\UpdateSetupAssetTypesAttachmentsFile;

class AssetTypeAttachments extends BaseResource
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
    public function listSetupAssetTypesAttachmentsFiles(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesAttachmentsFiles($companyId, $assetTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function createSetupAssetTypesAttachmentsFiles(mixed $companyId, mixed $assetTypeId): Response
    {
        return $this->connector->send(new CreateSetupAssetTypesAttachmentsFiles($companyId, $assetTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesAttachmentsFile(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesAttachmentsFile($companyId, $assetTypeId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteSetupAssetTypesAttachmentsFile(mixed $companyId, mixed $assetTypeId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteSetupAssetTypesAttachmentsFile($companyId, $assetTypeId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateSetupAssetTypesAttachmentsFile(mixed $companyId, mixed $assetTypeId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateSetupAssetTypesAttachmentsFile($companyId, $assetTypeId, $fileId));
    }
}

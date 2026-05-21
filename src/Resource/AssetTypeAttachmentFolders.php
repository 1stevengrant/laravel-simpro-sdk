<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachmentFolders\CreateSetupAssetTypesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachmentFolders\DeleteSetupAssetTypesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachmentFolders\GetSetupAssetTypesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachmentFolders\ListSetupAssetTypesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\AssetTypeAttachmentFolders\UpdateSetupAssetTypesAttachmentsFolder;

class AssetTypeAttachmentFolders extends BaseResource
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
    public function listSetupAssetTypesAttachmentsFolders(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupAssetTypesAttachmentsFolders($companyId, $assetTypeId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     */
    public function createSetupAssetTypesAttachmentsFolders(mixed $companyId, mixed $assetTypeId): Response
    {
        return $this->connector->send(new CreateSetupAssetTypesAttachmentsFolders($companyId, $assetTypeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupAssetTypesAttachmentsFolder(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupAssetTypesAttachmentsFolder($companyId, $assetTypeId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteSetupAssetTypesAttachmentsFolder(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteSetupAssetTypesAttachmentsFolder($companyId, $assetTypeId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $assetTypeId  A valid asset type id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateSetupAssetTypesAttachmentsFolder(
        mixed $companyId,
        mixed $assetTypeId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateSetupAssetTypesAttachmentsFolder($companyId, $assetTypeId, $folderId));
    }
}

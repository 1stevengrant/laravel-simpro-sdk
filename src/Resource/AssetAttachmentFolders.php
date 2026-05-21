<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\AssetAttachmentFolders\CreateSitesAssetsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\AssetAttachmentFolders\DeleteSitesAssetsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\AssetAttachmentFolders\GetSitesAssetsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\AssetAttachmentFolders\ListSitesAssetsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\AssetAttachmentFolders\UpdateSitesAssetsAttachmentsFolder;

class AssetAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSitesAssetsAttachmentsFolders(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSitesAssetsAttachmentsFolders($companyId, $siteId, $assetId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     */
    public function createSitesAssetsAttachmentsFolders(mixed $companyId, mixed $siteId, mixed $assetId): Response
    {
        return $this->connector->send(new CreateSitesAssetsAttachmentsFolders($companyId, $siteId, $assetId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSitesAssetsAttachmentsFolder(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSitesAssetsAttachmentsFolder($companyId, $siteId, $assetId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteSitesAssetsAttachmentsFolder(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteSitesAssetsAttachmentsFolder($companyId, $siteId, $assetId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $assetId  A valid asset id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateSitesAssetsAttachmentsFolder(
        mixed $companyId,
        mixed $siteId,
        mixed $assetId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateSitesAssetsAttachmentsFolder($companyId, $siteId, $assetId, $folderId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\SiteAttachmentFolders\CreateSitesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\SiteAttachmentFolders\DeleteSitesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\SiteAttachmentFolders\GetSitesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\SiteAttachmentFolders\ListSitesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\SiteAttachmentFolders\UpdateSitesAttachmentsFolder;

class SiteAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listSitesAttachmentsFolders(
        mixed $companyId,
        mixed $siteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSitesAttachmentsFolders($companyId, $siteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     */
    public function createSitesAttachmentsFolders(mixed $companyId, mixed $siteId): Response
    {
        return $this->connector->send(new CreateSitesAttachmentsFolders($companyId, $siteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSitesAttachmentsFolder(
        mixed $companyId,
        mixed $siteId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSitesAttachmentsFolder($companyId, $siteId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteSitesAttachmentsFolder(mixed $companyId, mixed $siteId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteSitesAttachmentsFolder($companyId, $siteId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $siteId  A valid site id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateSitesAttachmentsFolder(mixed $companyId, mixed $siteId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateSitesAttachmentsFolder($companyId, $siteId, $folderId));
    }
}

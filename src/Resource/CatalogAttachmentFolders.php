<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogAttachmentFolders\CreateCatalogsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\CatalogAttachmentFolders\DeleteCatalogsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\CatalogAttachmentFolders\GetCatalogsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\CatalogAttachmentFolders\ListCatalogsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\CatalogAttachmentFolders\UpdateCatalogsAttachmentsFolder;

class CatalogAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCatalogsAttachmentsFolders(
        mixed $companyId,
        mixed $catalogId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCatalogsAttachmentsFolders($companyId, $catalogId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function createCatalogsAttachmentsFolders(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new CreateCatalogsAttachmentsFolders($companyId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalogsAttachmentsFolder(
        mixed $companyId,
        mixed $catalogId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCatalogsAttachmentsFolder($companyId, $catalogId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteCatalogsAttachmentsFolder(mixed $companyId, mixed $catalogId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteCatalogsAttachmentsFolder($companyId, $catalogId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateCatalogsAttachmentsFolder(mixed $companyId, mixed $catalogId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateCatalogsAttachmentsFolder($companyId, $catalogId, $folderId));
    }
}

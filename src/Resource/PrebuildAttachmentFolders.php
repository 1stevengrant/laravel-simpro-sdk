<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PrebuildAttachmentFolders\CreatePrebuildsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\PrebuildAttachmentFolders\DeletePrebuildsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\PrebuildAttachmentFolders\GetPrebuildsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\PrebuildAttachmentFolders\ListPrebuildsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\PrebuildAttachmentFolders\UpdatePrebuildsAttachmentsFolder;

class PrebuildAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listPrebuildsAttachmentsFolders(
        mixed $companyId,
        mixed $prebuildId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPrebuildsAttachmentsFolders($companyId, $prebuildId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function createPrebuildsAttachmentsFolders(mixed $companyId, mixed $prebuildId): Response
    {
        return $this->connector->send(new CreatePrebuildsAttachmentsFolders($companyId, $prebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPrebuildsAttachmentsFolder(
        mixed $companyId,
        mixed $prebuildId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPrebuildsAttachmentsFolder($companyId, $prebuildId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deletePrebuildsAttachmentsFolder(mixed $companyId, mixed $prebuildId, mixed $folderId): Response
    {
        return $this->connector->send(new DeletePrebuildsAttachmentsFolder($companyId, $prebuildId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updatePrebuildsAttachmentsFolder(mixed $companyId, mixed $prebuildId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdatePrebuildsAttachmentsFolder($companyId, $prebuildId, $folderId));
    }
}

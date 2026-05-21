<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\PrebuildAttachments\CreatePrebuildsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\PrebuildAttachments\DeletePrebuildsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\PrebuildAttachments\GetPrebuildsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\PrebuildAttachments\ListPrebuildsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\PrebuildAttachments\UpdatePrebuildsAttachmentsFile;

class PrebuildAttachments extends BaseResource
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
    public function listPrebuildsAttachmentsFiles(
        mixed $companyId,
        mixed $prebuildId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListPrebuildsAttachmentsFiles($companyId, $prebuildId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     */
    public function createPrebuildsAttachmentsFiles(mixed $companyId, mixed $prebuildId): Response
    {
        return $this->connector->send(new CreatePrebuildsAttachmentsFiles($companyId, $prebuildId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getPrebuildsAttachmentsFile(
        mixed $companyId,
        mixed $prebuildId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetPrebuildsAttachmentsFile($companyId, $prebuildId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $fileId  A valid file id
     */
    public function deletePrebuildsAttachmentsFile(mixed $companyId, mixed $prebuildId, mixed $fileId): Response
    {
        return $this->connector->send(new DeletePrebuildsAttachmentsFile($companyId, $prebuildId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $prebuildId  A valid prebuild id
     * @param  mixed  $fileId  A valid file id
     */
    public function updatePrebuildsAttachmentsFile(mixed $companyId, mixed $prebuildId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdatePrebuildsAttachmentsFile($companyId, $prebuildId, $fileId));
    }
}

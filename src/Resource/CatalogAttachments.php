<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CatalogAttachments\CreateCatalogsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\CatalogAttachments\DeleteCatalogsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\CatalogAttachments\GetCatalogsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\CatalogAttachments\ListCatalogsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\CatalogAttachments\UpdateCatalogsAttachmentsFile;

class CatalogAttachments extends BaseResource
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
    public function listCatalogsAttachmentsFiles(
        mixed $companyId,
        mixed $catalogId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCatalogsAttachmentsFiles($companyId, $catalogId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     */
    public function createCatalogsAttachmentsFiles(mixed $companyId, mixed $catalogId): Response
    {
        return $this->connector->send(new CreateCatalogsAttachmentsFiles($companyId, $catalogId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCatalogsAttachmentsFile(
        mixed $companyId,
        mixed $catalogId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCatalogsAttachmentsFile($companyId, $catalogId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteCatalogsAttachmentsFile(mixed $companyId, mixed $catalogId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteCatalogsAttachmentsFile($companyId, $catalogId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateCatalogsAttachmentsFile(mixed $companyId, mixed $catalogId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateCatalogsAttachmentsFile($companyId, $catalogId, $fileId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorAttachmentFolders\CreateContractorsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\ContractorAttachmentFolders\DeleteContractorsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\ContractorAttachmentFolders\GetContractorsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\ContractorAttachmentFolders\ListContractorsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\ContractorAttachmentFolders\UpdateContractorsAttachmentsFolder;

class ContractorAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listContractorsAttachmentsFolders(
        mixed $companyId,
        mixed $contractorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorsAttachmentsFolders($companyId, $contractorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     */
    public function createContractorsAttachmentsFolders(mixed $companyId, mixed $contractorId): Response
    {
        return $this->connector->send(new CreateContractorsAttachmentsFolders($companyId, $contractorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorsAttachmentsFolder(
        mixed $companyId,
        mixed $contractorId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetContractorsAttachmentsFolder($companyId, $contractorId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteContractorsAttachmentsFolder(mixed $companyId, mixed $contractorId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteContractorsAttachmentsFolder($companyId, $contractorId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateContractorsAttachmentsFolder(mixed $companyId, mixed $contractorId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateContractorsAttachmentsFolder($companyId, $contractorId, $folderId));
    }
}

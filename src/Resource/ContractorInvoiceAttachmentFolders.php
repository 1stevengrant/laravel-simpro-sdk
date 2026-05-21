<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceAttachmentFolders\CreateContractorInvoicesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceAttachmentFolders\DeleteContractorInvoicesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceAttachmentFolders\GetContractorInvoicesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceAttachmentFolders\ListContractorInvoicesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\ContractorInvoiceAttachmentFolders\UpdateContractorInvoicesAttachmentsFolder;

class ContractorInvoiceAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listContractorInvoicesAttachmentsFolders(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorInvoicesAttachmentsFolders($companyId, $contractorInvoiceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     */
    public function createContractorInvoicesAttachmentsFolders(mixed $companyId, mixed $contractorInvoiceId): Response
    {
        return $this->connector->send(new CreateContractorInvoicesAttachmentsFolders($companyId, $contractorInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetContractorInvoicesAttachmentsFolder($companyId, $contractorInvoiceId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteContractorInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteContractorInvoicesAttachmentsFolder($companyId, $contractorInvoiceId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateContractorInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $contractorInvoiceId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateContractorInvoicesAttachmentsFolder($companyId, $contractorInvoiceId, $folderId));
    }
}

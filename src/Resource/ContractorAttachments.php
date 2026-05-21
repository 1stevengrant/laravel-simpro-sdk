<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorAttachments\CreateContractorsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorAttachments\DeleteContractorsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorAttachments\GetContractorsAttachmentsFile;
use StevenGrant\SimproSdk\Requests\ContractorAttachments\ListContractorsAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\ContractorAttachments\UpdateContractorsAttachmentsFile;

class ContractorAttachments extends BaseResource
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
    public function listContractorsAttachmentsFiles(
        mixed $companyId,
        mixed $contractorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorsAttachmentsFiles($companyId, $contractorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     */
    public function createContractorsAttachmentsFiles(mixed $companyId, mixed $contractorId): Response
    {
        return $this->connector->send(new CreateContractorsAttachmentsFiles($companyId, $contractorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorsAttachmentsFile(
        mixed $companyId,
        mixed $contractorId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetContractorsAttachmentsFile($companyId, $contractorId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteContractorsAttachmentsFile(mixed $companyId, mixed $contractorId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteContractorsAttachmentsFile($companyId, $contractorId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateContractorsAttachmentsFile(mixed $companyId, mixed $contractorId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateContractorsAttachmentsFile($companyId, $contractorId, $fileId));
    }
}

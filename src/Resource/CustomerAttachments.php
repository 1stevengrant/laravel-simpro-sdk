<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerAttachments\CreateCustomersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\CustomerAttachments\DeleteCustomersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\CustomerAttachments\GetCustomersAttachmentsFile;
use StevenGrant\SimproSdk\Requests\CustomerAttachments\ListCustomersAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\CustomerAttachments\UpdateCustomersAttachmentsFile;

class CustomerAttachments extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersAttachmentsFiles(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersAttachmentsFiles($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersAttachmentsFiles(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersAttachmentsFiles($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersAttachmentsFile(
        mixed $companyId,
        mixed $customerId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersAttachmentsFile($companyId, $customerId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteCustomersAttachmentsFile(mixed $companyId, mixed $customerId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteCustomersAttachmentsFile($companyId, $customerId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateCustomersAttachmentsFile(mixed $companyId, mixed $customerId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateCustomersAttachmentsFile($companyId, $customerId, $fileId));
    }
}

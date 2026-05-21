<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerAttachmentFolders\CreateCustomersAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\CustomerAttachmentFolders\DeleteCustomersAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\CustomerAttachmentFolders\GetCustomersAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\CustomerAttachmentFolders\ListCustomersAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\CustomerAttachmentFolders\UpdateCustomersAttachmentsFolder;

class CustomerAttachmentFolders extends BaseResource
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
    public function listCustomersAttachmentsFolders(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersAttachmentsFolders($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersAttachmentsFolders(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersAttachmentsFolders($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersAttachmentsFolder(
        mixed $companyId,
        mixed $customerId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersAttachmentsFolder($companyId, $customerId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteCustomersAttachmentsFolder(mixed $companyId, mixed $customerId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteCustomersAttachmentsFolder($companyId, $customerId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateCustomersAttachmentsFolder(mixed $companyId, mixed $customerId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateCustomersAttachmentsFolder($companyId, $customerId, $folderId));
    }
}

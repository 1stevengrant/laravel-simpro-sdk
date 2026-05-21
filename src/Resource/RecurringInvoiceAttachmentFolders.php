<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceAttachmentFolders\CreateRecurringInvoicesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceAttachmentFolders\DeleteRecurringInvoicesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceAttachmentFolders\GetRecurringInvoicesAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceAttachmentFolders\ListRecurringInvoicesAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceAttachmentFolders\UpdateRecurringInvoicesAttachmentsFolder;

class RecurringInvoiceAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringInvoicesAttachmentsFolders(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringInvoicesAttachmentsFolders($companyId, $recurringInvoiceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     */
    public function createRecurringInvoicesAttachmentsFolders(mixed $companyId, mixed $recurringInvoiceId): Response
    {
        return $this->connector->send(new CreateRecurringInvoicesAttachmentsFolders($companyId, $recurringInvoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringInvoicesAttachmentsFolder($companyId, $recurringInvoiceId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteRecurringInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteRecurringInvoicesAttachmentsFolder($companyId, $recurringInvoiceId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateRecurringInvoicesAttachmentsFolder(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateRecurringInvoicesAttachmentsFolder($companyId, $recurringInvoiceId, $folderId));
    }
}

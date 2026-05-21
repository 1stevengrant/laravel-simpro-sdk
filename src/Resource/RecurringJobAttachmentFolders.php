<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringJobAttachmentFolders\CreateRecurringJobsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\RecurringJobAttachmentFolders\DeleteRecurringJobsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\RecurringJobAttachmentFolders\GetRecurringJobsAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\RecurringJobAttachmentFolders\ListRecurringJobsAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\RecurringJobAttachmentFolders\UpdateRecurringJobsAttachmentsFolder;

class RecurringJobAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringJobsAttachmentsFolders(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringJobsAttachmentsFolders($companyId, $recurringJobId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     */
    public function createRecurringJobsAttachmentsFolders(mixed $companyId, mixed $recurringJobId): Response
    {
        return $this->connector->send(new CreateRecurringJobsAttachmentsFolders($companyId, $recurringJobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringJobsAttachmentsFolder(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringJobsAttachmentsFolder($companyId, $recurringJobId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteRecurringJobsAttachmentsFolder(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new DeleteRecurringJobsAttachmentsFolder($companyId, $recurringJobId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateRecurringJobsAttachmentsFolder(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $folderId,
    ): Response {
        return $this->connector->send(new UpdateRecurringJobsAttachmentsFolder($companyId, $recurringJobId, $folderId));
    }
}

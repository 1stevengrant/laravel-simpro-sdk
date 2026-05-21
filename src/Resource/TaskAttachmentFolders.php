<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TaskAttachmentFolders\CreateTasksAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\TaskAttachmentFolders\DeleteTasksAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\TaskAttachmentFolders\GetTasksAttachmentsFolder;
use StevenGrant\SimproSdk\Requests\TaskAttachmentFolders\ListTasksAttachmentsFolders;
use StevenGrant\SimproSdk\Requests\TaskAttachmentFolders\UpdateTasksAttachmentsFolder;

class TaskAttachmentFolders extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listTasksAttachmentsFolders(
        mixed $companyId,
        mixed $taskId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTasksAttachmentsFolders($companyId, $taskId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     */
    public function createTasksAttachmentsFolders(mixed $companyId, mixed $taskId): Response
    {
        return $this->connector->send(new CreateTasksAttachmentsFolders($companyId, $taskId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $folderId  A valid folder id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTasksAttachmentsFolder(
        mixed $companyId,
        mixed $taskId,
        mixed $folderId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTasksAttachmentsFolder($companyId, $taskId, $folderId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $folderId  A valid folder id
     */
    public function deleteTasksAttachmentsFolder(mixed $companyId, mixed $taskId, mixed $folderId): Response
    {
        return $this->connector->send(new DeleteTasksAttachmentsFolder($companyId, $taskId, $folderId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $folderId  A valid folder id
     */
    public function updateTasksAttachmentsFolder(mixed $companyId, mixed $taskId, mixed $folderId): Response
    {
        return $this->connector->send(new UpdateTasksAttachmentsFolder($companyId, $taskId, $folderId));
    }
}

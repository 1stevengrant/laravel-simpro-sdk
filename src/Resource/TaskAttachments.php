<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TaskAttachments\CreateTasksAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\TaskAttachments\DeleteTasksAttachmentsFile;
use StevenGrant\SimproSdk\Requests\TaskAttachments\GetTasksAttachmentsFile;
use StevenGrant\SimproSdk\Requests\TaskAttachments\ListTasksAttachmentsFiles;
use StevenGrant\SimproSdk\Requests\TaskAttachments\UpdateTasksAttachmentsFile;

class TaskAttachments extends BaseResource
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
    public function listTasksAttachmentsFiles(
        mixed $companyId,
        mixed $taskId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTasksAttachmentsFiles($companyId, $taskId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     */
    public function createTasksAttachmentsFiles(mixed $companyId, mixed $taskId): Response
    {
        return $this->connector->send(new CreateTasksAttachmentsFiles($companyId, $taskId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $fileId  A valid file id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getTasksAttachmentsFile(
        mixed $companyId,
        mixed $taskId,
        mixed $fileId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetTasksAttachmentsFile($companyId, $taskId, $fileId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $fileId  A valid file id
     */
    public function deleteTasksAttachmentsFile(mixed $companyId, mixed $taskId, mixed $fileId): Response
    {
        return $this->connector->send(new DeleteTasksAttachmentsFile($companyId, $taskId, $fileId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $fileId  A valid file id
     */
    public function updateTasksAttachmentsFile(mixed $companyId, mixed $taskId, mixed $fileId): Response
    {
        return $this->connector->send(new UpdateTasksAttachmentsFile($companyId, $taskId, $fileId));
    }
}

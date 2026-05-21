<?php

namespace StevenGrant\SimproSdk\Requests\TaskAttachmentFolders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteTasksAttachmentsFolder
 */
class DeleteTasksAttachmentsFolder extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/tasks/{$this->taskId}/attachments/folders/{$this->folderId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $taskId  A valid task id
     * @param  mixed  $folderId  A valid folder id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $taskId,
        protected mixed $folderId,
    ) {}
}

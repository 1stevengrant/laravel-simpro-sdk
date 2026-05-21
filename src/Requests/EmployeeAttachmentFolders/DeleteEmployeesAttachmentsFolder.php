<?php

namespace StevenGrant\SimproSdk\Requests\EmployeeAttachmentFolders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteEmployeesAttachmentsFolder
 */
class DeleteEmployeesAttachmentsFolder extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/employees/{$this->employeeId}/attachments/folders/{$this->folderId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $folderId  A valid folder id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $employeeId,
        protected mixed $folderId,
    ) {}
}

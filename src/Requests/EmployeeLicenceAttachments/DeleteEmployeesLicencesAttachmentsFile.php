<?php

namespace StevenGrant\SimproSdk\Requests\EmployeeLicenceAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteEmployeesLicencesAttachmentsFile
 */
class DeleteEmployeesLicencesAttachmentsFile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/employees/{$this->employeeId}/licences/{$this->licenceId}/attachments/files/{$this->fileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $employeeId  A valid employee id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $employeeId,
        protected mixed $licenceId,
        protected mixed $fileId,
    ) {}
}

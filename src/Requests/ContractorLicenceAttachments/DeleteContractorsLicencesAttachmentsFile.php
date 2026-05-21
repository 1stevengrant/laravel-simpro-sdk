<?php

namespace StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteContractorsLicencesAttachmentsFile
 */
class DeleteContractorsLicencesAttachmentsFile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/contractors/{$this->contractorId}/licences/{$this->licenceId}/attachments/files/{$this->fileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $fileId  A valid file id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contractorId,
        protected mixed $licenceId,
        protected mixed $fileId,
    ) {}
}

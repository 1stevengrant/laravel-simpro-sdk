<?php

namespace StevenGrant\SimproSdk\Requests\ContractorLicenceAttachments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createContractorsLicencesAttachmentsFiles
 */
class CreateContractorsLicencesAttachmentsFiles extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/contractors/{$this->contractorId}/licences/{$this->licenceId}/attachments/files";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contractorId,
        protected mixed $licenceId,
    ) {}
}

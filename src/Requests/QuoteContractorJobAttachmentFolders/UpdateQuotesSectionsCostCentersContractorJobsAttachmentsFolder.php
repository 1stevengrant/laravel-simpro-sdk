<?php

namespace StevenGrant\SimproSdk\Requests\QuoteContractorJobAttachmentFolders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateQuotesSectionsCostCentersContractorJobsAttachmentsFolder
 */
class UpdateQuotesSectionsCostCentersContractorJobsAttachmentsFolder extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/quotes/{$this->quoteId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/contractorJobs/{$this->contractorJobId}/attachments/folders/{$this->folderId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $folderId  A valid folder id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $quoteId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $contractorJobId,
        protected mixed $folderId,
    ) {}
}

<?php

namespace StevenGrant\SimproSdk\Requests\LeadAttachmentFolders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteLeadsAttachmentsFolder
 */
class DeleteLeadsAttachmentsFolder extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/leads/{$this->leadId}/attachments/folders/{$this->folderId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $leadId  A valid lead id
     * @param  mixed  $folderId  A valid folder id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $leadId,
        protected mixed $folderId,
    ) {}
}

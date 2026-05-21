<?php

namespace StevenGrant\SimproSdk\Requests\VendorAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteVendorsAttachmentsFile
 */
class DeleteVendorsAttachmentsFile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendors/{$this->vendorId}/attachments/files/{$this->fileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $fileId  A valid file id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorId,
        protected mixed $fileId,
    ) {}
}

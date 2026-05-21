<?php

namespace StevenGrant\SimproSdk\Requests\CatalogAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCatalogsAttachmentsFile
 */
class DeleteCatalogsAttachmentsFile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/catalogs/{$this->catalogId}/attachments/files/{$this->fileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $catalogId  A valid catalog id
     * @param  mixed  $fileId  A valid file id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $catalogId,
        protected mixed $fileId,
    ) {}
}

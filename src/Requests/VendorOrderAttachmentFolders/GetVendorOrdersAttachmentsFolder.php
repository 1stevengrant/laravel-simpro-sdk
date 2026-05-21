<?php

namespace StevenGrant\SimproSdk\Requests\VendorOrderAttachmentFolders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVendorOrdersAttachmentsFolder
 */
class GetVendorOrdersAttachmentsFolder extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorOrders/{$this->vendorOrderId}/attachments/folders/{$this->folderId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $folderId  A valid folder id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorOrderId,
        protected mixed $folderId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

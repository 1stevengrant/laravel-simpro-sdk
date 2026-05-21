<?php

namespace StevenGrant\SimproSdk\Requests\VendorReceiptItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateVendorOrdersReceiptsCatalog
 */
class UpdateVendorOrdersReceiptsCatalog extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorOrders/{$this->vendorOrderId}/receipts/{$this->vendorReceiptId}/catalogs/{$this->vendorReceiptItemId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorReceiptItemId  A valid vendor receipt item id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorOrderId,
        protected mixed $vendorReceiptId,
        protected mixed $vendorReceiptItemId,
    ) {}
}

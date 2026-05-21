<?php

namespace StevenGrant\SimproSdk\Requests\VendorReceiptCredits;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteVendorOrdersReceiptsCredit
 */
class DeleteVendorOrdersReceiptsCredit extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorOrders/{$this->vendorOrderId}/receipts/{$this->vendorReceiptId}/credits/{$this->vendorCreditId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorReceiptId  A valid vendor receipt id
     * @param  mixed  $vendorCreditId  A valid vendor credit id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorOrderId,
        protected mixed $vendorReceiptId,
        protected mixed $vendorCreditId,
    ) {}
}

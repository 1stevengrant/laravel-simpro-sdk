<?php

namespace StevenGrant\SimproSdk\Requests\VendorOrderItemAllocations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * replaceVendorOrdersCatalogsAllocations
 */
class ReplaceVendorOrdersCatalogsAllocations extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendorOrders/{$this->vendorOrderId}/catalogs/{$this->vendorOrderItemId}/allocations";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorOrderId  A valid vendor order id
     * @param  mixed  $vendorOrderItemId  A valid vendor order item id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorOrderId,
        protected mixed $vendorOrderItemId,
    ) {}
}

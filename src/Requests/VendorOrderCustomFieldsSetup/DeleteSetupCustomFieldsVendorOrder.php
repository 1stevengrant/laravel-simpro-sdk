<?php

namespace StevenGrant\SimproSdk\Requests\VendorOrderCustomFieldsSetup;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupCustomFieldsVendorOrder
 */
class DeleteSetupCustomFieldsVendorOrder extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/customFields/vendorOrders/{$this->customFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customFieldId,
    ) {}
}

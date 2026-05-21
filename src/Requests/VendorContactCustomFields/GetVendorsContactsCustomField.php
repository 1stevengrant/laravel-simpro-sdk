<?php

namespace StevenGrant\SimproSdk\Requests\VendorContactCustomFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVendorsContactsCustomField
 */
class GetVendorsContactsCustomField extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/vendors/{$this->vendorId}/contacts/{$this->contactId}/customFields/{$this->customFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $vendorId  A valid vendor id
     * @param  mixed  $contactId  A valid contact id
     * @param  mixed  $customFieldId  A valid custom field id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $vendorId,
        protected mixed $contactId,
        protected mixed $customFieldId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

<?php

namespace StevenGrant\SimproSdk\Requests\CustomerContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomersContact
 */
class DeleteCustomersContact extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customers/{$this->customerId}/contacts/{$this->contactId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contactId  A valid contact id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerId,
        protected mixed $contactId,
    ) {}
}

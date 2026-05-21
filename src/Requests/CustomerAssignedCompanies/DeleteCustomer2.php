<?php

namespace StevenGrant\SimproSdk\Requests\CustomerAssignedCompanies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomer2
 */
class DeleteCustomer2 extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customers/{$this->customerId}/companies/{$this->customerCompanyId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $customerCompanyId  A valid customer company id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerId,
        protected mixed $customerCompanyId,
    ) {}
}

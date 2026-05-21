<?php

namespace StevenGrant\SimproSdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomersIndividual
 */
class DeleteCustomersIndividual extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customers/individuals/{$this->customerId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerType,
        protected mixed $customerId,
    ) {}
}

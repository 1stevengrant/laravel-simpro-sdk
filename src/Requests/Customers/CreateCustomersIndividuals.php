<?php

namespace StevenGrant\SimproSdk\Requests\Customers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCustomersIndividuals
 */
class CreateCustomersIndividuals extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customers/individuals";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  null|mixed  $createSite  Add an associated site when creating the customer
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerType,
        protected mixed $createSite = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['createSite' => $this->createSite]);
    }
}

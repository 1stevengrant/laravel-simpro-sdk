<?php

namespace StevenGrant\SimproSdk\Requests\CustomerProfiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSetupCustomerProfile
 */
class DeleteSetupCustomerProfile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/customerProfiles/{$this->customerProfileId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerProfileId  A valid customer profile id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $customerProfileId,
    ) {}
}

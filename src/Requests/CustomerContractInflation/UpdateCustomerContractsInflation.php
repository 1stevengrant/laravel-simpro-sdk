<?php

namespace StevenGrant\SimproSdk\Requests\CustomerContractInflation;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateCustomerContractsInflation
 */
class UpdateCustomerContractsInflation extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/customerContracts/{$this->contractId}/inflation/{$this->inflationId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contractId,
        protected mixed $inflationId,
    ) {}
}

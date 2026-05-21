<?php

namespace StevenGrant\SimproSdk\Requests\PaymentTerms;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateSetupAccountsPaymentTerm
 */
class UpdateSetupAccountsPaymentTerm extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/setup/accounts/paymentTerms/{$this->paymentTermId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $paymentTermId  A valid payment term id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $paymentTermId,
    ) {}
}

<?php

namespace StevenGrant\SimproSdk\Requests\ContractorInvoiceCustomFields;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateContractorInvoicesCustomField
 */
class UpdateContractorInvoicesCustomField extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/contractorInvoices/{$this->contractorInvoiceId}/customFields/{$this->customFieldId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorInvoiceId  A valid contractor invoice id
     * @param  mixed  $customFieldId  A valid custom field id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $contractorInvoiceId,
        protected mixed $customFieldId,
    ) {}
}

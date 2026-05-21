<?php

namespace StevenGrant\SimproSdk\Requests\Invoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteInvoice
 */
class DeleteInvoice extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/invoices/{$this->invoiceId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $invoiceId,
    ) {}
}

<?php

namespace StevenGrant\SimproSdk\Requests\InvoiceCreditNotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getInvoicesCreditNote
 */
class GetInvoicesCreditNote extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/invoices/{$this->invoiceId}/creditNotes/{$this->creditNoteId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $invoiceId,
        protected mixed $creditNoteId,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['columns' => $this->columns]);
    }
}

<?php

namespace StevenGrant\SimproSdk\Requests\CreditNoteNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateInvoicesCreditNotesNote
 */
class UpdateInvoicesCreditNotesNote extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/invoices/{$this->invoiceId}/creditNotes/{$this->creditNoteId}/notes/{$this->noteId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $invoiceId,
        protected mixed $creditNoteId,
        protected mixed $noteId,
    ) {}
}

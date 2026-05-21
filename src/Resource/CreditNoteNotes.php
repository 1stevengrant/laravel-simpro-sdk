<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CreditNoteNotes\CreateInvoicesCreditNotesNotes;
use StevenGrant\SimproSdk\Requests\CreditNoteNotes\DeleteInvoicesCreditNotesNote;
use StevenGrant\SimproSdk\Requests\CreditNoteNotes\GetInvoicesCreditNotesNote;
use StevenGrant\SimproSdk\Requests\CreditNoteNotes\ListInvoicesCreditNotesNotes;
use StevenGrant\SimproSdk\Requests\CreditNoteNotes\UpdateInvoicesCreditNotesNote;

class CreditNoteNotes extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listInvoicesCreditNotesNotes(
        mixed $companyId,
        mixed $invoiceId,
        mixed $creditNoteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListInvoicesCreditNotesNotes($companyId, $invoiceId, $creditNoteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     */
    public function createInvoicesCreditNotesNotes(mixed $companyId, mixed $invoiceId, mixed $creditNoteId): Response
    {
        return $this->connector->send(new CreateInvoicesCreditNotesNotes($companyId, $invoiceId, $creditNoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getInvoicesCreditNotesNote(
        mixed $companyId,
        mixed $invoiceId,
        mixed $creditNoteId,
        mixed $noteId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetInvoicesCreditNotesNote($companyId, $invoiceId, $creditNoteId, $noteId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     */
    public function deleteInvoicesCreditNotesNote(
        mixed $companyId,
        mixed $invoiceId,
        mixed $creditNoteId,
        mixed $noteId,
    ): Response {
        return $this->connector->send(new DeleteInvoicesCreditNotesNote($companyId, $invoiceId, $creditNoteId, $noteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     */
    public function updateInvoicesCreditNotesNote(
        mixed $companyId,
        mixed $invoiceId,
        mixed $creditNoteId,
        mixed $noteId,
    ): Response {
        return $this->connector->send(new UpdateInvoicesCreditNotesNote($companyId, $invoiceId, $creditNoteId, $noteId));
    }
}

<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\InvoiceCreditNotes\CreateInvoicesCreditNotes;
use StevenGrant\SimproSdk\Requests\InvoiceCreditNotes\DeleteInvoicesCreditNote;
use StevenGrant\SimproSdk\Requests\InvoiceCreditNotes\GetInvoicesCreditNote;
use StevenGrant\SimproSdk\Requests\InvoiceCreditNotes\ListInvoicesCreditNotes;
use StevenGrant\SimproSdk\Requests\InvoiceCreditNotes\UpdateInvoicesCreditNote;

class InvoiceCreditNotes extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listInvoicesCreditNotes(
        mixed $companyId,
        mixed $invoiceId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListInvoicesCreditNotes($companyId, $invoiceId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     */
    public function createInvoicesCreditNotes(mixed $companyId, mixed $invoiceId): Response
    {
        return $this->connector->send(new CreateInvoicesCreditNotes($companyId, $invoiceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getInvoicesCreditNote(
        mixed $companyId,
        mixed $invoiceId,
        mixed $creditNoteId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetInvoicesCreditNote($companyId, $invoiceId, $creditNoteId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     */
    public function deleteInvoicesCreditNote(mixed $companyId, mixed $invoiceId, mixed $creditNoteId): Response
    {
        return $this->connector->send(new DeleteInvoicesCreditNote($companyId, $invoiceId, $creditNoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $invoiceId  A valid invoice id
     * @param  mixed  $creditNoteId  A valid credit note id
     */
    public function updateInvoicesCreditNote(mixed $companyId, mixed $invoiceId, mixed $creditNoteId): Response
    {
        return $this->connector->send(new UpdateInvoicesCreditNote($companyId, $invoiceId, $creditNoteId));
    }
}

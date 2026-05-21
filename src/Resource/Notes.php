<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Notes\CreateCreditNotesNotes;
use StevenGrant\SimproSdk\Requests\Notes\DeleteCreditNotesNote;
use StevenGrant\SimproSdk\Requests\Notes\GetCreditNotesNote;
use StevenGrant\SimproSdk\Requests\Notes\ListCreditNotesNotes;
use StevenGrant\SimproSdk\Requests\Notes\UpdateCreditNotesNote;

class Notes extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCreditNotesNotes(
        mixed $companyId,
        mixed $creditNoteId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCreditNotesNotes($companyId, $creditNoteId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $creditNoteId  A valid credit note id
     */
    public function createCreditNotesNotes(mixed $companyId, mixed $creditNoteId): Response
    {
        return $this->connector->send(new CreateCreditNotesNotes($companyId, $creditNoteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCreditNotesNote(
        mixed $companyId,
        mixed $creditNoteId,
        mixed $noteId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCreditNotesNote($companyId, $creditNoteId, $noteId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     */
    public function deleteCreditNotesNote(mixed $companyId, mixed $creditNoteId, mixed $noteId): Response
    {
        return $this->connector->send(new DeleteCreditNotesNote($companyId, $creditNoteId, $noteId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $creditNoteId  A valid credit note id
     * @param  mixed  $noteId  A valid note id
     */
    public function updateCreditNotesNote(mixed $companyId, mixed $creditNoteId, mixed $noteId): Response
    {
        return $this->connector->send(new UpdateCreditNotesNote($companyId, $creditNoteId, $noteId));
    }
}

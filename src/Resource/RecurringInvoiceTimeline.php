<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringInvoiceTimeline\ListRecurringInvoicesTimelines;

class RecurringInvoiceTimeline extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function listRecurringInvoicesTimelines(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $search = null,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new ListRecurringInvoicesTimelines($companyId, $recurringInvoiceId, $search, $columns));
    }
}

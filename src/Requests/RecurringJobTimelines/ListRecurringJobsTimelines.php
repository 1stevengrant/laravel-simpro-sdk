<?php

namespace StevenGrant\SimproSdk\Requests\RecurringJobTimelines;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listRecurringJobsTimelines
 */
class ListRecurringJobsTimelines extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/recurringJobs/{$this->recurringJobId}/timelines";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $recurringJobId,
        protected mixed $search = null,
        protected mixed $columns = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['search' => $this->search, 'columns' => $this->columns]);
    }
}

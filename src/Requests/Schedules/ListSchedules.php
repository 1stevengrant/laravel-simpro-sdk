<?php

namespace StevenGrant\SimproSdk\Requests\Schedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listSchedules
 */
class ListSchedules extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/schedules";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  null|mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  null|mixed  $page  Set the page number on paginated request
     * @param  null|mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  null|mixed  $limit  Set the limit of number of records in a request
     * @param  null|mixed  $jobId  Filter schedules by job ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     * @param  null|mixed  $quoteId  Filter schedules by quote ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     * @param  null|mixed  $leadId  Filter schedules by lead ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $pageSize = null,
        protected mixed $page = null,
        protected mixed $orderby = null,
        protected mixed $limit = null,
        protected mixed $jobId = null,
        protected mixed $quoteId = null,
        protected mixed $leadId = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'search' => $this->search,
            'columns' => $this->columns,
            'pageSize' => $this->pageSize,
            'page' => $this->page,
            'orderby' => $this->orderby,
            'limit' => $this->limit,
            'JobID' => $this->jobId,
            'QuoteID' => $this->quoteId,
            'LeadID' => $this->leadId,
        ]);
    }
}

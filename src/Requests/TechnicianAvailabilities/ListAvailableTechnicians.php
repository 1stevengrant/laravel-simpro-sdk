<?php

namespace StevenGrant\SimproSdk\Requests\TechnicianAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listAvailableTechnicians
 */
class ListAvailableTechnicians extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/available/technicians";
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
     * @param  mixed  $startDate  Start date of the date range (YYYY-MM-DD format). Required.
     * @param  mixed  $endDate  End date of the date range (YYYY-MM-DD format). Required.
     * @param  mixed  $duration  Duration of each time slot in minutes. Minimum: 15 minutes. Required.
     * @param  null|mixed  $technicianIds  Filter by technician ID(s). Comma-separated list can be provided. Optional.
     * @param  null|mixed  $timeStart  Filter slots starting at or after this time (HH:MM format). Optional.
     * @param  null|mixed  $timeEnd  Filter slots ending at or before this time (HH:MM format). Optional.
     * @param  null|mixed  $zoneId  Filter technicians by zone ID. Optional.
     * @param  null|mixed  $costCenterId  Filter technicians by cost center/skill ID. Optional.
     * @param  null|mixed  $limit  Maximum number of technicians to return. Default: 10, Max: 50. Optional.
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $pageSize = null,
        protected mixed $page = null,
        protected mixed $orderby = null,
        protected mixed $limit = null,
        protected mixed $startDate,
        protected mixed $endDate,
        protected mixed $duration,
        protected mixed $technicianIds = null,
        protected mixed $timeStart = null,
        protected mixed $timeEnd = null,
        protected mixed $zoneId = null,
        protected mixed $costCenterId = null,
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
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Duration' => $this->duration,
            'TechnicianIDs' => $this->technicianIds,
            'TimeStart' => $this->timeStart,
            'TimeEnd' => $this->timeEnd,
            'ZoneID' => $this->zoneId,
            'CostCenterID' => $this->costCenterId,
            'Limit' => $this->limit,
        ]);
    }
}

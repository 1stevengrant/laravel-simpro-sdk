<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TechnicianAvailabilities\ListAvailableTechnicians;

class TechnicianAvailabilities extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     * @param  mixed  $startDate  Start date of the date range (YYYY-MM-DD format). Required.
     * @param  mixed  $endDate  End date of the date range (YYYY-MM-DD format). Required.
     * @param  mixed  $duration  Duration of each time slot in minutes. Minimum: 15 minutes. Required.
     * @param  mixed  $technicianIds  Filter by technician ID(s). Comma-separated list can be provided. Optional.
     * @param  mixed  $timeStart  Filter slots starting at or after this time (HH:MM format). Optional.
     * @param  mixed  $timeEnd  Filter slots ending at or before this time (HH:MM format). Optional.
     * @param  mixed  $zoneId  Filter technicians by zone ID. Optional.
     * @param  mixed  $costCenterId  Filter technicians by cost center/skill ID. Optional.
     * @param  mixed  $limit  Maximum number of technicians to return. Default: 10, Max: 50. Optional.
     */
    public function listAvailableTechnicians(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $startDate,
        mixed $endDate,
        mixed $duration,
        mixed $technicianIds = null,
        mixed $timeStart = null,
        mixed $timeEnd = null,
        mixed $zoneId = null,
        mixed $costCenterId = null,
    ): Response {
        return $this->connector->send(new ListAvailableTechnicians($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $startDate, $endDate, $duration, $technicianIds, $timeStart, $timeEnd, $zoneId, $costCenterId, $limit));
    }
}

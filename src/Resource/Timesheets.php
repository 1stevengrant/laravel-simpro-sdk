<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Timesheets\ListTimesheets;

class Timesheets extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $uid  Filter by Schedule Block UID. Supports single UID or multiple UIDs separated by commas.
     * @param  mixed  $startDate  Set the start date of an employee time sheet
     * @param  mixed  $endDate  Set the end date of an employee time sheet
     * @param  mixed  $includes  Set the type of schedule required.
     * @param  mixed  $scheduleType  Set the type of schedule for timesheet
     * @param  mixed  $employeeId  Filter timesheets by employee or contractor ID
     */
    public function listTimesheets(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $uid = null,
        mixed $startDate = null,
        mixed $endDate = null,
        mixed $includes = null,
        mixed $scheduleType = null,
        mixed $employeeId = null,
    ): Response {
        return $this->connector->send(new ListTimesheets($companyId, $search, $columns, $uid, $startDate, $endDate, $includes, $scheduleType, $employeeId));
    }
}

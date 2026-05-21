<?php

namespace StevenGrant\SimproSdk\Requests\PlantTimesheets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listPlantTypesPlantsTimesheets
 */
class ListPlantTypesPlantsTimesheets extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/plantTypes/{$this->plantTypeId}/plants/{$this->plantId}/timesheets";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $plantTypeId  A valid plant type id
     * @param  mixed  $plantId  A valid plant id
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  null|mixed  $uid  Filter by Schedule Block UID. Supports single UID or multiple UIDs separated by commas.
     * @param  null|mixed  $startDate  Set the start date of an employee time sheet
     * @param  null|mixed  $endDate  Set the end date of an employee time sheet
     * @param  null|mixed  $includes  Set the type of schedule required.
     * @param  null|mixed  $scheduleType  Set the type of schedule for timesheet
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $plantTypeId,
        protected mixed $plantId,
        protected mixed $search = null,
        protected mixed $columns = null,
        protected mixed $uid = null,
        protected mixed $startDate = null,
        protected mixed $endDate = null,
        protected mixed $includes = null,
        protected mixed $scheduleType = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'search' => $this->search,
            'columns' => $this->columns,
            'UID' => $this->uid,
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Includes' => $this->includes,
            'ScheduleType' => $this->scheduleType,
        ]);
    }
}

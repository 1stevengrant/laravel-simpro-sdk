<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Schedules\CreateSchedules;
use StevenGrant\SimproSdk\Requests\Schedules\DeleteSchedule;
use StevenGrant\SimproSdk\Requests\Schedules\DeleteSchedules;
use StevenGrant\SimproSdk\Requests\Schedules\GetSchedule;
use StevenGrant\SimproSdk\Requests\Schedules\ListSchedules;

class Schedules extends BaseResource
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
     * @param  mixed  $jobId  Filter schedules by job ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     * @param  mixed  $quoteId  Filter schedules by quote ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     * @param  mixed  $leadId  Filter schedules by lead ID. Supports operators: lt(), le(), gt(), ge(), ne(), between(), in(), !in().
     */
    public function listSchedules(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
        mixed $jobId = null,
        mixed $quoteId = null,
        mixed $leadId = null,
    ): Response {
        return $this->connector->send(new ListSchedules($companyId, $search, $columns, $pageSize, $page, $orderby, $limit, $jobId, $quoteId, $leadId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSchedules(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSchedules($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function deleteSchedules(mixed $companyId): Response
    {
        return $this->connector->send(new DeleteSchedules($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $scheduleId  A valid schedule id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSchedule(mixed $companyId, mixed $scheduleId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSchedule($companyId, $scheduleId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $scheduleId  A valid schedule id
     */
    public function deleteSchedule(mixed $companyId, mixed $scheduleId): Response
    {
        return $this->connector->send(new DeleteSchedule($companyId, $scheduleId));
    }
}

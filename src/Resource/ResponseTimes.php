<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ResponseTimes\CreateSetupResponseTimes;
use StevenGrant\SimproSdk\Requests\ResponseTimes\DeleteSetupResponseTime;
use StevenGrant\SimproSdk\Requests\ResponseTimes\GetSetupResponseTime;
use StevenGrant\SimproSdk\Requests\ResponseTimes\ListSetupResponseTimes;
use StevenGrant\SimproSdk\Requests\ResponseTimes\UpdateSetupResponseTime;

class ResponseTimes extends BaseResource
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
     */
    public function listSetupResponseTimes(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupResponseTimes($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupResponseTimes(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupResponseTimes($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $responseTimeId  A valid response time id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupResponseTime(mixed $companyId, mixed $responseTimeId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetSetupResponseTime($companyId, $responseTimeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $responseTimeId  A valid response time id
     */
    public function deleteSetupResponseTime(mixed $companyId, mixed $responseTimeId): Response
    {
        return $this->connector->send(new DeleteSetupResponseTime($companyId, $responseTimeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $responseTimeId  A valid response time id
     */
    public function updateSetupResponseTime(mixed $companyId, mixed $responseTimeId): Response
    {
        return $this->connector->send(new UpdateSetupResponseTime($companyId, $responseTimeId));
    }
}

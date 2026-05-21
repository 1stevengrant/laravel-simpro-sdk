<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TestHistories\GetTestHistory;
use StevenGrant\SimproSdk\Requests\TestHistories\ListTestHistories;

class TestHistories extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listTestHistories(
        mixed $companyId,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListTestHistories($companyId, $pageSize, $page, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $testHistoryId  A valid test history id
     */
    public function getTestHistory(mixed $companyId, mixed $testHistoryId): Response
    {
        return $this->connector->send(new GetTestHistory($companyId, $testHistoryId));
    }
}

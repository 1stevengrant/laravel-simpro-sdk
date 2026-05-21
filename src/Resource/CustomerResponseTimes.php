<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerResponseTimes\CreateCustomersResponseTimes;
use StevenGrant\SimproSdk\Requests\CustomerResponseTimes\DeleteCustomersResponseTime;
use StevenGrant\SimproSdk\Requests\CustomerResponseTimes\GetCustomersResponseTime;
use StevenGrant\SimproSdk\Requests\CustomerResponseTimes\ListCustomersResponseTimes;
use StevenGrant\SimproSdk\Requests\CustomerResponseTimes\UpdateCustomersResponseTime;

class CustomerResponseTimes extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersResponseTimes(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersResponseTimes($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersResponseTimes(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersResponseTimes($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $responseTimeId  A valid response time id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersResponseTime(
        mixed $companyId,
        mixed $customerId,
        mixed $responseTimeId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersResponseTime($companyId, $customerId, $responseTimeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $responseTimeId  A valid response time id
     */
    public function deleteCustomersResponseTime(mixed $companyId, mixed $customerId, mixed $responseTimeId): Response
    {
        return $this->connector->send(new DeleteCustomersResponseTime($companyId, $customerId, $responseTimeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $responseTimeId  A valid response time id
     */
    public function updateCustomersResponseTime(mixed $companyId, mixed $customerId, mixed $responseTimeId): Response
    {
        return $this->connector->send(new UpdateCustomersResponseTime($companyId, $customerId, $responseTimeId));
    }
}

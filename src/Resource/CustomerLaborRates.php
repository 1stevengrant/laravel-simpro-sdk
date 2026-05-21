<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerLaborRates\CreateCustomersLaborRates;
use StevenGrant\SimproSdk\Requests\CustomerLaborRates\DeleteCustomersLaborRate;
use StevenGrant\SimproSdk\Requests\CustomerLaborRates\GetCustomersLaborRate;
use StevenGrant\SimproSdk\Requests\CustomerLaborRates\ListCustomersLaborRates;
use StevenGrant\SimproSdk\Requests\CustomerLaborRates\UpdateCustomersLaborRate;

class CustomerLaborRates extends BaseResource
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
    public function listCustomersLaborRates(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersLaborRates($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersLaborRates(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersLaborRates($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $laborRateId  A valid labor rate id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersLaborRate(
        mixed $companyId,
        mixed $customerId,
        mixed $laborRateId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersLaborRate($companyId, $customerId, $laborRateId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function deleteCustomersLaborRate(mixed $companyId, mixed $customerId, mixed $laborRateId): Response
    {
        return $this->connector->send(new DeleteCustomersLaborRate($companyId, $customerId, $laborRateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function updateCustomersLaborRate(mixed $companyId, mixed $customerId, mixed $laborRateId): Response
    {
        return $this->connector->send(new UpdateCustomersLaborRate($companyId, $customerId, $laborRateId));
    }
}

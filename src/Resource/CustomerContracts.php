<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContracts\CreateCustomersContracts;
use StevenGrant\SimproSdk\Requests\CustomerContracts\DeleteCustomersContract;
use StevenGrant\SimproSdk\Requests\CustomerContracts\GetCustomersContract;
use StevenGrant\SimproSdk\Requests\CustomerContracts\ListCustomersContracts;
use StevenGrant\SimproSdk\Requests\CustomerContracts\UpdateCustomersContract;

class CustomerContracts extends BaseResource
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
    public function listCustomersContracts(
        mixed $companyId,
        mixed $customerId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersContracts($companyId, $customerId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     */
    public function createCustomersContracts(mixed $companyId, mixed $customerId): Response
    {
        return $this->connector->send(new CreateCustomersContracts($companyId, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContract(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContract($companyId, $customerId, $contractId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     */
    public function deleteCustomersContract(mixed $companyId, mixed $customerId, mixed $contractId): Response
    {
        return $this->connector->send(new DeleteCustomersContract($companyId, $customerId, $contractId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     */
    public function updateCustomersContract(mixed $companyId, mixed $customerId, mixed $contractId): Response
    {
        return $this->connector->send(new UpdateCustomersContract($companyId, $customerId, $contractId));
    }
}

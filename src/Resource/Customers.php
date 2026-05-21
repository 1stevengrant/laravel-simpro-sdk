<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\Customers\CreateCustomers;
use StevenGrant\SimproSdk\Requests\Customers\CreateCustomersIndividuals;
use StevenGrant\SimproSdk\Requests\Customers\DeleteCustomer;
use StevenGrant\SimproSdk\Requests\Customers\DeleteCustomersIndividual;
use StevenGrant\SimproSdk\Requests\Customers\GetCustomer;
use StevenGrant\SimproSdk\Requests\Customers\GetCustomersIndividual;
use StevenGrant\SimproSdk\Requests\Customers\ListCustomers;
use StevenGrant\SimproSdk\Requests\Customers\ListCustomers2;
use StevenGrant\SimproSdk\Requests\Customers\ListCustomersIndividuals;
use StevenGrant\SimproSdk\Requests\Customers\UpdateCustomer;
use StevenGrant\SimproSdk\Requests\Customers\UpdateCustomersIndividual;

class Customers extends BaseResource
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
    public function listCustomers(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomers($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomers2(
        mixed $companyId,
        mixed $customerType,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomers2($companyId, $customerType, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $createSite  Add an associated site when creating the customer
     */
    public function createCustomers(mixed $companyId, mixed $customerType, mixed $createSite = null): Response
    {
        return $this->connector->send(new CreateCustomers($companyId, $customerType, $createSite));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomer(
        mixed $companyId,
        mixed $customerType,
        mixed $customerId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomer($companyId, $customerType, $customerId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     */
    public function deleteCustomer(mixed $companyId, mixed $customerType, mixed $customerId): Response
    {
        return $this->connector->send(new DeleteCustomer($companyId, $customerType, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $createSite  Add an associated site when creating the customer
     */
    public function updateCustomer(
        mixed $companyId,
        mixed $customerType,
        mixed $customerId,
        mixed $createSite = null,
    ): Response {
        return $this->connector->send(new UpdateCustomer($companyId, $customerType, $customerId, $createSite));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersIndividuals(
        mixed $companyId,
        mixed $customerType,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersIndividuals($companyId, $customerType, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $createSite  Add an associated site when creating the customer
     */
    public function createCustomersIndividuals(mixed $companyId, mixed $customerType, mixed $createSite = null): Response
    {
        return $this->connector->send(new CreateCustomersIndividuals($companyId, $customerType, $createSite));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersIndividual(
        mixed $companyId,
        mixed $customerType,
        mixed $customerId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersIndividual($companyId, $customerType, $customerId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     */
    public function deleteCustomersIndividual(mixed $companyId, mixed $customerType, mixed $customerId): Response
    {
        return $this->connector->send(new DeleteCustomersIndividual($companyId, $customerType, $customerId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerType  A valid customer type
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $createSite  Add an associated site when creating the customer
     */
    public function updateCustomersIndividual(
        mixed $companyId,
        mixed $customerType,
        mixed $customerId,
        mixed $createSite = null,
    ): Response {
        return $this->connector->send(new UpdateCustomersIndividual($companyId, $customerType, $customerId, $createSite));
    }
}

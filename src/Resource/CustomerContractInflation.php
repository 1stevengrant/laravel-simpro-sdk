<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\CreateCustomerContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\CreateCustomersContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\DeleteCustomerContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\DeleteCustomersContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\GetCustomerContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\GetCustomersContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\ListCustomerContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\ListCustomersContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\UpdateCustomerContractsInflation;
use StevenGrant\SimproSdk\Requests\CustomerContractInflation\UpdateCustomersContractsInflation;

class CustomerContractInflation extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomerContractsInflation(
        mixed $companyId,
        mixed $contractId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomerContractsInflation($companyId, $contractId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     */
    public function createCustomerContractsInflation(mixed $companyId, mixed $contractId): Response
    {
        return $this->connector->send(new CreateCustomerContractsInflation($companyId, $contractId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomerContractsInflation(
        mixed $companyId,
        mixed $contractId,
        mixed $inflationId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomerContractsInflation($companyId, $contractId, $inflationId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     */
    public function deleteCustomerContractsInflation(mixed $companyId, mixed $contractId, mixed $inflationId): Response
    {
        return $this->connector->send(new DeleteCustomerContractsInflation($companyId, $contractId, $inflationId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     */
    public function updateCustomerContractsInflation(mixed $companyId, mixed $contractId, mixed $inflationId): Response
    {
        return $this->connector->send(new UpdateCustomerContractsInflation($companyId, $contractId, $inflationId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listCustomersContractsInflation(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListCustomersContractsInflation($companyId, $customerId, $contractId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     */
    public function createCustomersContractsInflation(mixed $companyId, mixed $customerId, mixed $contractId): Response
    {
        return $this->connector->send(new CreateCustomersContractsInflation($companyId, $customerId, $contractId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContractsInflation(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $inflationId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContractsInflation($companyId, $customerId, $contractId, $inflationId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     */
    public function deleteCustomersContractsInflation(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $inflationId,
    ): Response {
        return $this->connector->send(new DeleteCustomersContractsInflation($companyId, $customerId, $contractId, $inflationId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $inflationId  A valid inflation id
     */
    public function updateCustomersContractsInflation(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $inflationId,
    ): Response {
        return $this->connector->send(new UpdateCustomersContractsInflation($companyId, $customerId, $contractId, $inflationId));
    }
}

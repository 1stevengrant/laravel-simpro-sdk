<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CustomerContractLaborRates\CreateCustomersContractsLaborRates;
use StevenGrant\SimproSdk\Requests\CustomerContractLaborRates\DeleteCustomersContractsLaborRate;
use StevenGrant\SimproSdk\Requests\CustomerContractLaborRates\GetCustomersContractsLaborRate;
use StevenGrant\SimproSdk\Requests\CustomerContractLaborRates\ListCustomersContractsLaborRates;
use StevenGrant\SimproSdk\Requests\CustomerContractLaborRates\UpdateCustomersContractsLaborRate;

class CustomerContractLaborRates extends BaseResource
{
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
    public function listCustomersContractsLaborRates(
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
        return $this->connector->send(new ListCustomersContractsLaborRates($companyId, $customerId, $contractId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     */
    public function createCustomersContractsLaborRates(mixed $companyId, mixed $customerId, mixed $contractId): Response
    {
        return $this->connector->send(new CreateCustomersContractsLaborRates($companyId, $customerId, $contractId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $laborRateId  A valid labor rate id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getCustomersContractsLaborRate(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $laborRateId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetCustomersContractsLaborRate($companyId, $customerId, $contractId, $laborRateId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function deleteCustomersContractsLaborRate(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $laborRateId,
    ): Response {
        return $this->connector->send(new DeleteCustomersContractsLaborRate($companyId, $customerId, $contractId, $laborRateId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $customerId  A valid customer id
     * @param  mixed  $contractId  A valid contract id
     * @param  mixed  $laborRateId  A valid labor rate id
     */
    public function updateCustomersContractsLaborRate(
        mixed $companyId,
        mixed $customerId,
        mixed $contractId,
        mixed $laborRateId,
    ): Response {
        return $this->connector->send(new UpdateCustomersContractsLaborRate($companyId, $customerId, $contractId, $laborRateId));
    }
}

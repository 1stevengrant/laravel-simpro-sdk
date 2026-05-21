<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorVariances\CreateContractorVariances;
use StevenGrant\SimproSdk\Requests\ContractorVariances\DeleteContractorVariance;
use StevenGrant\SimproSdk\Requests\ContractorVariances\GetContractorVariance;
use StevenGrant\SimproSdk\Requests\ContractorVariances\ListContractorVariances;
use StevenGrant\SimproSdk\Requests\ContractorVariances\UpdateContractorVariance;

class ContractorVariances extends BaseResource
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
    public function listContractorVariances(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorVariances($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createContractorVariances(mixed $companyId): Response
    {
        return $this->connector->send(new CreateContractorVariances($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorVarianceId  A valid contractor variance id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorVariance(mixed $companyId, mixed $contractorVarianceId, mixed $columns = null): Response
    {
        return $this->connector->send(new GetContractorVariance($companyId, $contractorVarianceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorVarianceId  A valid contractor variance id
     */
    public function deleteContractorVariance(mixed $companyId, mixed $contractorVarianceId): Response
    {
        return $this->connector->send(new DeleteContractorVariance($companyId, $contractorVarianceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorVarianceId  A valid contractor variance id
     */
    public function updateContractorVariance(mixed $companyId, mixed $contractorVarianceId): Response
    {
        return $this->connector->send(new UpdateContractorVariance($companyId, $contractorVarianceId));
    }
}

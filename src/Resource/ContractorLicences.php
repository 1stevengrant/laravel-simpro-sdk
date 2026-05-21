<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorLicences\CreateContractorsLicences;
use StevenGrant\SimproSdk\Requests\ContractorLicences\DeleteContractorsLicence;
use StevenGrant\SimproSdk\Requests\ContractorLicences\GetContractorsLicence;
use StevenGrant\SimproSdk\Requests\ContractorLicences\ListContractorsLicences;
use StevenGrant\SimproSdk\Requests\ContractorLicences\UpdateContractorsLicence;

class ContractorLicences extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listContractorsLicences(
        mixed $companyId,
        mixed $contractorId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListContractorsLicences($companyId, $contractorId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     */
    public function createContractorsLicences(mixed $companyId, mixed $contractorId): Response
    {
        return $this->connector->send(new CreateContractorsLicences($companyId, $contractorId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getContractorsLicence(
        mixed $companyId,
        mixed $contractorId,
        mixed $licenceId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetContractorsLicence($companyId, $contractorId, $licenceId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function deleteContractorsLicence(mixed $companyId, mixed $contractorId, mixed $licenceId): Response
    {
        return $this->connector->send(new DeleteContractorsLicence($companyId, $contractorId, $licenceId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorId  A valid contractor id
     * @param  mixed  $licenceId  A valid licence id
     */
    public function updateContractorsLicence(mixed $companyId, mixed $contractorId, mixed $licenceId): Response
    {
        return $this->connector->send(new UpdateContractorsLicence($companyId, $contractorId, $licenceId));
    }
}

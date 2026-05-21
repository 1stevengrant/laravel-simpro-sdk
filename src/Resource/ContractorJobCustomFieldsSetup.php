<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\ContractorJobCustomFieldsSetup\CreateSetupCustomFieldsContractorJobs;
use StevenGrant\SimproSdk\Requests\ContractorJobCustomFieldsSetup\DeleteSetupCustomFieldsContractorJob;
use StevenGrant\SimproSdk\Requests\ContractorJobCustomFieldsSetup\GetSetupCustomFieldsContractorJob;
use StevenGrant\SimproSdk\Requests\ContractorJobCustomFieldsSetup\ListSetupCustomFieldsContractorJobs;
use StevenGrant\SimproSdk\Requests\ContractorJobCustomFieldsSetup\UpdateSetupCustomFieldsContractorJob;

class ContractorJobCustomFieldsSetup extends BaseResource
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
    public function listSetupCustomFieldsContractorJobs(
        mixed $companyId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListSetupCustomFieldsContractorJobs($companyId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     */
    public function createSetupCustomFieldsContractorJobs(mixed $companyId): Response
    {
        return $this->connector->send(new CreateSetupCustomFieldsContractorJobs($companyId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorJobId  A valid contractor job id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getSetupCustomFieldsContractorJob(
        mixed $companyId,
        mixed $contractorJobId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetSetupCustomFieldsContractorJob($companyId, $contractorJobId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorJobId  A valid contractor job id
     */
    public function deleteSetupCustomFieldsContractorJob(mixed $companyId, mixed $contractorJobId): Response
    {
        return $this->connector->send(new DeleteSetupCustomFieldsContractorJob($companyId, $contractorJobId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $contractorJobId  A valid contractor job id
     */
    public function updateSetupCustomFieldsContractorJob(mixed $companyId, mixed $contractorJobId): Response
    {
        return $this->connector->send(new UpdateSetupCustomFieldsContractorJob($companyId, $contractorJobId));
    }
}

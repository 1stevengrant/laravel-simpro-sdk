<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterOneOffs\CreateRecurringJobsSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterOneOffs\DeleteRecurringJobsSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterOneOffs\GetRecurringJobsSectionsCostCentersOneOff;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterOneOffs\ListRecurringJobsSectionsCostCentersOneOffs;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterOneOffs\UpdateRecurringJobsSectionsCostCentersOneOff;

class RecurringJobCostCenterOneOffs extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     * @param  mixed  $pageSize  The maximum number of results to be returned by a request.
     * @param  mixed  $page  Set the page number on paginated request
     * @param  mixed  $orderby  Set the order of the requested records, by prefixing '-' on the column name you can get records by descending order. Comma separated list can also be provided.
     * @param  mixed  $limit  Set the limit of number of records in a request
     */
    public function listRecurringJobsSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $search = null,
        mixed $columns = null,
        mixed $pageSize = null,
        mixed $page = null,
        mixed $orderby = null,
        mixed $limit = null,
    ): Response {
        return $this->connector->send(new ListRecurringJobsSectionsCostCentersOneOffs($companyId, $recurringJobId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringJobsSectionsCostCentersOneOffs(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringJobsSectionsCostCentersOneOffs($companyId, $recurringJobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringJobsSectionsCostCentersOneOff($companyId, $recurringJobId, $sectionId, $costCenterId, $oneOffId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function deleteRecurringJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new DeleteRecurringJobsSectionsCostCentersOneOff($companyId, $recurringJobId, $sectionId, $costCenterId, $oneOffId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $oneOffId  A valid one off id
     */
    public function updateRecurringJobsSectionsCostCentersOneOff(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $oneOffId,
    ): Response {
        return $this->connector->send(new UpdateRecurringJobsSectionsCostCentersOneOff($companyId, $recurringJobId, $sectionId, $costCenterId, $oneOffId));
    }
}

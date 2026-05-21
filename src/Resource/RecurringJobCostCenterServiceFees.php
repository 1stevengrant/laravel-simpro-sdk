<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterServiceFees\CreateRecurringJobsSectionsCostCentersServiceFees;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterServiceFees\DeleteRecurringJobsSectionsCostCentersServiceFee;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterServiceFees\GetRecurringJobsSectionsCostCentersServiceFee;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterServiceFees\ListRecurringJobsSectionsCostCentersServiceFees;
use StevenGrant\SimproSdk\Requests\RecurringJobCostCenterServiceFees\UpdateRecurringJobsSectionsCostCentersServiceFee;

class RecurringJobCostCenterServiceFees extends BaseResource
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
    public function listRecurringJobsSectionsCostCentersServiceFees(
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
        return $this->connector->send(new ListRecurringJobsSectionsCostCentersServiceFees($companyId, $recurringJobId, $sectionId, $costCenterId, $search, $columns, $pageSize, $page, $orderby, $limit));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringJobsSectionsCostCentersServiceFees(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringJobsSectionsCostCentersServiceFees($companyId, $recurringJobId, $sectionId, $costCenterId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     * @param  mixed  $columns  When listing or searching a resource, specify which columns to be displayed
     */
    public function getRecurringJobsSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
        mixed $columns = null,
    ): Response {
        return $this->connector->send(new GetRecurringJobsSectionsCostCentersServiceFee($companyId, $recurringJobId, $sectionId, $costCenterId, $serviceFeeId, $columns));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     */
    public function deleteRecurringJobsSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
    ): Response {
        return $this->connector->send(new DeleteRecurringJobsSectionsCostCentersServiceFee($companyId, $recurringJobId, $sectionId, $costCenterId, $serviceFeeId));
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $serviceFeeId  A valid service fee id
     */
    public function updateRecurringJobsSectionsCostCentersServiceFee(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
        mixed $serviceFeeId,
    ): Response {
        return $this->connector->send(new UpdateRecurringJobsSectionsCostCentersServiceFee($companyId, $recurringJobId, $sectionId, $costCenterId, $serviceFeeId));
    }
}

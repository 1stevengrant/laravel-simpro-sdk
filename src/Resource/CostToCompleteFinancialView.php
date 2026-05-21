<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\CostToCompleteFinancialView\ListReportsJobsCostToCompleteFinancial;

class CostToCompleteFinancialView extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  mixed  $date  Filter by date, past and including
     * @param  mixed  $changeOrders  Including variations
     * @param  mixed  $includeCommitted  Committed Costs
     * @param  mixed  $includeOverheads  Overheads in Actuals
     * @param  mixed  $businessGroup  Filter by business group, comma separated list can also be provided.
     * @param  mixed  $costCentre  Filter by cost centre, comma separated list can also be provided.
     * @param  mixed  $customerId  Filter results by a customer
     * @param  mixed  $siteId  Filter results by a site
     * @param  mixed  $customerGroup  Filter by customer group, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $customerProfile  Filter by customer profile, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $salesPerson  Filter by sales person, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $projectManager  Filter by project manager, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $projectStatus  Filter by project status, comma separated list can also be provided.
     * @param  mixed  $projectTags  Filter by project tags, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $customerTags  Filter by customer tags, comma separated list can also be provided. Input -1 for no association.
     * @param  mixed  $jobId  Filter results by a job
     */
    public function listReportsJobsCostToCompleteFinancial(
        mixed $companyId,
        mixed $search = null,
        mixed $date = null,
        mixed $changeOrders = null,
        mixed $includeCommitted = null,
        mixed $includeOverheads = null,
        mixed $businessGroup = null,
        mixed $costCentre = null,
        mixed $customerId = null,
        mixed $siteId = null,
        mixed $customerGroup = null,
        mixed $customerProfile = null,
        mixed $salesPerson = null,
        mixed $projectManager = null,
        mixed $projectStatus = null,
        mixed $projectTags = null,
        mixed $customerTags = null,
        mixed $jobId = null,
    ): Response {
        return $this->connector->send(new ListReportsJobsCostToCompleteFinancial($companyId, $search, $date, $changeOrders, $includeCommitted, $includeOverheads, $businessGroup, $costCentre, $customerId, $siteId, $customerGroup, $customerProfile, $salesPerson, $projectManager, $projectStatus, $projectTags, $customerTags, $jobId));
    }
}

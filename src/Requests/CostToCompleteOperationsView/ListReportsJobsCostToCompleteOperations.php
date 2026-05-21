<?php

namespace StevenGrant\SimproSdk\Requests\CostToCompleteOperationsView;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listReportsJobsCostToCompleteOperations
 */
class ListReportsJobsCostToCompleteOperations extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/reports/jobs/costToComplete/operations";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  null|mixed  $search  Search result must have a match on all provided fields or a match on any of the provided fields.
     * @param  null|mixed  $date  Filter by date, past and including
     * @param  null|mixed  $changeOrders  Including variations
     * @param  null|mixed  $includeCommitted  Committed Costs
     * @param  null|mixed  $includeOverheads  Overheads in Actuals
     * @param  null|mixed  $businessGroup  Filter by business group, comma separated list can also be provided.
     * @param  null|mixed  $costCentre  Filter by cost centre, comma separated list can also be provided.
     * @param  null|mixed  $customerId  Filter results by a customer
     * @param  null|mixed  $siteId  Filter results by a site
     * @param  null|mixed  $customerGroup  Filter by customer group, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $customerProfile  Filter by customer profile, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $salesPerson  Filter by sales person, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $projectManager  Filter by project manager, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $projectStatus  Filter by project status, comma separated list can also be provided.
     * @param  null|mixed  $projectTags  Filter by project tags, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $customerTags  Filter by customer tags, comma separated list can also be provided. Input -1 for no association.
     * @param  null|mixed  $jobId  Filter results by a job
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $search = null,
        protected mixed $date = null,
        protected mixed $changeOrders = null,
        protected mixed $includeCommitted = null,
        protected mixed $includeOverheads = null,
        protected mixed $businessGroup = null,
        protected mixed $costCentre = null,
        protected mixed $customerId = null,
        protected mixed $siteId = null,
        protected mixed $customerGroup = null,
        protected mixed $customerProfile = null,
        protected mixed $salesPerson = null,
        protected mixed $projectManager = null,
        protected mixed $projectStatus = null,
        protected mixed $projectTags = null,
        protected mixed $customerTags = null,
        protected mixed $jobId = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'search' => $this->search,
            'date' => $this->date,
            'changeOrders' => $this->changeOrders,
            'includeCommitted' => $this->includeCommitted,
            'includeOverheads' => $this->includeOverheads,
            'businessGroup' => $this->businessGroup,
            'costCentre' => $this->costCentre,
            'customerID' => $this->customerId,
            'siteID' => $this->siteId,
            'customerGroup' => $this->customerGroup,
            'customerProfile' => $this->customerProfile,
            'salesPerson' => $this->salesPerson,
            'projectManager' => $this->projectManager,
            'projectStatus' => $this->projectStatus,
            'projectTags' => $this->projectTags,
            'customerTags' => $this->customerTags,
            'jobID' => $this->jobId,
        ]);
    }
}

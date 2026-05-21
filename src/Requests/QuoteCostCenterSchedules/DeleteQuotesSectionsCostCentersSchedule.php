<?php

namespace StevenGrant\SimproSdk\Requests\QuoteCostCenterSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteQuotesSectionsCostCentersSchedule
 */
class DeleteQuotesSectionsCostCentersSchedule extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/api/v1.0/companies/{$this->companyId}/quotes/{$this->quoteId}/sections/{$this->sectionId}/costCenters/{$this->costCenterId}/schedules/{$this->scheduleId}";
    }

    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $quoteId  A valid quote id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     * @param  mixed  $scheduleId  A valid schedule id
     */
    public function __construct(
        protected mixed $companyId,
        protected mixed $quoteId,
        protected mixed $sectionId,
        protected mixed $costCenterId,
        protected mixed $scheduleId,
    ) {}
}

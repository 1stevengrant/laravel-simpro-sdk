<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatesForRecurringJobCostCenter\CreateRecurringJobsSectionsCostCentersTakeOffTemplates;

class TakeOffTemplatesForRecurringJobCostCenter extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringJobId  A valid recurring job id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringJobsSectionsCostCentersTakeOffTemplates(
        mixed $companyId,
        mixed $recurringJobId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringJobsSectionsCostCentersTakeOffTemplates($companyId, $recurringJobId, $sectionId, $costCenterId));
    }
}

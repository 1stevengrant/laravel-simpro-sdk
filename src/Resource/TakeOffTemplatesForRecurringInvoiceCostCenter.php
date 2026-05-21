<?php

namespace StevenGrant\SimproSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use StevenGrant\SimproSdk\Requests\TakeOffTemplatesForRecurringInvoiceCostCenter\CreateRecurringInvoicesSectionsCostCentersTakeOffTemplates;

class TakeOffTemplatesForRecurringInvoiceCostCenter extends BaseResource
{
    /**
     * @param  mixed  $companyId  A build with Multi-company setup may have companyID >= 0, other builds use 0 by default.<br />
     *                            For more information about Multi-company, see:<br />
     *                            https://helpguide.simprogroup.com/Content/Service-and-Enterprise/Multi-company.htm
     * @param  mixed  $recurringInvoiceId  A valid recurring invoice id
     * @param  mixed  $sectionId  A valid section id
     * @param  mixed  $costCenterId  A valid cost center id
     */
    public function createRecurringInvoicesSectionsCostCentersTakeOffTemplates(
        mixed $companyId,
        mixed $recurringInvoiceId,
        mixed $sectionId,
        mixed $costCenterId,
    ): Response {
        return $this->connector->send(new CreateRecurringInvoicesSectionsCostCentersTakeOffTemplates($companyId, $recurringInvoiceId, $sectionId, $costCenterId));
    }
}
